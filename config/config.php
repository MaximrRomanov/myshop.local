<?php
// константы для обращения к контроллерам
const PATH_PREFIX = "../controllers/";
const PATH_POSTFIX = 'Controller.php';

//используемый шаблон
$template = 'default';

//пути к файлам шаблонов (.tpl)
define("TEMPLATE_PREFIX", "../views/$template/");
const TEMPLATE_POSTFIX = '.tpl';

//пути к файлам шаблонов в вебпространстве
define ('TEMPLATE_WEBPATH', "../www/templates/$template");

//Инициализация шаблона Smarty
require ('../library/Smarty/libs/Smarty.class.php');
$smarty = new Smarty();

$smarty->setTemplateDir(TEMPLATE_PREFIX);
//!!!!!!!
$smarty->setCompileDir('../tmp/smarty/templates_c');
//!!!!!!!
$smarty->setCacheDir('../tmp/smarty/cache');
$smarty->setConfigDir('../library/Smarty/lexer');

$smarty->assign('TemplateWebPath', TEMPLATE_WEBPATH);

define("DB_NAME","myshop");
define("DB_LOCATION", "localhost");
define("DB_LOGIN","root");
define("DB_PASSWORD","");

//const DB_NAME = "myshop";
//const DB_LOCATION = "localhost";
//const  DB_PASSWORD ="";
//const DB_LOGIN = "root";