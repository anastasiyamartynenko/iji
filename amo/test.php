<?php
use AmoCRM\{AmoAPI, AmoAPIException};
use AmoCRM\TokenStorage\TokenStorageException;
require_once 'vendor/autoload.php';
$subdomain    = 'jysaninvest';

// Первичная авторизация
AmoAPI::oAuth2($subdomain);
print_r(AmoAPI::getAccount());
