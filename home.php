<?php
session_start();

$error = false;
include_once 'back/db-products.php';
$title = 'Store Front';

include_once 'skin/header.php';  
?>


<div class="output">	
    
<?php
try
 {
    if($products = $productsObj->products()){ 
        foreach ($products as $product) 
        { 
?>
    <form method="post" action="view?action=add&product=<?= $product['id'];?>"  >  
<div class="product">
        <a href="view?product=<?= $product['id'];?>"><?= $product['p_title'];?></a>
        <img src="product_images/<?= $product['p_img'];?>" class="image"/>
        <p><?= $product['p_price'];?></p>
        <a href="cart?action=add&product=<?= $product['id'];?>">Add to Cart</a>
 </div>
    </form>      
<?php
       }
    }else{
        echo "<p align=center><b>No Products!</b></p>";
    }
}
catch(PDOException $e)
{
    echo $e->getMessage();
}  
?>  
</div>
<div class="clear"></div>


<?php 
include_once 'skin/footer.php';
