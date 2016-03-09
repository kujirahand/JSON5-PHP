<?php

require 'json5.php';

$json5 = file_get_contents("test.json5");

$a = json5_decode($json5);

var_dump($a);


