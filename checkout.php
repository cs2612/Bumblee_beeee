<?php 
session_start();

$servername = "localhost";
$username ="root";
$password ="";
$dbname ="bumblee_bee1";

$conn = mysqli_connect($servername, $username, $password, $dbname);
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta name="description" content="PHP Shopping Cart Using Sessions" /> 
<meta name="keywords" content="shopping cart tutorial, shopping cart, php, sessions" />
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="stylesheet" media="all" href="/style/style.css" type="text/css" />
<link href="prdtable.css" rel="stylesheet" type="text/css" />

<title>Checkout</title>

<meta name="viewport" content="width=device-width, initial-scale=1.0">
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
  
 
   <img src="checkout.jpg"  align="center"  style="width:1519px; height:500px;"></br>
   
    

<div align="center">
			 <div class="col-md-4">
			 <h2>Please fill your information for Billing</h2>
			<div class="column" >
	       
			<div class="box">
			<div class="container">
  <form action="action_page.php">
			
			<div class "form-group">
			<label>Username</label></br>
			<input type="text" name="username" id="username" class="form-control"  required>
			</div>
            
			<div class "form-group">
			<label>Email</label></br>
			<input type="text" name="email" id="email" class="form-control"  required>
			</div>
			
			<div class "form-group">
			<label>Address</label></br>
			<input type="text" name="address" id="address" class="form-control"  required>
			</div>
			
             <div class "form-group">
			<label>City</label></br>
			<input type="text" name="city" id="city" class="form-control"  required>
			</div>
			
             <div class "form-group">
			<label>Zip</label></br>
			<input type="text" name="zip" id="zip" class="form-control"  required>
			</div>
            </div>
          </div>
		  
		  <hr>
           
		   <div align="center">
			 <div class="col-md-8">
			 <h2>Payment Methods</h2>
			<div class="column" >
	       
			<div class="box">
			<div class="container">
  <form action="action_page.php">
  
            <label>Accepted Cards</label></br>
            <div class="icon-container">
              <i class="fa fa-cc-visa fa-2x" style="color:#1A1F71;"></i>
              <i class="fa fa-cc-amex fa-2x" style="color:blue;"></i>
              <i class="fa fa-cc-mastercard fa-2x" style="color:red;"></i>
              <i class="fa fa-cc-paypal fa-2x" style="color:#1e477a;"></i>
              <i class="fa fa-credit-card fa-2x"style="color:#e8c536;"></i>
              
            </div>
			</br>
			<div class "form-group">
			<label>Name on card</label></br>
			<input type="text" name="card" id="card" class="form-control"  required>
			</div>
			</br>

			<div class "form-group">
			<label>Credit card number</label></br>
			<input type="text" name="cre: card num" id="cre: card num" class="form-control"  required>
			</div>
			</br>
			<div class "form-group">
			<label>Exp month & Year</label></br>
			<input type="text" name="exp month & year" id="exp month & year" class="form-control"  required>
			</div>
           	</br>
        <div class "form-group">
			<label>CVV</label></br>
			<input type="text" name="cvv" id="cvv" class="form-control"  required>
			</div>
              </div>
              
            </div>
          </div>
          
        </div>
 
        <label>
</br>
        <input type="checkbox" checked="checked" name="sameadr" > <b>Shipping address same as billing</b></label>
<br/>
				<a id="checkout" class="btn btn-success" a href="placeorder.php" name="checkout" align="center">Proceed to transaction</a></button>
				</form> 
<h2> Thank You For Ordering!!</h2>
<a id="continue" href="product.php" class="btn btn-info" align="center"> continue shopping</a></h2>
</br>
<p class="footer-company-name">InfluxCreation&copy;2022</p>	
</body>
</html>