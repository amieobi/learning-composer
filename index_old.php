<?php
require_once(__DIR__ . DIRECTORY_SEPARATOR . 'vendor' . DIRECTORY_SEPARATOR . 'autoload.php');

// Register error handler library
$whoops = new \Whoops\Run;
$whoops->pushHandler(new \Whoops\Handler\PrettyPageHandler);
$whoops->register();

// require_once(__DIR__ . DIRECTORY_SEPARATOR . 'src' . DIRECTORY_SEPARATOR . 'Move.php');
// require_once(__DIR__ . DIRECTORY_SEPARATOR . 'library' . DIRECTORY_SEPARATOR . 'Lib.php');
// require_once(__DIR__ . DIRECTORY_SEPARATOR . 'config' . DIRECTORY_SEPARATOR . 'database.php');

// use Carbon\Carbon;

// printf("Right now is %s", Carbon::now()->toDayDateTimeString());

// // var_dump(Carbon::now());
// use PHPMailer\PHPMailer\PHPMailer;
// use PHPMailer\PHPMailer\SMTP;
// use PHPMailer\PHPMailer\Exception;


// //Create an instance; passing `true` enables exceptions
// $mail = new PHPMailer(true);

// try {
//     //Server settings
//     $mail->SMTPDebug = SMTP::DEBUG_SERVER;                      //Enable verbose debug output
//     $mail->isSMTP();                                            //Send using SMTP
//     $mail->Host       = 'smtp.gmail.com';                     //Set the SMTP server to send through
//     $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
//     $mail->Username   = 'amieobi@gmail.com';                     //SMTP username
//     $mail->Password   = 'apnrhsumrzchnbpx';                               //SMTP password
//     $mail->SMTPSecure = "tls";            //Enable implicit TLS encryption
//     $mail->Port       = 587;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`
//     $mail->SMTPDebug = 2;


//     // This line is required to bypass issue with openSSL certificates
//     $mail->SMTPOptions = array(
//         'ssl' => array(
//             'verify_peer' => false,
//             'verify_peer_name' => false,
//             'allow_self_signed' => true
//         )
//     );



//     //Recipients
//     $mail->setFrom('amieobi@gmail.com', 'Mailer');
//     $mail->addAddress('amieobi@yahoo.com', 'Joe User');     //Add a recipient
//     $mail->addReplyTo('amieobi@gmail.com', 'Information');
//     // $mail->addCC('callcenter@phmlnigeria.com');
//     // $mail->addBCC('callcenter@phmlnigeria.com');


//     //Content
//     $mail->isHTML(true);                                  //Set email format to HTML
//     $mail->Subject = 'Here is the subject';
//     $mail->Body    = 'This is the HTML message body <b>in bold!</b>';
//     $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

//     $mail->send();
//     echo 'Message has been sent';
// } catch (Exception $e) {
//     echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
// }

use Book\Novel;
use Book\TextBook;

new Lib;

echo "<br>";

new Move;

echo "<br>";

connect();

new Novel();
new TextBook();

new Book\Drafts\Jotter();
