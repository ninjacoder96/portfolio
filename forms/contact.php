<?php
  /**
  * Requires the "PHP Email Form" library
  * The "PHP Email Form" library is available only in the pro version of the template
  * The library should be uploaded to: vendor/php-email-form/php-email-form.php
  * For more info and help: https://bootstrapmade.com/php-email-form/
  */

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require_once "../vendor/autoload.php";

  // Replace contact@example.com with your real receiving email address
  $receiving_email_address = 'deguzman.joshua96@gmail.com';

  $mail = new PHPMailer(true);

  //Enable SMTP debugging.
$mail->SMTPDebug = 3;                               
//Set PHPMailer to use SMTP.
$mail->isSMTP();            
//Set SMTP host name                          
$mail->Host = "smtp.gmail.com";
//Set this to true if SMTP host requires authentication to send email
$mail->SMTPAuth = true;                          
//Provide username and password     
$mail->Username = "oystersauce16@gmail.com";                 
$mail->Password = "Accdj0896@";                           
//If SMTP requires TLS encryption then set it
$mail->SMTPSecure = "tls";                           
//Set TCP port to connect to
$mail->Port = 587;         

$mail->From = "deguzman.joshua96@gmail.com";
$mail->FromName = $_POST['name'];

$mail->isHTML(true);

$mail->Subject = $_POST['subject'];
$mail->addAddress($_POST['email'], $_POST['name']);


$mail->Body = $_POST['message'];

try {
    $mail->send();
    echo 'Thanks for being in touch, will reply to you as soon as I read your queries';
} catch (Exception $e) {
    echo "Mailer Error: " . $mail->ErrorInfo;
}

?>
