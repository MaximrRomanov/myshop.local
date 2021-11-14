<?php
include_once('../library/mainFunctions.php');


include_once('../models/CategoriesModel.php');

function testAction(){
    echo 'IndexController.php > test action';
}

// формирование главной страницы
function indexAction($smarty){
    //getAllMainCatsWithChildren
    $recordSetCategories=getAllItemsFromCategories();
    $smarty->assign('pageTitle','Главная страница');
    loadTemplate($smarty,'index');
}
