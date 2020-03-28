<?php
    header('Content-Type: text/html; charset=UTF-8');

	function post_captcha($user_response) {
        $fields_string = '';
        $fields = array(
            'secret' => '6Lc4CTAUAAAAADcYYQlvONdFxANmA9E7wKJwIl43',
            'response' => $user_response
        );
        foreach($fields as $key=>$value)
        $fields_string .= $key . '=' . $value . '&';
        $fields_string = rtrim($fields_string, '&');

        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, 'https://www.google.com/recaptcha/api/siteverify');
        curl_setopt($ch, CURLOPT_POST, count($fields));
        curl_setopt($ch, CURLOPT_POSTFIELDS, $fields_string);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, True);

        $result = curl_exec($ch);
        curl_close($ch);

        return json_decode($result, true);
    }

    $res = post_captcha($_POST['g-recaptcha-response']);

    if (!$res['success']) {
        // What happens when the CAPTCHA wasn't checked
        echo 'Érvényesítsd kérlek a captcha mezőt!';
    } else {
        $from = "dorqa95@gmail.com";
		$to = "dorqa95@gmail.com";
		$name = Trim(stripslashes($_POST['name']));
		$email = Trim(stripslashes($_POST['email']));
		$message = Trim(stripslashes($_POST['message']));
		$promo = Trim(stripslashes($_POST['promo']));
		$body ="\n\n";
		$body .="Név: ";
		$body .=$name;
		$body .="\n";
		$body .="Email cím: ";
		$body .=$email;
		$body .="\n";
		$body .="Üzenet: \n";
		$body .=$message;
		$body .="\n";
		
		$go = mail($to, 'Új üzenet érkezett a bekas.golgota.hu oldalról!', $body, "From:<$from>");
		
		if($go){
			print("Sikeresen elküldted az üzenetet! 5 másodpercen belül visszairányítunk a főoldalra...");
			header( "refresh:5;url=index.php" );
		}
		else{
			print("Nem sikerült elküldeni az üzenetedet, valamilyen okból kifolyólag. Amennyiben továbbra is fent áll a probléma, kérlek jelezd a dorqasyller@gmail.com email címen, köszönjük!");
		}
    }
?>