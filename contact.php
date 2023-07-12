<?php

  $name = $_POST['name'];
  $email = $_POST['email'];
  $message = $_POST['message'];
 
  $to = 'ammadhussain.contact@gmail.com';  // Replace with your Gmail address
  $subject = 'New Contact Form Submission';
  $body = "Name: $name\nEmail: $email\n\n$message";
  
  // Additional headers
  $headers = "From: $email" . "\r\n" .
             "Reply-To: $email" . "\r\n" .
             "X-Mailer: PHP/" . phpversion();
  
  // Send email
  if (mail($to, $subject, $body, $headers)) {
    echo "Thank you for contacting us. We will get back to you soon!";
  } else {
    echo "Oops! Something went wrong. Please try again later.";
  }

?>
