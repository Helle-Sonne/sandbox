<?php
#Автозагрузка
chdir(dirname(__DIR__));
require "vendor/autoload.php";

$a = 1;
$b = 2;
$obj = new \Sandbox\Application\ExampleClass();
$obj->hello($a, $b);
echo "Thats work fine";
