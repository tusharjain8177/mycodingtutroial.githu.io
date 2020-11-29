<?php
   $name=$_POST['name'];
   $visitor_email=$_POST['email'];
   $message=$_POST['message'];

   $email_from='mycodingtutroial.gmail.com';

   $email_subject="New From Submission";

   $email_body="user Name: $name.\n".
                "User Email: $visitor_email.\n". 
                "user Message: $message.\n";
    $to="tusharjain8177@gmail.com";
    $headers="From $email_from \r\n";
    $headers .="Reply-TO: $visitor_email\r\n";
    
    mail($to,$email_subject,$email_body,$headers);

    header("Location: contact.html");

    
?>