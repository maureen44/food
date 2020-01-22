<?php
//Turn on error reporting -- this is critical
ini_set('display_errors', 1);
error_reporting(E_ALL);

//Require the autoload file
require ("vendor/autoload.php");

//Instantiate fat free
$f3 = Base::instance();

//Define default route
$f3->route('GET /', function(){
    echo "Hello!";
});

//Run fat free
$f3->run();

