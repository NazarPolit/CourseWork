<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = htmlspecialchars($_POST['email']);
    $subject = htmlspecialchars($_POST['subject']);
    $message = htmlspecialchars($_POST['message']);

    $subject = $subject;
    $headers = "From: $email\r\nReply-to: $email\r\nContent-type: text/html\r\n";

    if (mail("newsoflionscity@outlook.com", $subject, $message, $headers)) {
          echo "Message has been sent";
    } 
    else {
        echo "Message hasn't been sent";
    }
}
?>
