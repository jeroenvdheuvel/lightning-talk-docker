<?php

require_once 'vendor/autoload.php';

use Werkspot\LightningTalk\HelloWorld;

$helloWorld = new HelloWorld();

$name = filter_input(INPUT_GET, 'name');
$message = $helloWorld->sayHelloTo($name);

echo $message;
