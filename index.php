<?php
include_once 'back/db-products.php';

define('LOGIN_NOT_REQUIRED', 1);


if(defined('LOGIN_NOT_REQUIRED') && LOGIN_NOT_REQUIRED === 1){
    
    $productsObj->redirect('home');
    
}