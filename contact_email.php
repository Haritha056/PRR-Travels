<?php
if(isset($_POST['submit'])) {
  // Fetch form data
  $name = $_POST['name'];
  $email = $_POST['email'];
  $message = $_POST['message'];

  // Set recipient email address
  $to = "vibrotech.seo@gmail.com";

  // Set email subject
  $subject = "New message from $name";

  // Set email message
  $body = "Name: $name\nEmail: $email\nMessage: $message";

  // Set email headers
  $headers = "From: $email\r\nReply-To: $email\r\n";

  // Send email
  if(mail($to, $subject, $body, $headers)) {
    echo "Your message has been sent successfully.";
  } else {
    echo "error";
  }
}
?>