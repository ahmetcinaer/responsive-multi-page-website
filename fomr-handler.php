<?php
$visitor_name = $_POST['name'];
$visitor_email = $_POST['email'];
$visitor_subject = $_POST['subject'];
$visitor_message = $_POST['message'];

$email_form ='info@yourwebsite.com';

$email_subject = 'New Form Submission';

$email_body = "User Name: $visitor_name./n ".
              "User Email: $visitor_email./n".
              "Subject: $visitor_subject./n".
              "Message: $visitor_message./n";

$to = 'ahmetcinaer@gmail.com';

$header = "From: $email_form /r/n";

$headers = "Repty-To: $visitor_email /r/n";

mail($to, $email_subject, $email_body, $headers);
header("Location: contact.html");

?>