<?php

/* =====================================================
 * change this to the email you want the form to send to
 * ===================================================== */
$email_to = "dorqasyller@gmail.com"; 
$email_from = "dorqa95@gmail.com"; // must be different than $email_from 
$email_subject = "Üzenet a gyüli honlapról";

if(isset($_POST['email']))
{

    function return_error($error)
    {
        echo json_encode(array('success'=>0, 'message'=>$error));
        die();
    }

    // check for empty required fields
    if (!isset($_POST['name']) ||
        !isset($_POST['email']) ||
        !isset($_POST['message']))
    {
        return_error('Kérjük töltse ki az összes mezőt!');
    }

    // form field values
    $name = $_POST['name']; // required
    $email = $_POST['email']; // required
    $message = $_POST['message']; // required

    // form validation
    $error_message = "";

    // name
    $name_exp = "/^[a-z0-9 .\-]+$/i";
    if (!preg_match($name_exp,$name))
    {
        $this_error = 'Kérjük adjon meg valós nevet!';
        $error_message .= ($error_message == "") ? $this_error : "<br/>".$this_error;
    }        

    $email_exp = '/^[A-Za-z0-9._%-]+@[A-Za-z0-9.-]+\.[A-Za-z]{2,4}$/';
    if (!preg_match($email_exp,$email))
    {
        $this_error = 'Kérjük adjon meg valós e-mail címet!';
        $error_message .= ($error_message == "") ? $this_error : "<br/>".$this_error;
    } 

    // if there are validation errors
    if(strlen($error_message) > 0)
    {
        return_error($error_message);
    }

    // prepare email message
    $email_message = "Részletek alább.\n\n";

    function clean_string($string)
    {
        $bad = array("content-type", "bcc:", "to:", "cc:", "href");
        return str_replace($bad, "", $string);
    }

    $email_message .= "Név: ".clean_string($name)."\n";
    $email_message .= "Email-cím: ".clean_string($email)."\n";
    $email_message .= "Üzenet: ".clean_string($message)."\n";

    // create email headers
    $headers = 'From: '.$email_from."\r\n".
    'Reply-To: '.$email."\r\n" .
    'X-Mailer: PHP/' . phpversion();
    if (@mail($email_to, $email_subject, $email_message, $headers))
    {
        echo json_encode(array('success'=>1, 'message'=>'Üzenet sikeresen elküldve.')); 
    }

    else 
    {
        echo json_encode(array('success'=>0, 'message'=>'Hiba lépett fel, kérjük próbálja újra később.')); 
        die();        
    }
}
else
{
    echo 'Kérjük töltse ki az összes mezőt!';
    die();
}
?>