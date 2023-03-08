<?php

class mailer{
/**
 * This example shows making an SMTP connection without using authentication.
 */

//Import the PHPMailer class into the global namespace
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
 
public $name;
public $email;
public $subject;
public $body;
function send($name, $email, $subject, $body){

    // path to phpmailer classes
require 'src/Exception.php';
require 'src/PHPMailer.php';
require 'src/SMTP.php';

//SMTP needs accurate times, and the PHP time zone MUST be set
//This should be done in your php.ini, but this is how to do it if you don't have access to that
date_default_timezone_set('Etc/UTC');

//Create a new PHPMailer instance
$mail = new PHPMailer;
//Tell PHPMailer to use SMTP
$mail->isSMTP();
//Enable SMTP debugging
// SMTP::DEBUG_OFF = off (for production use)
// SMTP::DEBUG_CLIENT = client messages
// SMTP::DEBUG_SERVER = client and server messages
$mail->SMTPDebug = SMTP::DEBUG_SERVER;
//Set the hostname of the mail server
$mail->Host = 'localhost';
//Set the SMTP port number - likely to be 25, 465 or 587
$mail->Port = 25;
//We don't need to set this as it's the default value
//$mail->SMTPAuth = false;
//Set who the message is to be sent from
$mail->setFrom($email, $name);
//Set an alternative reply-to address
$mail->addReplyTo('info@wigsedu.com', 'Wigsedu');
//Set who the message is to be sent to
$mail->addAddress('info@wigsedu.com', 'Wigsedu');
//Set the subject line
$mail->Subject = $subject;
//Replace the plain text body with one created manually
$mail->AltBody = $body;
//Attach an image file
//send the message, check for errors
if (!$mail->send()) {
    echo 'Mailer Error: '. $mail->ErrorInfo;
} else {
    echo 'Message sent!';
}

}
}
?>