<?php


$root = $_SERVER['DOCUMENT_ROOT'];
$host = $_SERVER['HTTP_HOST'];

$directory = "myStudents";

define('HOST', 'http://'.$host.'/'.$directory.'/');
define('ROOT', $root.$directory.'/');

define('ASSET', HOST.'asset/');
define('MODEL', ROOT.'model/');
define('CONTROLLER', ROOT.'controller/');


define('DB_HOST', "localhost");
define('DB_NAME', "myStudents");
define('DB_LOGIN', "root");
define('DB_PWD', "root");