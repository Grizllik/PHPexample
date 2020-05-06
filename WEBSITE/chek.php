<?php 
    $email = $_POST['email'];
    $message = $_POST['message'];

    $error = '';
    if(trim($email) == '')
        $error = 'E-mail field is empty';
    elseif(trim($message) == '')
        $error = 'Message field is empty ';
    elseif(strlen($message) < 2)
        $error = 'Message is too short';

    if($error != ''){
        echo $error;
        exit;
    }
    
    $subject = "=?utf-8?B?".base64_encode("Test message")."?=";
    $headers = "From: $email\r\nReply-to: $email\r\nContent-type: text/html; charset-utf-8\r\n";

    mail($email, $subject, $message, $headers);

    header('Location: about.php'); 
?>