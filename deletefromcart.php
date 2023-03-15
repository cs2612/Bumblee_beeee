<?php
session_start();

if(isset($_GET['product_id'])){
	$product_id =$_GET['product_id'];
unset($_SESSION['cart'][$product_id]); //remove item from cart

header("location:addtocart.php"); //re direct to view shopping cart

}
?>