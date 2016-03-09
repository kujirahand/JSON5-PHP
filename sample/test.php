<?php

require dirname(dirname(__FILE__)).'/src/json5.php';

// read file
$input = dirname(__FILE__).'/test.json5';
$json5 = file_get_contents($input);

// decode
$a = json5_decode($json5);
var_dump($a);


