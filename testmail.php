<?php

date_default_timezone_set('Etc/UTC');

// Edit this path if PHPMailer is in a different location.
require './PHPMailer/PHPMailerAutoload.php';

$mail = new PHPMailer;
$mail->isSMTP();

/*
 * Server Configuration
 */

$mail->Host = 'smtp.gmail.com'; // Which SMTP server to use.
$mail->Port = 465; // Which port to use, 587 is the default port for TLS security.
$mail->SMTPSecure = 'ssl'; // Which security method to use. TLS is most secure.
$mail->SMTPAuth = true; // Whether you need to login. This is almost always required.
$mail->Username = "vikieyev.leonhart@googlemail.com"; // Your Gmail address.
$mail->Password = "inashafshah442012"; // Your Gmail login password or App Specific Password.

/*
 * Message Configuration
 */

$mail->setFrom('vikieyev.leonhart@googlemail.com', 'Awesome Website'); // Set the sender of the message.
$mail->addAddress('yuslich.yan@gmail.com', 'John Doe'); // Set the recipient of the message.
$mail->Subject = 'PHPMailer GMail SMTP test'; // The subject of the message.

/*
 * Message Content - Choose simple text or HTML email
 */

// Choose to send either a simple text email...
$mail->Body = 'This is a plain-text message body'; // Set a plain text body.

// ... or send an email with HTML.
//$mail->msgHTML(file_get_contents('contents.html'));
// Optional when using HTML: Set an alternative plain text message for email clients who prefer that.
//$mail->AltBody = 'This is a plain-text message body'; 

// Optional: attach a file
$mail->addAttachment('images/phpmailer_mini.png');

if ($mail->send()) {
    echo "Your message was sent successfully!";
} else {
    echo "Mailer Error: " . $mail->ErrorInfo;
}