<?php
//Import PHPMailer classes into the global namespace
//These must be at the top of your script, not inside a function
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

//Load Composer's autoloader
require '../vendor/autoload.php';

// Create a new PHPMailer instance
$mail = new PHPMailer;

// Configure the SMTP settings for Gmail
$mail->isSMTP();
$mail->Host = 'smtp.gmail.com';
$mail->SMTPAuth = true;
$mail->Username = 'smartsolution496@gmail.com';  
$mail->Password = 'sxqajniedvfqoqty';
$mail->Port = 587;
$mail->SMTPSecure = 'tls';

// Set the sender and recipient
$mail->setFrom('smartsolution496@gmail.com', 'Smart SL');  
$mail->addAddress('marwenayarimail@gmail.com','Marwen');
$mail->AddAddress('wedyaan1414@gmail.com', 'Wedian');
$mail->AddAddress('wedyan-14@hotmail.com', 'Wedian Hotmail');
if (isset($_POST['submit'])) {
  $name = $_POST['name'];
  $lastName = $_POST['lastName'];
  $email = $_POST['email'];
  $productType = $_POST['productType'];
  $message = $_POST['message'];
  // Set the email subject and body
  $mail->Subject = 'Contact Form Submission';
  $htmlBody = '
      <head>
        <style>
          div#mailcontent {
            direction: rtl;
            background: #e3ecef;
            border-radius: 10px;
            padding: 5px 15px;
            text-align: center;
          }
          h2 {color: gray;}
        </style>
      </head>
      <div id="mailcontent">
        <h2>'. $productType . '</h2>
        <h2>' . $name . ' ' . $lastName. '</h2>
        <h3>' . $email. '</h3>
        <p>' . $message . '</p>
      </div>
  ';
  $mail->msgHTML($htmlBody);
}

// Send the email
$mailsSent = $mail->send();
if (!$mailsSent) {
    echo 'Message could not be sent.';
    echo 'Mailer Error: ' . $mail->ErrorInfo;
    // header('Location: ../?mailSent=false#contact');
} else {
    echo 'Message sent successfully.';
    header('Location: ../?mailSent=true#contact');
}
?>