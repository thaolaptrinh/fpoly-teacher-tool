<?php

define('_DIR_ROOT', __DIR__);


if (!empty($_SERVER['HTTPS']) && $_SERVER['HTTPS'] == 'on') {
  $base_url = 'https://' . $_SERVER['HTTP_HOST'] . '/';
} else {
  $base_url = 'http://' . $_SERVER['HTTP_HOST'] . '/fpoly_teacher_tool/';
  // $base_url = 'http://' . $_SERVER['HTTP_HOST'] . '/';
}

function BASE_URL($url)
{
  global $base_url;
  return $base_url . $url;
}

if (!empty($_SERVER['PATH_INFO'])) {
  $url = $_SERVER['PATH_INFO'];
} else {
  $url = '/';
}

$route = array_filter(explode('/', $url));
$route  = array_values($route);


function route($index)
{
  global $route;
  if (isset($route[$index])) {

    return $route[$index];
  } else {
    return false;
  }
}




use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
use PHPMailer\PHPMailer\SMTP;

require 'PHPMailer/src/Exception.php';
require 'PHPMailer/src/PHPMailer.php';
require 'PHPMailer/src/SMTP.php';



function resetPass($address, $pass)
{
  # code...
  global $DB;
  $mail = new PHPMailer(true);
  # code...

  try {

    $mail->isSMTP();
    $mail->CharSet = "UTF-8";
    $mail->Host       = $DB->settings('smtp_server');
    $mail->SMTPAuth   = true;
    $mail->Username   = $DB->settings('smtp_user');
    $mail->Password   = $DB->settings('smtp_pass');
    $mail->SMTPSecure = $DB->settings('smtp_protocol');
    $mail->Port       = $DB->settings('smtp_port');
    //Recipients
    $mail->setFrom($DB->settings('smtp_user'), $DB->settings('site_name'));

    $mail->addBCC(trim($address), $DB->settings('site_name'));

    //Content
    $mail->isHTML(true);
    $mail->Subject = '';
    $mail->Body    = '';
    $mail->AltBody = '';

    $mail->send();
  } catch (Exception $e) {
  }
}


function sendMail($subject, $message, $mailList)
{
  global $DB;
  $mail = new PHPMailer(true);
  # code...

  try {
    //Server settings
    // $mail->SMTPDebug = SMTP::DEBUG_SERVER;                      //Enable verbose debug output
    $mail->isSMTP();
    $mail->CharSet = "UTF-8";
    //Send using SMTP
    $mail->Host       = $DB->settings('smtp_server');                     //Set the SMTP server to send through
    $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
    $mail->Username   = $DB->settings('smtp_user');                     //SMTP username
    $mail->Password   = $DB->settings('smtp_pass');                               //SMTP password
    $mail->SMTPSecure = $DB->settings('smtp_protocol');           //Enable implicit TLS encryption
    $mail->Port       = $DB->settings('smtp_port');
    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`


    //Recipients
    $mail->setFrom($DB->settings('smtp_user'), $DB->settings('site_name'));

    if (!empty($mailList)) {
      foreach ($mailList as $address) {
        $mail->addAddress(trim($address), $DB->settings('site_name'));
      }
    } else {
      //This should not be the case.
      throw new Exception('No emails found!');
    }


    // $mail->addReplyTo('info@example.com', 'Information');
    // $mail->addCC('cc@example.com');
    // $mail->addBCC('bcc@example.com');

    //Attachments
    // $mail->addAttachment('/var/tmp/file.tar.gz');         //Add attachments
    // $mail->addAttachment('/tmp/image.jpg', 'new.jpg');    //Optional name

    //Content
    $mail->isHTML(true);                                  //Set email format to HTML
    $mail->Subject = $subject;
    $mail->Body    = $message;
    // $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

    $mail->send();
    echo
    "<script>
      alert('Send Mail Thành Công')
    </script>";
  } catch (Exception $e) {
    echo
    "<script>
      alert('Message could not be sent. Mailer Error: {$mail->ErrorInfo}')
    </script>";
  }
}


require_once  'configs/Database.php';
require_once  'configs/Function.php';
require_once  'configs/Routes.php';
require_once  'core/Route.php';
require_once  'core/Controller.php';
require_once  'core/Model.php';
require_once  'core/PHPExcel.php';
require_once 'app/App.php';


// site setting
$path_public = BASE_URL('public/');
$site_url = BASE_URL('');
$site_images = BASE_URL('assets/media/');

$site_logo = BASE_URL('assets/media/logos/' . $DB->settings('site_logo'));
$site_favicon = BASE_URL('assets/media/logos/' . $DB->settings('favicon'));

$site_title = $DB->settings('site_title');
$site_description = $DB->settings('site_description');
$site_keywords = $DB->settings('site_keywords');
$site_name = $DB->settings('site_name');
$site_phone = $DB->settings('phone');
$site_email = $DB->settings('email');
$site_status = $DB->settings('site_status');
