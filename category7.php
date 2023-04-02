<?php

$servername = "localhost";
$username ="root";
$password ="";
$dbname ="bumblee_bee1";

$conn = mysqli_connect($servername, $username, $password, $dbname);

if(!$conn){
  die("connection Error");
}
if(isset($_GET['id'])) {

  $product_id = $_GET['id'];

}

$sql="SELECT * FROM product WHERE category_id=07";

$product= mysqli_query($conn,$sql);

?>

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
<title> Bumble bee| Other Products</title>
</head>
<body>
<nav class="navbar">
<h1 class="logo">B<span>b</span></h1>
<ul class="nav-links">
<input type="checkbox" id="checkbox_toggle" />
<label for="checkbox_toggle" class="hamburger">&#9776;</label>
<div class="menu">
<li class="home">
<a href="home.php" target="_self"><i  class="fa fa-fw fa-home"></i>Home<i class="fa fa-caret-down"></i></a>
<ul class="dropdown">
<li><a href="http://localhost/bumblebee/aboutus.php">About Us</a></li>
</ul>
</li>

<li class="products">
<a class="active" href="product.php"><i class="fa fa-shopping-basket"></i>Products<i class="fa fa-caret-down"></i></a>
<ul class="dropdown">
<li><a href="http://localhost/bumblebee/category1.php">Laptops</a></li>
<li><a href="http://localhost/bumblebee/category2.php">Desktops</a></li>
<li><a href="http://localhost/bumblebee/category3.php">Phones</a></li>
<li><a href="http://localhost/bumblebee/category4.php">watches</a></li>
<li><a href="http://localhost/bumblebee/category5.php">Cameras</a></li>
<li><a href="http://localhost/bumblebee/category6.php">Tv Items</a></li>
<li><a href="http://localhost/bumblebee/category7.php">Other Items</a></li>
</ul>
</li>

<li><a href="contact.php" target="_self"  class ="nav-link"  ><i class="fa fa-phone"></i>Contact</a></li>
				
<li><a href="register.php"   target="_self" class ="nav-link" ><i class="fa fa-pencil"></i>Register</a></li>
				
<li><a href="signin.php"   target="_self" class ="nav-link" ><i class="fa fa-fw fa-user"></i>Signin</a></li>
				
<li><a href="addtocart.php" target="_self" class ="nav-link" ><i class="fa fa-fw fa-shopping-cart"></i>Cart</a></li>

<a class="nav-link" href="logout.php"><i class="fa fa-sign-out"></i>Logout</a>

<form class="Oflox-Search-box" role="search" method="get"
action="http://localhost/bumblebee/category1.php"><input type="search" id="oflox-block-
search__input-3" class="Oflox-Search-box" name="s" value="" 
placeholder="Search Here..." style="width: 150px; height: 22px; align: 'flex';"><button type="submit" class="fa fa-fw fa-search" style="width: 22px; height: 22px;"></i></button></form>
</div>
</div>	
</ul>
</nav>  


<img class="ban banner_img" src="images/banner7.jpg" alt="banner image" width="100%px" height="470px"> 

    <style>
        
*{
    padding: 0;
    margin: 0;
    box-sizing: border-box;
    font-family: Cambria, Cochin, Georgia, Times, 'Times New Roman', serif;
    color: black;
}
.products {
position: relative; 
}
.dropdown {
background-color: black;
padding: 1em 0;
position: absolute; /*WITH RESPECT TO PARENT*/
display: none;
border-radius: 7px;
top: 45px;
}
.dropdown li + li {
margin-top: 05px;
}
.dropdown li {
padding: 0.1em 1em;
width: 09em;
text-align: center;
}
.dropdown li:hover {
background-color: black;
}
.products:hover .dropdown {
display: block;
}
html {
    font-size: 61.5%;
}
.footer{
    font-size: 14px;
}
main{
    max-width: 1400px;
    width: 95%;
    margin: 30px auto;
    display: flex;
    flex-wrap: wrap;
    justify-content: space-between;
    margin: auto;
}
main .card{
    max-width: 500px;
    flex: 1 1 310px;
    text-align: center;
    height: 500px;
    border: 1px solid lightgray;
    margin: 20px;
}
main .card.image{
    height: 50%;
    margin-bottom: 20px;
}
main .card .image img{
    width: 100%;
    height: 100%;
    object-fit: cover;
}
main .card .caption{
    padding-left:1em;
    text-align: left;
    line-height: 25%;
}
main .card .caption p{
    font-size: 1.5rem;
}
main .card .caption .rate i{
    color: gold;
}
main .card a{
    width: 50%;
}
main .card button{
    border: 2px solid black;
    padding: 1em;
    width:80;
    margin-top: 2em;
    cursor: pointer;
    font-weight: bold;
    position: relative;
}
main .card button:before{
    content: "";
    position: absolute;
    top: 0;
    left: 0;
    bottom: 0;
    width: 0;
    background-color: black;
    transition: all .5s;
    margin: 0;
}
main .card button:after{
    content: "";
    position: absolute;
    top: 0;
    right: 0;
    bottom: 0;
    width: 0;
    background-color: black;
    transition: all .5s;
}
main .card button:hover::after{
    width: 30%; 
}
main .card button:hover::before{
    width: 30%; 
}


        </style>
    <main>
        <?php
        while($row = mysqli_fetch_assoc($product)){?>
<div class="card">
<div class="lable">
        <?php echo $row["product_lable"];?> <style>
.lable {position: relative;
width: 150px;
padding: 3px 30px 4px 10px;
margin: 20px 50px 09px -31px;
color: #fff;
font-size:15px;
font-weight:bold;
background-color: #337ab7;
text-shadow: 0px 1px 2px #bbb;
}</style>
        </div>
    <div class="image">
        <img src="<?php echo $row["image"];?>">
        </div>
        
        <div class="caption">
            <center>
        <p class="name"><b><h1><?php echo $row["product_name"];?></p></b></h1>
        <br> <br> <br> <br> 
        <br> <br> <br> <br>
        <p class="price"><b><?php echo number_format ($row['product_price']);?> LKR</b></p>
        </center>
        </div>
        <button class="button"><a href="details.php?id=<?php echo $row['product_id']; ?>" class="btn btn-success" style="color:green";>view Details</button> </a>
        
        <button class="button"><a href="addtocart.php?product_id=<?php echo $row['product_id']; ?>" class="btn btn-success" style="color:green";> <i class="fa fa-cart-plus"></i> Add to Cart</button> </a>
        </div>
          <?php
          }
          ?>
        </main>
        <footer>
        <div class ="footer">
		      <p class="footer-company-name"><b>Bumblebee &copy; 2023</b></p>
			 </div>
			 </footer>
        </body>
        </html>
