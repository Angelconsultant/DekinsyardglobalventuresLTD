<?php
$name = $_POST['name'];
$visitor_email = $_POST['email'];
$subject = $_POST['subject'];
$message = $_POST['message'];

$email_from = 'https://dekinsyardglobalventures-ltd.vercel.app/'

$email_subject = 'new form submission'

$email_body = "User Name: $name.\n".
              "User Email:$visitor_email.\n".
               "Subject: $subject.\n".
               "User Message: $message.\n".;

 $to = 'dekingsyardglobalventurslimit@gmail.com';

 $headers = "From: $email_from \r\n";   
 
 $header = "Reoly-To: $visitor_email \r\n";

 mail($to,$email_subject,$email_body,$headers);

 header("Location: contact.html")








?>