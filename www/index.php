<?php

//Инициализация настроек
include_once('../config/config.php');
//db config
include_once('../config/db.php');
//Основные функции
include_once('../library/mainFunctions.php');

//определяем с каким котроллером будем работать
 $controllerName=isset($_GET['controller']) ? ucfirst($_GET['controller'] ): 'Index';
// d($controllerName,0);

//echo 'Подключенный php файл (Контроллер) ='.$controllerName.'<br/>';

//определяем с каким котроллером будем работать
$actionName=isset($_GET['action']) ? ($_GET['action'] ): 'Index';


//echo 'Функция формирующая страницу (Экшн) ='.$actionName.'<br/>';

$smarty=new Smarty(); // возможно потом стоит убрать
//d($smarty);
loadPage($smarty,$controllerName,$actionName);
