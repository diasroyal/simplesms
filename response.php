<?php
	session_start();
    header("content-type: text/xml");
	$answer = $_POST['Body'];
	if (strpos($answer, 'start') !== FALSE || strpos($answer, 'Start') !== FALSE || strpos($answer, 'START') !== FALSE || strpos($answer, 'restart') !== FALSE || strpos($answer, 'Restart') !== FALSE || strpos($answer, 'RESTART') !== FALSE) {
		$_SESSION['answer']='';
		$reply['welcome'] = printqt();
	}
	elseif (strpos($answer, 'add') !== FALSE || strpos($answer, 'sub') !== FALSE || strpos($answer, 'mul') !== FALSE || strpos($answer, 'div') !== FALSE || strpos($answer, 'Add') !== FALSE || strpos($answer, 'ADD') !== FALSE || strpos($answer, 'Sub') !== FALSE || strpos($answer, 'SUB') !== FALSE || strpos($answer, 'Mul') !== FALSE || strpos($answer, 'MUL') !== FALSE || strpos($answer, 'Div') !== FALSE || strpos($answer, 'DIV') !== FALSE) {
		$x = rand(1,100);
		$y = rand(1,100);
		switch ($answer) {
			case 'add':
			case 'Add':
			case 'ADD':
				$reply = $x.' + '.$y;
				$_SESSION['answer']=$x+$y;
				break;
			case 'sub':
			case 'Sub':
			case 'SUB':
				$reply = $x.' - '.$y;
				$_SESSION['answer']=$x-$y;
				break;
			case 'mul':
			case 'Mul':
			case 'MUL':
				$reply = $x.' * '.$y;
				$_SESSION['answer']=$x*$y;
				break;
			case 'div':
			case 'Div':
			case 'DIV':
				$reply = $x.' / '.$y;
				$_SESSION['answer']=($x/$y);
				break;	
			default:
				$makereply = 'Enter valid numer or type "restart" to start again'.PHP_EOL;
				break;
		}
	}
	elseif (is_numeric($answer) && is_numeric($_SESSION['answer'])) {
		if(round($answer) == round($_SESSION['answer'])){
			$reply['prev'] = 'Correct answer'.PHP_EOL.PHP_EOL;
			$reply['welcome'] = printqt();
		}
		else{
			$reply['prev'] = 'Wrong answer'.PHP_EOL.'The Correct answer is '.$_SESSION['answer'].PHP_EOL;
			$reply['welcome'] = printqt();
		}
	}
	else{
		$_SESSION['answer']='';
		$reply['welcome'] = printqt();
	}
	// print_r($_SESSION);
	function printqt(){
		$makereply = 'QuizM! '.PHP_EOL.PHP_EOL.'Choose one of the following :'.PHP_EOL.PHP_EOL.'"Add" for Addition'.PHP_EOL.'"Sub" for Subtraction'.PHP_EOL.'"Mul" for Multiplication'.PHP_EOL.'"Div" for Division'.PHP_EOL;
		return $makereply;
	}
    echo "<?xml version=\"1.0\" encoding=\"UTF-8\"?>\n";
?>

<Response>
	<Sms>
			<?php
				if(is_array($reply)){
					foreach($reply as $key => $value){
						echo $value;
					}
				}
				else{
					echo $reply;
				}
			?>
	</Sms>
</Response>
