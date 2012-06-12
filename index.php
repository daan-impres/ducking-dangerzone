<?php 
require_once 'demoClass.php';

$demo = new demoClass();
$params = $demo->getParams();

foreach ($params as $key => $param) {
    echo 'Parameter: ' . $key . ' Heeft de waarde: ' . $param . PHP_EOL;
}
