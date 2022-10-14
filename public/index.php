<?php
require __DIR__ . '/../vendor/autoload.php';

$hello = new App\Hello();
$hello->talk();
var_dump($hello->talk());
