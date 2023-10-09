<?php
if(!isset($_POST['submit'])){
    echo "error; please submit the form"
}
$name = $_POST['user_name'];
$email = $_POST['user_email'];
$message = $_POST['user_message'];

if(empty($name) || empty($email)){
    echo "Missing name or email";
    exit;
}

$email_from = "mozuwebdevelopment@gmail.com";
$email_subject = "New order request";
$email_body = "New Message \n",
        "from: $email \n",
        "Message: $message \n"
$to = "mozuwebdevelopment@gmail.com";
$headers = "From: $email_from \r\n";

mail($to,$email_subject,$email_body,$headers);
header('Location: ./index.html');
exit;
?>