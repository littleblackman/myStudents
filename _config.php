<?php
ini_set('display_errors', 'on');
error_reporting(E_ALL);

class ConfigApp
{

    public static function start()
    {
        spl_autoload_register( array(__CLASS__, 'autoload'));

        $root = $_SERVER['DOCUMENT_ROOT'];
        $host = $_SERVER['HTTP_HOST'];

        $directory = "myStudents";

        define('HOST', 'http://'.$host.'/'.$directory.'/');
        define('ROOT', $root.$directory.'/');

        define('ASSET', HOST.'asset/');
        define('MODEL', ROOT.'model/');
        define('CONTROLLER', ROOT.'controller/');
        define('APPLICATION', ROOT.'application/');


        define('VIEW', ROOT.'view/');

        define('DB_HOST', "localhost");
        define('DB_NAME', "myStudents");
        define('DB_LOGIN', "root");
        define('DB_PWD', "root");
    }

    public static function autoload($class) {

        if(file_exists(MODEL.$class.'.php')) {
          include_once(MODEL.$class.'.php');
        }
        if(file_exists(APPLICATION.$class.'.php')) {
          include_once(APPLICATION.$class.'.php');
        }

    }


}
