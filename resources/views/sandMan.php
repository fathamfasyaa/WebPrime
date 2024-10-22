<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'PHPMailer/src/Exception.php';
require 'PHPMailer/src/PHPMailer.php';
require 'PHPMailer/src/SMTP.php';

session_start();
if (isset($_POST['submitEmail'])) { // Typo corrected here
  $email = $_POST['email'];
  $mail = new PHPMailer(true);

  try {
    //Server settings
    $mail->isSMTP();                                            //Send using SMTP
    $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
    $mail->Host       = 'smtp.gmail.com';                     //Set the SMTP server to send through
    $mail->Username   = 'reyniotaa@gmail.com';                     //SMTP username
    $mail->Password   = 'brpbyqsuvetwfikt';                               //SMTP password
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;            //Enable implicit TLS encryption
    $mail->Port       = 587;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`
    // $mail->SMTPDebug = SMTP::DEBUG_SERVER;                      //Enable verbose debug output

      //Recipients
      $mail->setFrom('reyniotaa@gmail.com', 'ThePrime');
      $mail->addAddress('muhammadrizkibagus@gmail.com', 'Joe User');     //Add a recipient
      // $mail->addAddress('ellen@example.com');               //Name is optional
      // $mail->addReplyTo('info@example.com', 'Information');
      // $mail->addCC('cc@example.com');
      // $mail->addBCC('bcc@example.com');
      //Content
      $mail->isHTML(true);                                  //Set email format to HTML
      $mail->Subject = 'Email data from The Prime';
      $mail->Body    = 'Hallo pak! ini data email audienc
                        <h3>Email: '.$email.'</h3>';

      if($mail->send()){
        $_SESSION['status'] = "you get a message from - The Prime";
        header("location: {$_SERVER["HTTP_REFERER"]}");
        exit(0);
      }else{
        $_SESSION['status'] = "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
        header("location: {$_SERVER["HTTP_REFERER"]}");
        exit(0);

      }

    } catch (Exception $e) {
      echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
    }
  } else {
    header('location: welcome.php');
  }


?>
