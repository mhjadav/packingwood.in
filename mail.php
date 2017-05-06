<?php
  require 'Mail/PHPMailerAutoload.php';
  $from = $_POST['from'];
  $subject = $_POST['subject'];
  $body = $_POST['body'];
  $name = $_POST['name'];

  $mail = new PHPMailer;

  //$mail->SMTPDebug = 0;                               // Enable verbose debug output

  $mail->isSMTP();                                      // Set mailer to use SMTP
  $mail->Host = 'mail.pawnmail.com';  // Specify main and backup SMTP servers
  $mail->SMTPAuth = true;                               // Enable SMTP authentication
  $mail->Username = 'valanipiyush_8055@packingwood.in';                 // SMTP username
  $mail->Password = 'valani@123';                           // SMTP password
  $mail->SMTPSecure = 'tls';                            // Enable TLS encryption, `ssl` also accepted
  $mail->Port = 587;                                    // TCP port to connect to

  $mail->setFrom($from, $name);
  $mail->addAddress('info@packingwood.in');
  $mail->addAddress('jadavmh@gmail.com');
  $mail->addAddress('valanipiyush_8055@yahoo.com');

  $mail->isHTML(true);                                  // Set email format to HTML

  $mail->Subject = $subject;
  $mail->Body    = $body;
  $mail->AltBody = 'Thanks';

  if(!$mail->send()) {
      echo 'Message could not be sent.';
      echo 'Mailer Error: ' . $mail->ErrorInfo;
  } else {
      echo 'Message has been sent';
  }
?>