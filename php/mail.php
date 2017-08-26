<?php
	$from = "dorqa95@gmail.com";
	$to = "dorqasyller@gmail.com";
	$name = Trim(stripslashes($_POST['name']));
	$email = Trim(stripslashes($_POST['email']));
	$message = Trim(stripslashes($_POST['message']));
	$promo = Trim(stripslashes($_POST['promo']));
	$body ="";
	$body .="Név: ";
	$body .=$name;
	$body .="\n";
	$body .="Email cím: ";
	$body .=$email;
	$body .="\n";
	$body .="Üzenet: ";
	$body .=$message;
	$body .="\n";
	$go = mail($to, $subject, $body, "From:<$from>");
	if($go){
		print("Sikeresen elküldted az üzenetet!");
	}
	else{
		print("Nem sikerült elküldeni az üzenetedet, valamilyen okból kifolyólag. Amennyiben továbbra is fent áll a probléma, kérlek jelezd a dorqasyller@gmail.com email címen, köszönjük!");
	}
?>