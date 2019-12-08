<?php

//Connect to DB
$db_host = "localhost";
$db_user = "root";
$db_pass = "root";
$db_name = "shop";

//Try Connection
try
{
     $db_con = new PDO("mysql:host={$db_host};dbname={$db_name}",$db_user,$db_pass);
     $db_con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}
catch(PDOException $e)
{
     echo $e->getMessage();
}

//Include and create Object Classes
include_once 'classes/class.products.php';

$productsObj = new PRODUCTS($db_con);
