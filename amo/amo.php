<?php



require_once 'Wrapper.php';
require_once 'vendor/autoload.php';
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
$phone = $_POST['user_phone'];
header("Connection: close");
header("Location: https://ipo.jusaninvest.kz/thanks");
ob_start();
phpinfo();
$size = ob_get_length();
header("Content-Length: $size");
ob_end_flush();
flush();

\AmoCRM\AmoAPI::oAuth2('jysaninvest');
$wrapper = new Wrapper($phone);
$wrapper->findContact();
$wrapper->createOrder();
$wrapper->manageOrder();