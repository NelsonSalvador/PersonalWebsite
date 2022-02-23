<?php
$name = $_POST['name'];
$visitor_email = $_POST['email'];
$subject = $_POST['subject'];
$message = $_POST['message'];

$email_from = 'info@nelsonsalvador.tech';
$email_subject = 'Personal Website reply !';
$email_body = "User Name: $name.\n".
                "User Email: $visitor_email.\n".
                "User subject: $subject.\n".
                "User message: $message.\n";

$to = 'nelsonsalvadorzx@gmail.com';

$headers = "From: $email_from \r\n";

$headers = "Reply-To: $visitor_email \r\n";

mail($to, $email_subject, $email_body, $headers);

header("Location: Index.html")

?>