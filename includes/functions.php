<?php

$db = mysqli_connect("localhost","root","","bumblee_bee1");

/// IP address code starts /////
function getRealUserIp(){
    switch(true){
      case (!empty($_SERVER['HTTP_X_REAL_IP'])) : return $_SERVER['HTTP_X_REAL_IP'];
      case (!empty($_SERVER['HTTP_CLIENT_IP'])) : return $_SERVER['HTTP_CLIENT_IP'];
      case (!empty($_SERVER['HTTP_X_FORWARDED_FOR'])) : return $_SERVER['HTTP_X_FORWARDED_FOR'];
      default : return $_SERVER['REMOTE_ADDR'];
    }
 }
/// IP address code Ends /////


// items function Starts ///

function items(){

global $db;

$ip_add = getRealUserIp();

$get_items = "select * from cart where ip_add='$ip_add'";

$run_items = mysqli_query($db,$get_items);

$count_items = mysqli_num_rows($run_items);

echo $count_items;

}


// items function Ends ///

// total_price function Starts //

function total_price(){

global $db;

$ip_add = getRealUserIp();

$total = 0;

$select_cart = "select * from cart where ip_add='$ip_add'";

$run_cart = mysqli_query($db,$select_cart);

while($record=mysqli_fetch_array($run_cart)){

$pro_id = $record['p_id'];

$pro_qty = $record['qty'];


$sub_total = $record['p_price']*$pro_qty;

$total += $sub_total;






}

echo "LKR" . $total;



}



// total_price function Ends //

// getPro function Starts //

function getProduct(){

global $db;

$get_product = "select * from product order by 1 DESC LIMIT 0,8";

$run_product = mysqli_query($db,$get_product);

while($row_product=mysqli_fetch_array($run_product)){

$pro_id = $row_product['product_id'];

$pro_title = $row_product['name'];

$pro_price = $row_product['price'];

$pro_img = $row_product['image'];

$product_label = $row_product['product_lable'];

$product_price = "$pro_price LKR";

}


if($product_label == ""){


}
else{

$product_label= "

<a class='label sale' href='#' style='color:black;'>

<div class='thelabel'>$product_label</div>

<div class='label-background'> </div>

</a>

";

}


echo "

<div class='col-md-4 col-sm-6 single' >

<div class='product' >

<a href='$pro_url' >

<img src='images/$pro_img' class='img-responsive' >

</a>

<div class='text' >

<hr>

<h3><a href='$pro_url' >$pro_title</a></h3>

<p class='buttons' >

<a href='$pro_url' class='btn btn-default' >View Details</a>

<a href='$pro_url' class='btn btn-danger'>

<i class='fa fa-shopping-cart'></i> Add To Cart

</a>


</p>

</div>

$product_label


</div>

</div>

";

}


// getPro function Ends //








?>
