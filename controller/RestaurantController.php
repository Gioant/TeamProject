<?php
//function to load required model classes
spl_autoload_register(function ($class_name) {
    $filename = $class_name . '.class.php';
    include_once '../model/' . $filename;
});

session_start();
$database = new DB_Manager2();


