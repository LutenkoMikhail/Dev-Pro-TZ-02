<?php
require_once '.\vendor\autoload.php';

use src\JapanTransport;
use src\ChinaTransport;

ini_set('error_reporting', E_ALL);
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);


echo "<h1>Dev-Pro.net</h1>";
echo "<h3>ТЗ.№ 2  </h3>" ;
echo "<h3>Паттерны.Абстрактаная фабрика.</h3>";

echo "JAPAN TRANSPORT." . "<br>";
$transport = new JapanTransport();
$transport->getCar();
$transport->getBicycle();
$transport->getMotorCycle();
$transport->getTruck();

echo "CHINA TRANSPORT." . "<br>";
$transport = new ChinaTransport();
$transport->getCar();
$transport->getBicycle();
$transport->getMotorCycle();
$transport->getTruck();






