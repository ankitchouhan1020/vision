<?php
// $to = "ayushrathi18@gmail.com";
// $subject = "My subject";
// $txt = "Hello world!";
// $headers = "From: webmaster@example.com" . "\r\n" .
// "CC: somebodyelse@example.com";

// mail($to,$subject,$txt,$headers);
?>


<?php
require 'PHPMailer/PHPMailerAutoload.php';

$mail = new PHPMailer;

$mail->isSMTP();                            // Set mailer to use SMTP
$mail->Host = 'smtp.gmail.com';             // Specify main and backup SMTP servers
$mail->SMTPAuth = true;                     // Enable SMTP authentication
$mail->Username = 'vision.nitbhopal@gmail.com';          // SMTP username
$mail->Password = 'palindrome1771'; // SMTP password
$mail->SMTPSecure = 'tls';                  // Enable TLS encryption, `ssl` also accepted
$mail->Port = 587;                          // TCP port to connect to

$mail->setFrom('vision.nitbhopal@gmail.com', 'Vision NIT Bhopal');
$mail->addReplyTo('vision.nitbhopal@gmail.com', 'Vision NIT Bhopal');
$mail->addAddress($email);   // Add a recipient
// $mail->addCC('cc@example.com');
// $mail->addBCC('bcc@example.com');

$mail->isHTML(true);  // Set email format to HTML

$bodyContent = '<h1>Vision | Eureka Registration</h1>';
$bodyContent .= '<p>
Greetings from Vision!
You have registered for participating in EUREKA, you can login with the following credentials after you have activated your account by clicking the url below.
</p>
<br>
------------------------
<h4>
Username: '.$username.'
</h4>
<h4>
Password: '.$password.'
</h4>
------------------------
<br>
<p>
Please click this link to activate your account:<br>
<a href = "https://localhost/v/Apache/verify.php?v='.$hash.'">https://localhost/v/Apache/verify.php?v='.$hash.'</a>
</p>';// To be repalced with site's url

$mail->Subject = 'Signup | Verification';
$mail->Body    = $bodyContent;

if(!$mail->send()) {
    echo 'Message could not be sent.';
    //echo 'Mailer Error: ' . $mail->ErrorInfo;
}
?>


 <?php
// $mail                = new PHPMailer();
// $mail->IsSMTP(); // telling the class to use SMTP

// $mail->Host       = "stmp.gmail.com"; // SMTP server

// $mail->SMTPDebug  = 1;                     // enables SMTP debug information (for testing)

// 1 = errors and messages

// 2 = messages only

// $mail->SMTPAuth   = true;                  // enable SMTP authentication

// $mail->SMTPSecure = "ssl";                 // sets the prefix to the servier

// $mail->Host       = "smtp.gmail.com";      // sets GMAIL as the SMTP server

// $mail->Port       = 465;                   // set the SMTP port for the GMAIL server

// $mail->Username   = "ayushrathi18@gmail.com";  // GMAIL username

// $mail->Password   = "ayush123";            // GMAIL password

// $mail->SetFrom("ayushrathi18@gmail.com", 'Ayush Rathi');

// $mail->AddReplyTo("ayushrathi18@gmail.com", 'Ayush Rathi');

// $mail->Subject    = "Hey there";

// $mail->AltBody    = �Hey, check out this new post on www.vishalkumar.in�; // optional, comment out and test

// $mail->MsgHTML($body);

// $address = "www.anilrath@gmail.com";

// $mail->AddAddress($address, "Ayush");
// ?>