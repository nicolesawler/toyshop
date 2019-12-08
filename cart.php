<?php
session_start();

$error = false;
include_once 'back/db-products.php';
$title = 'Store Front';

if(isset($_GET["action"]) && isset($_GET["product"])){
    include_once 'front/actions.php';
}

include_once 'skin/header.php';  
?>

<div class="cart">
<?php	
//echo '<pre>' . print_r($_SESSION, TRUE) . '</pre>';
$total = 0;
if(!empty($_SESSION["cart_item"])){
        foreach ($_SESSION["cart_item"] as $item){
            $item_price = $item["quantity"]*$item["price"]; 
            $total += $item["price"];
            ?>
          <div class="product">   
                <a href="view?product=<?= $item['id'];?>"><?= $item['title'];?></a>
              <br>
                <img src="product_images/<?= $item["image"]; ?>" />
                <br>
               <?php $item["sku"]; ?>
                <?= "$ ".$item_price; ?>
                Quantity: <?= $item["quantity"]; ?>
                <a href="cart?action=remove&product=<?= $item["id"]; ?>">Remove</a>
          </div>
        <?php
        }
}else{
    echo "Cart is empty!";
}
?>
<?php
$hst =number_format((float)$total*0.15, 2, '.', '');
$final = ($total+$hst);
?>

</div>
<aside class="cartside">
    <h2>My Cart Total</h2>
    Item Total: <b><?=$total?></b><br>
    HST: <b><?=$hst?></b><br>
    Final Total: <b><?=$final?></b><br>
    <br>
    <br>
    <a href="?action=empty&product=0">Empty Cart</a>
<br>
    
</aside>

<div class="clear"></div>


<?php
include_once 'skin/footer.php';  
?>
