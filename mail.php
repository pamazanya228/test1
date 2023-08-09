<?php
if (isset($_POST['email'])){
    $yourName =  "Your Name: " . $_POST['name'] . "\r\n";
    $yourEmail =  "E-mail: " . $_POST['email'] . "\r\n";
    $yourMessage =  "Message: " . $_POST['message'] . "\r\n";
    
    
    
    $to = 'aqua9dream9@gmail.com';

    $subject = $yourText ;


    $headers = 'From: '. $_POST['email'] . "\r\n";


    $message = $yourName . $yourEmail . $yourMessage ;


    $subject = preg_replace("/(\r\n)|(\r)|(\n)/", "", $subject);
    $subject = preg_replace("/(\t)/", " ", $subject);
    $subject = '=?UTF-8?B?' . base64_encode($subject) . '?=';

    mail($to, $subject, $message, $headers);

}
?>
