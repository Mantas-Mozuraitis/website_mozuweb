<?php
   ini_set( 'display_errors', 1 );
   error_reporting( E_ALL );

   $from = $_POST['user_email'];
   $to = "getonline@mozuweb.com";
   $subject = $_POST['plan_name'] . " order request";
   $message = $_POST['user_message'];

   $headers = "MIME-Version: 1.0" . "\r\n";
   $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
   $headers = "From:" . $from;
   if(mail($to,$subject,$message, $headers)) {
      echo '<script>alert("Message was sent successfully")</script>'; 
   } else {
      echo '<script>alert("Message was not sent")</script>'; 
   }
?>