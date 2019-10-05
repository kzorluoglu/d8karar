<?php

require_once 'vendor/autoload.php'; 

$index = new D8devs\D8Karar\Controller\IndexController;

if($_SERVER['SCRIPT_NAME'] != 'vendor/bin/doctrine'){
    $index->index();
}
