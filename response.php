<?php
    header("content-type: text/xml");
	$icecream = array(array("Which ice-cream would you like to have today ?",array("1. Banana Nut Fudge", "2. Black Walnut", "3. Burgundy Cherry", "4. Butterscotch Ribbon","5. Cherry Macaroon","6. Chocolate","7. Chocolate Almond","8. Chocolate Chip","9. Chocolate Fudge","10. Chocolate Mint","11. Chocolate Ribbon","12. Coffee","13. Coffee Candy","14. Date Nut","15. Egg Nog","16. French Vanilla","17. Green Mint Stick","18. Lemon Crisp","19. Lemon Custard","20. Lemon Sherbet","21. Maple Nut","22. Orange Sherbet", "23. Peach","24. Peppermint Fudge Ribbon","25. Peppermint Stick","26. Pineapple Sherbet","27. Raspberry Sherbet","28. Rocky Road","29. Strawberry","30. Vanilla","31. Vanilla Burnt Almond")));
	
	$choice = array(
	    "icecream" => $icecream);
	$answer=$_Request['Body'];
	$reply='Your order for '.$answer.' is placed.'
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