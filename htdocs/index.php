<?php

require_once __DIR__ . '/../vendor/autoload.php'; // Autoload files using Composer autoload

use HelloWorld\SayHello;

$var = new Nekrofage\HelloLib\YourClass;

echo SayHello::world();

echo $var->method1("hey");
