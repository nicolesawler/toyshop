<?php
session_start();
include_once 'back/db-products.php';
$title = 'Store Front';

//Check if product is set, otherwise redirect home
if(isset($_GET["product"]) && $_GET["product"] != ""){
    $pid = $_GET["product"];
}else{
    $productsObj->redirect('home');
}

//Get information about product
try
 {
    if($product = $productsObj->getproductbyid($pid)){ 
        //set items
        $title = $product[0]['p_title'];
        $img = $product[0]['p_img'];
        $price = $product[0]['p_price'];
        $desc = $product[0]['p_desc'];
    }else{
        echo "<p align=center><b>No Products!</b></p>";
    }
}
catch(PDOException $e)
{
    echo $e->getMessage();
} 

//header
include_once 'skin/header.php';  
?>


<div class="output">	

<h1><?= $title;?></h1>
<img src="product_images/<?= $img;?>" class="image"/>
<p>Price: $<?= $price;?> + HST</p>
<p>Description: <?= $desc;?></p>
<a href="cart?action=add&product=<?=$pid?>">Add to Cart</a>


</div>

<?php 
include_once 'skin/footer.php';