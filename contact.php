<?php

   $to = "support@shashaskinclinic.com";
   $subject = "New Enqury From Website";
   $message = "A new form has been received.\n\n";
   $message .= "Name: " . $_POST["name"] . "\n";
   $message .= "Email: " . $_POST["email"] . "\n";
   $message .= "Phone: " . $_POST["phone"] . "\n";
   $message .= "Subject: " . $_POST["sub"] . "\n";
   $message .= "Message: " . $_POST["message"];
   $headers = "From: no-reply@example.com";
   mail($to, $subject, $message, $headers);
   header("Location: index.html");

?>