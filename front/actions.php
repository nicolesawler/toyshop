<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

   //switch case for actions
    switch ($_GET["action"]) {
        // if adding to cart
        case "add":
            //check if product number is numeric
            if(is_numeric($_GET["product"])){
                $productid = $_GET["product"];
                
                //get product info from db
                if($item = $productsObj->getproductbyid($productid)){
                    
                    //Create a multidimensional array of items
                    $itemArray = array(
                        $item[0]["id"]=>array(
                            'id'=>$item[0]["id"], 
                            'title'=>$item[0]["p_title"], 
                            //'sku'=>$item[0]["p_sku"], 
                            'price'=>$item[0]["p_price"], 
                            'image'=>$item[0]["p_img"],
                            'quantity'=>1
                            )
                        );
                        //check or create cart item sessiom
			if(!empty($_SESSION["cart_item"])) {
                            //check if item is in array
                            if(in_array($item[0]["id"],array_keys($_SESSION["cart_item"]))) {
                                foreach($_SESSION["cart_item"] as $k => $v) {
                                    if($item[0]["id"] == $k) {
                                        //add quantity if exists
                                        $_SESSION["cart_item"][$k]["quantity"] += 1;
                                    }
                                }
                            } else {
                                //if item is new add to session
                                $_SESSION["cart_item"] = array_merge($_SESSION["cart_item"],$itemArray);
                            }
			} else {
                            //add brand new item
				$_SESSION["cart_item"] = $itemArray;
			}
                    
                }else{
                    //couldnt find product in db
                    echo "Product Doesn't Exist!";
                }
                
            }else{
                //otherwise redirect back home because product id isnt valid
                $productsObj->redirect('home');
            }
            break;
            
            
            
        case "remove":
              if(!empty($_SESSION["cart_item"])) {
                foreach($_SESSION["cart_item"] as $key => $value) {
                    //check product id against id in loop
                    if($_GET["product"] == $key){
                        if($_SESSION["cart_item"][$key]["quantity"] == 1){
                            //remove item all together if quantity is only 1
                            unset($_SESSION["cart_item"][$key]);
                        }else{
                            //remove a quantity
                            $_SESSION["cart_item"][$key]["quantity"] -= 1;
                        }
                    }
                    //destroy session if nothing in it
                    if(empty($_SESSION["cart_item"])):
                       unset($_SESSION["cart_item"]);
                    endif;
                    
                } 
            }
           break; 
	case "empty":
            //destroy session
            unset($_SESSION["cart_item"]);
            break;
        default:
            //redirect if page isnt doing anything
            $productsObj->redirect('home');
            break;
            
            
    }