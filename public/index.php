<?php

require __DIR__ . '/../vendor/autoload.php';

$hello = new \App\Wcs\Hello();

echo $hello->talk();
