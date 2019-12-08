<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class PRODUCTS{
    
    private $DB;

    function __construct($db_con)
    {
      $this->DB = $db_con;
    }
    
    
    public function redirect($url)
    {
        header("Location: $url");
    } 
    
    
    
    public function products()
    {
       try
       { 
        $stmt = $this->DB->prepare("SELECT * FROM  shop.products" );
        $stmt->execute();
        $results = $stmt->fetchAll(PDO::FETCH_ASSOC);

        if($stmt->rowCount() > 0){
          return $results;
        }
       }
       catch(PDOException $e)
       {
           echo $e->getMessage();
       }
    } 
    
    
    
    
    public function getproductbyid($id)
    {
       try
       { 
        $stmt = $this->DB->prepare("SELECT * FROM  shop.products WHERE id = ".$id );
        $stmt->execute();
        $results = $stmt->fetchAll(PDO::FETCH_ASSOC);

        if($stmt->rowCount() > 0){
          return $results;
        }
       }
       catch(PDOException $e)
       {
           echo $e->getMessage();
       }
    } 
    
    
    
    
}