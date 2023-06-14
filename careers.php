<?php

   $to = "hr@shashaskinclinic.com";
   $subject = "New Appointment From Website";
   $message = "A new Customer Details has been received.\n\n";
   $message .= "Name: " . $_POST["name"] . "\n";
   $message .= "Mobile No: " . $_POST["phone"] . "\n";
   $message .= "E-Mail: " . $_POST["mail"] . "\n";
   $message .= "Job Type: " . $_POST["job"] . "\n";
   $message .= "Location: " . $_POST["loc"] . "\n";
   $message .= "Applied For: " . $_POST["apply"] ;
   $headers = "From: no-reply@example.com";
   mail($to, $subject, $message, $headers);
   header("Location: careers.html");

?> 