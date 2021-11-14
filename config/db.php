<?php
include_once("config.php");
// data from connection
function getConnection() {
    $dbLocation="localhost";
    $dbName="myshop";
    $dbLogin="root";
    $dbPassword="";
    // it's connection with data base
    try{
        $connection=new PDO("mysql:host=".DB_LOCATION.";dbname=".DB_NAME.";", DB_LOGIN, DB_PASSWORD);
//        $connection = new PDO("mysql:host=$dbLocation;dbname=$dbName;",$dbLogin,$dbPassword);
        echo "Success connection";
        return $connection;
    }
    catch(PDOException $e){
        echo $e->getMessage();

    }
}

