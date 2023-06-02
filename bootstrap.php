<?php

date_default_timezone_set('Asia/Ho_Chi_Minh');
ini_set('display_errors', 'on');
error_reporting(E_ALL);
define('_DIR_ROOT', __DIR__);


if (!empty($_SERVER['HTTPS']) && $_SERVER['HTTPS'] == 'on') {
  $web_root = 'https://' . $_SERVER['HTTP_HOST'];
} else {
  $web_root = 'http://' . $_SERVER['HTTP_HOST'];
}

$folder = str_replace(strtolower($_SERVER['DOCUMENT_ROOT']), '', strtolower(__DIR__));

$base_url = $web_root . $folder . '/';


function BASE_URL($url)
{
  global $base_url;
  return $base_url . $url;
}

function ADMIN_URL($url)
{
  global $base_url;
  return $base_url . 'admin/' . $url;
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


function route_last()
{
  global $route;
  return end($route);
}


require_once 'vendor/autoload.php';

$dotenv = Dotenv\Dotenv::createImmutable(__DIR__);
$dotenv->load();


require 'core/PHPMailer/src/Exception.php';
require 'core/PHPMailer/src/PHPMailer.php';
require 'core/PHPMailer/src/SMTP.php';

require_once  'core/Database.php';

$DB = new Database;

require_once  'configs/functions.php';


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
$site_status = $DB->settings('site_status');



require_once  'configs/routes.php';
require_once  'core/Route.php';
require_once  'core/Controller.php';
require_once  'core/Model.php';
require_once  'core/PHPExcel.php';
require_once 'app/App.php';
