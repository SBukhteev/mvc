<?php
//FRONT CONTROLLER


//1.Общие настройки
ini_set('display_errors',1);
error_reporting(E_ALL);

//2.Подключение файлов системы
define('ROOT', dirname(__FILE__));
require_once(ROOT . '/SourceFiles/components/Router.php');

//3.Установка соединения с БД


//4.вызов Router.
$router = new Router();
$router -> run();