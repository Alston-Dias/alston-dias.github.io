<?php
if (isset($_POST['name'],$_POST['email'])) {
      
    $name = $_POST['name'];
    $mail = $_POST['email'];
    $subject = $_POST['subject'];
    $message = $_POST['message'];
    // Set your email address where you want to receive emails.
    $to = "alston.dias1423@gmail.com";
    $headers = "From: ".$name." <".$mail."> \r\n";
    $send_email = mail($to,$subject,$message,$headers);
    echo ($send_email) ? 'success' : 'error';

}
?>
