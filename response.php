<<?php
    header("content-type: text/xml");
	$icecream = array("0"=>"Select IceCream: ", "1"=>" Banana Nut Fudge", "2"=>" Black Walnut", "3"=>" Burgundy Cherry", "4"=>" Butterscotch Ribbon","5"=>" Cherry Macaroon","6"=>" Chocolate","7"=>" Chocolate Almond","8"=>" Chocolate Chip","9"=>" Chocolate Fudge","10"=>" Chocolate Mint","11"=>" Chocolate Ribbon","12"=>" Coffee","13"=>" Coffee Candy","14"=>" Date Nut","15"=>" Egg Nog","16"=>" French Vanilla","17"=>" Green Mint Stick","18"=>" Lemon Crisp","19"=>" Lemon Custard","20"=>" Lemon Sherbet","21"=>" Maple Nut","22"=>" Orange Sherbet", "23"=>" Peach","24"=>" Peppermint Fudge Ribbon","25"=>" Peppermint Stick","26"=>" Pineapple Sherbet","27"=>" Raspberry Sherbet","28"=>" Rocky Road","29"=>" Strawberry","30"=>" Vanilla","31"=>" Vanilla Burnt Almond");	$icecreamanswer   = 0;
    $quiz = array(
	    "icecream" => $icecream,		
	);
	// $to 	= $_REQUEST['to'];
	// $from   = $_REQUEST['from'];
	$answer = $_REQUEST['Body'];
	foreach($icecream as $x => $x_value) {
        echo "Key=" . $x . ", Value=" . $x_value;
        echo "<br>";
	}
	if (is_numeric($answer)) {
			$icecream = $icecream[$answer]; 
			$reply ="Your order for".$icecream."is placed.";
	}
else if(is_string($answer)){
		array_merge($icecream,$reply);
				}
	}
//	$replyx=array();
//		else if(is_string($answer)){
//			$replyx=$icecream;
//		}
       
    echo "<?xml version=\"1.0\" encoding=\"UTF-8\"?>\n";
?>

<Response>
	<Sms>
			<?php
				
					foreach($reply as $key => $value){
						echo $value;
					}
				
				
			?>
	</Sms>
</Response>
