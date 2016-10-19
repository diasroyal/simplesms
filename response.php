<?php
    header("content-type: text/xml");

	$icecream = array("Select IceCream:"," Banana Nut Fudge"," Black Walnut"," Burgundy Cherry"," Butterscotch Ribbon"," Cherry Macaroon"," Chocolate"," Chocolate Almond"," Chocolate Chip"," Chocolate Fudge"," Chocolate Mint"," Chocolate Ribbon"," Coffee"," Coffee Candy"," Date Nut"," Egg Nog"," French Vanilla"," Green Mint Stick"," Lemon Crisp"," Lemon Custard"," Lemon Sherbet"," Maple Nut"," Orange Sherbet"," Peach"," Peppermint Fudge Ribbon"," Peppermint Stick"," Pineapple Sherbet"," Raspberry Sherbet"," Rocky Road"," Strawberry"," Vanilla"," Vanilla Burnt Almond");
 $icecreamanswer   = 0;
    $quiz = array(
	    "icecream" => $icecream,		
	);
	// $to 	= $_REQUEST['to'];
	// $from   = $_REQUEST['from'];
	$answer = $_GET['Body'];
	foreach($icecream as $x_value) {
        echo "Value=" . $x_value;
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
				
					foreach($reply as $value){
						echo $value;
					}
				
				
			?>
	</Sms>
</Response>
