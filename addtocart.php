<?php
session_start();

$servername = "localhost";
$username ="root";
$password ="";
$dbname ="bumblee_bee1";

$conn = mysqli_connect($servername, $username, $password, $dbname);
if(isset($_GET["id"]))
{
	$index_id=$_GET["id"];
	unset($_SESSION["cart_items"][$index_id]);
}
include("includes/header.php");
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
<title>Bumble bee | Cart</title>
</head>

<body>
	<style>

#content #cart .table tbody tr td input {
width: 40px;
text-align: right;
font color:black;

}

#content #cart .table tbody tr td{
vertical-align: middle;
font color:black;

}
#content #cart .table tfoot {
font-size:18px;
}
.container table th td{
	font color:black;
}



	</style>
<nav class="navbar">
<h1 class="logo">B<span>b</span></h1>
<ul class="nav-links">
<input type="checkbox" id="checkbox_toggle" />
<label for="checkbox_toggle" class="hamburger">&#9776;</label>
<div class="menu">
<li class="home">
<a class="active" href="home.php" target="_self"><i  class="fa fa-fw fa-home"></i>Home<i class="fa fa-caret-down"></i></a>
<ul class="dropdown">
<li><a href="http://localhost/bumblebee/aboutus.php">About Us</a></li>
</ul>
</li>

<li class="products">
<a href="product.php"><i class="fa fa-shopping-basket"></i>Products<i class="fa fa-caret-down"></i></a>
<ul class="dropdown">
<li><a href="http://localhost/bumblebee/category1.php">Laptops</a></li>
<li><a href="http://localhost/bumblebee/category2.php">Desktops</a></li>
<li><a href="http://localhost/bumblebee/category3.php">Smart Phones</a></li>
<li><a href="http://localhost/bumblebee/category4.php">Smart watches</a></li>
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
</ul>
</nav>
<img src="https://www.atulhost.com/wp-content/uploads/2018/05/online-store.jpg"  align="center"  style="width:100%; height:600px;">

	<h3>Add to Cart</h3>
	
	
	<div class="row">
		<table class="table" style="width:100%; align:center;">
			<thead>
				<tr>
					<th>Product Id</th>
					<th>Product Name</th>
					<th>Quantity</th>
					<th>Product Price</th>
					<th> Sub Total</th>
					<th colspan="1">Delete</th>
</tr>
			</thead>	
			<tbody>
			<?php
			$i=0;
			if(isset($_SESSION["cart_items"]))
					
			{
				foreach($_SESSION["cart_items"] as $item)
				
				{
				    echo"<tr>";
					echo "<td>".$item[0]."</td>";
					echo "<td>".$item[1]."</td>";
					echo "<td>".$item[2]."</td>";
					echo "<td>".$item[3]."</td>";
					echo "<td>".$item[3]*$item[2]."</td>";
					echo "<td> <a href='addtocart.php?id=".$i."'> Delete </a> </td>";
			        echo"</tr>";
					$i++;
					
				}
				
				//var_dump($_SESSION["cart_items"]);
			}
			?>	
				
			
				</tbody>
			
</table>
		
		
</div>
<div class="box-footer"><!-- box-footer Starts -->

<div class="pull-left"><!-- pull-left Starts -->

<a href="product.php" class="btn btn-default">

<i class="fa fa-chevron-left"></i> Continue Shopping

</a>

</div><!-- pull-left Ends -->

<div class="pull-right"><!-- pull-right Starts -->

<a href="payment gateway/index.php" class="btn btn-primary">

Proceed to checkout <i class="fa fa-chevron-right"></i>

</a>

</div><!-- pull-right Ends -->

</div><!-- box-footer Ends -->

</form><!-- form Ends -->


</div><!-- box Ends -->
<Br><br><br><br>
<footer>
        <div class ="footer">
		      <p class="footer-company-name"><b>Bumblebee &copy; 2023</b></p>
			 </div>
			 </footer>