<?php
// подключили файл, где определены константы
include_once('../config/config.php');

function loadPage($smarty,$controllerName,$actionName='index'){
    /* ..-выходим из папки www на уровень выше ,следуем в папку "controllers",находим необходимый нам контроллер,
используя при этом переменную с именнем  используемого контроллера,добавляем постфикс "Controller.php"
*/
    include_once(PATH_PREFIX.$controllerName.PATH_POSTFIX);
    //формируем название функции
    $function=$actionName.'Action';
    $function($smarty);
}
 function loadTemplate($smarty,$templateName){

$smarty->display(TEMPLATE_PREFIX.$templateName.TEMPLATE_POSTFIX);

}

// функция для поиска ошибок
function d($value=null,$die=1){
    echo 'Debug: <br /><pre>';
    print_r($value);
    echo '</pre>';
    if($die) die;
}
