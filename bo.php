<?php
ini_set("display_errors", "0");
session_start();
define("CALLER","[WEB]"); //Definition du CALLER pour le fichier log
require_once("includes/general.php");
require_once("includes/arrays.php");


if(MODE_DEV){
    error_reporting(E_ALL);
    ini_set("display_errors", "1");


}

require_once("libraries/general.php");
spl_autoload_register("fwAutoload");
require_once("includes/menu.php");



//$_SESSION["user_id"]=1;
//$_SESSION["user_name"]="Admin";
$dbManager = new _database($cfg_database);


echo _route::route();

