<?php

   $to = "admin@shashaskinclinic.com";
   $subject = "New Appointment From Website";
   $message = "A new Customer Details has been received.\n\n";
   $message .= "First Name: " . $_POST["fname"] . "\n";
   $message .= "Last Name: " . $_POST["lname"] . "\n";
   $message .= "Service: " . $_POST["service"] . "\n";
   $message .= "Location: " . $_POST["loc"] . "\n";
   $message .= "Date & Time: " . $_POST["date"] . "\n";
   $message .= "Phone: " . $_POST["num"] ;
   $headers = "From: no-reply@example.com";
   mail($to, $subject, $message, $headers);
   header("Location: appoinments.html");

?> 