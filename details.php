<!DOCTYPE html>
<html lang="en">
  <head>
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="stylesheet" href="style.css" />
  <meta name="keywords" content="footer, address, phone, icons" />
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css">
<link href='https://fonts.googleapis.com/css?family=Raleway:600,900,400' rel='stylesheet' type='text/css'>
<link href="http://fonts.googleapis.com/css?family=Cookie" rel="stylesheet" type="text/css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<title> Bumble bee| Product View</title>
</head>
<body>

<div class="menu">
<a class="active" href="product.php"><i class="fa fa-shopping-basket"></i>Back to Products</i></a>
				
<a class="active" href="addtocart.php" target="_self" class ="nav-link" ><i class="fa fa-fw fa-shopping-cart"></i>Cart</a>

</div>

<style>

.menu {

display: flex;
gap: 1em;

font-size: 18px;

}

.menu li:hover {

background-color: black;

border-radius: 5px;

transition: 0.3s ease;

}

.menu li {
padding: 5px 14px;

}

/* Style the links inside the navigation bar */
.menu a {
  float: left;
  color: #f2f2f2;
  text-align: left;
  padding: 22px 16px;
  text-decoration: none;
  font-size: 20px;
}

/* Change the color of links on hover */
.menu a:hover {
  background-color: #ddd;
  color: black;
}

</style>  
<body>

<?php
session_start();
$servername = "localhost";
$username ="root";
$password ="";
$dbname ="bumblee_bee1";

$conn = mysqli_connect($servername, $username, $password, $dbname);

$id = "";
if(isset($_GET["id"]))
{
  $id = $_GET["id"];
}

$sql_query = "SELECT * FROM product WHERE product_id='$id'";
$result=$conn->query($sql_query);
//print_r($_SESSION["cart_items"]);

if(isset($_POST["btn_addcart"]))
{
  $product_id=$id;
  $product_name=$_POST["product_name"];
  $stock=$_POST["stock"];
  $product_price=$_POST["product_price"];

  $items_arr=array($product_id,$product_name,$stock,$product_price);
  
  if(!empty($_SESSION["cart_items"]))
  {
    array_push($_SESSION["cart_items"],$items_arr);
  }
  else
  {
    $_SESSION["cart_items"]=array();
    array_push($_SESSION["cart_items"],$items_arr);
  }
  //print_r($items_arr);
 
  //$_SESSION["cart_item"] = array_merge($_SESSION["cart_item"],$items_arr);
  //array_push($_SESSION["cart_items"]);
  
  // $_SESSION["product_id"]=$product_id;
  //$_SESSION["product_name"]=$product_name;
  //$_SESSION["stock"]=$stock;
  //$_SESSION["product_price"]=$product_price;

  //echo '<script> alert("'.$product_price.'  '.$product_name.'  '.$stock.'");</script>';

}

include("includes/functions.php");
include("includes/header.php");
?>
  <style>

@import url('https://fonts.googleapis.com/css2?family=Dosis:wght@600&family=Roboto:wght@300;400;500;700;900&display=swap');

*{
    margin: 0;
    padding: 0;
    box-sizing: border-box;
}

body{
    width: 100%;
    min-height: 50vh;
    position: relative;
    display: flex;
    justify-content: center;
    align-items: center;
    background: gray;
    font-family: 'roboto', sans-serif;
}

body::before{
    content: '';
    position: absolute;
    left: 0%;
    transform: translateX(-50%) skewX(-15deg);
    width: 20px;
    height: 50%;
    background: gray;
    border-left: 60px solid #eae3d2;
    border-right: 30px solid #eae3d2;
    opacity: 0;
    animation: slide-in 2s 1.5s forwards 1;
}

@keyframes slide-in{
    100%{
        opacity: 1;
        left: 50%;
    }
}

.product{
    position: relative;
    width: 1000px;
    min-width: 350px;
    min-height: 350px;
    height: auto;
    display: flex;
    justify-content: center;
    align-items: center;
}

.image{
    width: 100%;
    height: 300px;
    background: white;
    position: relative;
    opacity: 0;
    transform: translateY(-50px);
    animation: fade-in 1s forwards 1;
}

.image img{
    width: 100%;
    height: 100%;
    object-fit: contain;
    user-select: none;
}
.product-listing{
    width: 100%;
    min-height: 300px;
    height: 320px;
    background: #292929;
    padding: 40px;
    display: flex;
    content: right;
    color: #eae3d2;
    opacity: 0;
    transform: translateY(50px);
    animation: fade-in 1s forwards 1;
}

@keyframes fade-in{
    100%{
        opacity: 1;
        transform: translateY(0);
    }
}

.name{
    font-family: 'dosis';
    font-size: 70px;
    text-transform: capitalize;
}

.description{
    font-size: 14px;
    line-height: 10px;
    margin: 50px 0;
}

.price{
    font-size: 70px;
    font-weight: 100;
    margin-bottom: 20px;
}

.rate{
    width: fit-content;
    display: flex;
    justify-content: center;
    align-items: center;
}

.rate i{
  color: gold;
}

.button{
    background: #eae3d2;
    color: #292929;
    border: none;
    text-transform: capitalize;
    font-size: 16px;
    padding: 10px 20px;
    cursor: pointer;
}

.button:hover{
    background-color: #eedbaf;
}

@media (max-width: 1100px){
    body::before{
        transform: translateX(-50%) skewX(-5deg);
    }
    .product{
        flex-direction: column;
        width: 90%;
        margin: 5vh 0;
    }
    .image{
        width: 100%;
        height: 300px;
    }
    .product-listing{
        width: 100%;
        min-height: auto;
    }
    .name,.price{
        font-size: 50px;
    }
    .description{
        font: 14px;
    }
}
    </style>
    
    <h2>Product Details </h2>
   
<div class="product">

  <?php
if ($result->num_rows>0)
{
  while($row=$result->fetch_assoc())
  {

    ?>
       <div class="row">
          <div class="lable">
             <?php echo $row["product_lable"];?> <style>
                   .lable {position: relative;
                    width: 150px;
                    padding: 10px 20px 3px 20px;
                    margin: 10px 20px 09px -0px;
                    color: #fff;
                    font-size:16px;
                    font-weight:bold;
                    background-color: #337ab7;
                    text-shadow: 0px 1px 2px #bbb;
                    }</style></div>
           
           <div class="image">
              <img src="<?php echo $row["image"];?>">
            </div>
            <div class="product-listing">
            <div class="content">
              <h4 style="color: grey;"><?php echo $row["product_name"];?>
              <form action="" method="post">
              <?php
                if($row["stock"] == 0)
              {
                echo '<h4 style="color:red;"> Out of stock</h4>';
              }
                else
              {
                echo '<h4 style="color:green;"> In stock</h4>';
                echo '<h4 style="color:grey">Quantity</h4>';
                echo '<input type="number"
                class="form-control" name="stock" min="1" max="'.$row["stock"].'" aria-describedby="helpId" placeholder="required">';
                echo'<br/><Button name="btn_addcart" id="" class="btn btn-success" type="submit" role="button"> Add to Cart</Button>';
              }
              ?>
              <br>
              <?php echo $row["description"];?>
              <br>
              <b><?php echo number_format ($row['product_price']);?> LKR</b>
            <br>
              <p class="rate">
                                           <i class="fa fa-star star"></i>
                                           <i class="fa fa-star star"></i>
                                           <i class="fa fa-star star"></i>
                                           <i class="fa fa-star star"></i>
                                           <i class="fa fa-star-half star"></i>
              </p>
              <input type="hidden" name="product_name" value ="<?php echo $row["product_name"];?>"/>
              <input type="hidden" name="product_price" value ="<?php echo $row["product_price"];?>"/>
            </form>
             



             
  </div>
</div>
    </div>
    <?php

  }
}

  ?>
 
</div>
<script src="js/jquery.min.js"> </script>

<script src="js/bootstrap.min.js"></script>
<footer>
        <div class ="footer">
		      <p class="footer-company-name"><b>Bumblebee &copy; 2023</b></p>
			 </div>
			 </footer>
</body>
</html>
