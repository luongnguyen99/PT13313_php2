<?php
require './vendor/autoload.php';

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;


$emails = [
    "luongnd2286@gmail.com",
    "kiddik99@gmail.com",
    "maiduynghia87@gmail.com",
    "hungtqph06184@fpt.edu.vn",
    "thienth@fpt.edu.vn"
];

$subject = "Gửi email test lớp PT13313";
$content = "<h1>Thienth dep trai</h1>
            <img src='https://kenh14cdn.com/zoom/280_175/2019/2/14/avaem-1550110551949608033787-crop-1550110578972114090523.png' 
                width='100' />";

$mail = new PHPMailer(true);                              // Passing `true` enables exceptions
try {
    //Server settings
    $mail->CharSet = 'UTF-8';
    $mail->SMTPDebug = 2;                                 // Enable verbose debug output
    $mail->isSMTP();                                      // Set mailer to use SMTP
    $mail->Host = 'smtp.gmail.com';                       // Specify main and backup SMTP servers
    $mail->SMTPAuth = true;                               // Enable SMTP authentication
    $mail->Username = 'd3tmobilebk@gmail.com';                 // SMTP username
    $mail->Password = 'd3t123456789';                           // SMTP password
    $mail->SMTPSecure = 'tls';                            // Enable TLS encryption, `ssl` also accepted
    $mail->Port = 587;                                    // TCP port to connect to

    //Recipients
    $mail->setFrom('thienth32@gmail.com', 'Thienth');
    foreach ($emails as $e) {
        $mail->addAddress($e); 
    }

    $mail->addReplyTo('hieujj@gmail.com', 'Nguyễn Bá Hiếu');

    //Attachments
    // $mail->addAttachment('/var/tmp/file.tar.gz');         // Add attachments
    // $mail->addAttachment('/tmp/image.jpg', 'new.jpg');    // Optional name

    //Content
    $mail->isHTML(true);                                  // Set email format to HTML
    $mail->Subject = $subject;
    $mail->Body    = $content;
    // $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

    $mail->send();
    echo 'Message has been sent';
} catch (Exception $e) {
    echo 'Message could not be sent. Mailer Error: ', $mail->ErrorInfo;
}

?>