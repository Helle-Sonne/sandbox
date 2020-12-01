<?php
#Автозагрузка
use Sandbox\Application\ExampleClass;

chdir(dirname(__DIR__));
require "vendor/autoload.php";

$a = 1;
$b = 2;
$obj = new ExampleClass();
$obj->hello($a, $b);
echo "Thats work fine";
