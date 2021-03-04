<?php
if (isset($_POST['name'],$_POST['email'])) {
      
    $name = $_POST['name'];
    $mail = $_POST['email'];
    $subject = $_POST['subject'];
    $message = $_POST['message'];
    // Set your email address where you want to receive emails.
    $to = "alstondias1414@alstar1402.co.in";
    $headers = "From: ".$name." <".$mail."> \r\n";
    $send_email = mail($to,$subject,$message,$headers);
    echo ($send_email) ? 'success' : 'error';

}
?>
