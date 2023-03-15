<?php

session_start();

include("includes/db.php");

include("includes/functions.php");

?>

<?php


$ip_add = getRealUserIp();

if(isset($_POST['id'])){

$id = $_POST['id'];

$qty = $_POST['quantity'];

$change_qty = "update cart set qty='$qty' where product_id='$id' AND ip_add='$ip_add'";

$run_qty = mysqli_query($con,$change_qty);


}





?>