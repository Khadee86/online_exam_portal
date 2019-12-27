<?php
include "connection.php";
// Import PHPMailer classes into the global namespace
// These must be at the top of your script, not inside a function
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;
require 'PHPMailer/src/Exception.php';
require 'PHPMailer/src/PHPMailer.php';
require 'PHPMailer/src/SMTP.php';
require 'connection.php';

// $code=uniqid(true);
// $query="INSERT INTO resetPassword(code,email) VALUES('$code','$email') ";
// if ($conn->query($query) === FALSE){
//     exit("error in generating code");
// }
// Instantiation and passing `true` enables exceptions
$sql="SELECT email FROM register WHERE username='$_SESSION[username]'";
    $result=$conn->query($sql);
    // echo $result;
    if ($result->num_rows >0)
    {
    while ($row = $result->fetch_assoc()) {
            $email=$row['email'];
      
$mail = new PHPMailer(true);

try {
    //Server settings
    $mail->isSMTP();                                            // Send using SMTP
    $mail->Host       = 'smtp.gmail.com';                    // Set the SMTP server to send through
    $mail->SMTPAuth   = true;                                   // Enable SMTP authentication
    $mail->Username   = 'onlineexamportalgroup4@gmail.com';                     // SMTP username
    $mail->Password   = 'generation57';                               // SMTP password
    // $mail->SMTPSecure = 'ssl';        // Enable TLS encryption; `PHPMailer::ENCRYPTION_SMTPS` also accepted
    $mail->Port       = 587;                                    // TCP port to connect to

    //Recipients
    $mail->setFrom('onlineexamportalgroup4@gmail.com', $_SESSION['email']);
    $mail->addAddress("$email");     // Add a recipient
    // $mail->addReplyTo('@onlineexamportalgroup4@gmail.com', 'No reply');
    
    // Content
    $url="http://".$_SERVER['HTTP_HOST'].dirname($_SERVER['PHP_SELF'])."/takequiz3.php?";
    $mail->isHTML(true);                                  // Set email format to HTML
    $mail->Subject = $_SESSION['quiz_text'];
    $mail->Body    = "<h1>Hello!...Please click link below to take quiz</h1><br>
                        <a href='$url'>Take Quiz</a><br>Please 
                        Ignore if youre not for this quiz";
    $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

    $mail->send();
    header("location:view_quiz3.php");
    // echo 'link to change password has been sent to your email'.'<br>';
} catch (Exception $e) {
    echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
}
exit();

}
}

?>