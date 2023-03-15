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
<title>Bumble bee | Home</title>
</head>

<body>
<nav class="navbar">
<h1 class="logo">B<span>b</span></h1>
<ul class="nav-links">
<input type="checkbox" id="checkbox_toggle" />
<label for="checkbox_toggle" class="hamburger">&#9776;</label>
<div class="menu">
<li class="home">
<a class="active" href="index.php" target="_self"><i  class="fa fa-fw fa-home"></i>Home<i class="fa fa-caret-down"></i></a>
<ul class="dropdown">
<li><a href="http://localhost/bumblebee/aboutus.php">About Us</a></li>
</ul>
</li>

<li class="products">
<a href="products.php"><i class="fa fa-shopping-basket"></i>Products<i class="fa fa-caret-down"></i></a>
<ul class="dropdown">
<li><a href="/">Desktops</a></li>
<li><a href="/">Smart Phones</a></li>
<li><a href="/">Smart watches</a></li>
<li><a href="/">Cameras</a></li>
<li><a href="/">Tv Items</a></li>
<li><a href="/">Other Items</a></li>
</ul>
</li>

<li><a href="contact.php" target="_self"  class ="nav-link"  ><i class="fa fa-phone"></i>Contact</a></li>
				
<li><a href="register.php"   target="_self" class ="nav-link" ><i class="fa fa-pencil"></i>Register</a></li>
				
<li><a href="signin.php"   target="_self" class ="nav-link" ><i class="fa fa-fw fa-user"></i>Signin</a></li>
				
<li><a href="viewcart.php" target="_self" class ="nav-link" ><i class="fa fa-fw fa-shopping-cart"></i>Cart</a></li>

<a class="nav-link" href="logout.php"><i class="fa fa-sign-out"></i>Logout</a>

<form class="Oflox-Search-box" role="search" method="get"
action="http://localhost/bumblebee/category1.php"><input type="search" id="oflox-block-
search__input-3" class="Oflox-Search-box" name="s" value="" 
placeholder="Search Here..." style="width: 150px; height: 22px; align: 'flex';"><button type="submit" class="fa fa-fw fa-search" style="width: 22px; height: 22px;"></i></button></form>

</div>	
</ul>
</nav>
<article class="box">
    <div class="box-right">
<style>
  @import "bourbon";

/*----------------------------------------------   
-Defualt to border-box
-----------------------------------------------  */
*, *:before, *:after {
  -webkit-box-sizing: border-box; 
  -moz-box-sizing: border-box; 
  box-sizing: border-box; 
}
html, body{
  font-family: helvetica;
  font-size: 100%;
  margin: 0;
  padding: 0;
  font-weight: 400;
  font-family: Raleway;
  line-height: 1.4;
}
/*----------------------------------------------   
--Fluid body sizing
-----------------------------------------------  */
body {
font-size: 100%;
  
  @media (min-width: 32em) {
    font-size: 110%
  }
  @media (min-width: 54em) {
    font-size: 111%
  }
  @media (min-width: 74em) {
    font-size: 115%
  }

  @media (min-width: 96em) {
    font-size: 135%
  }
}
a.btn{
  background-color: #54A984;
  width: 160px;
  border: 1;
	outline: none;
  cursor: pointer;
	font-size: 15px;
	font-weight: 500;
  color: #fff;
  text-decoration: none;
  display:inline-block;
  letter-spacing: 0.1em;
  padding: 0.5em 0em;
  
  &.btn-beta{
    background-color: #e36e3a;
  }
}
.decor-line {
	position:	relative;
	top:	0.7em;
  border-top: 1px solid #ccc;
  text-align:center;
  max-width: 40%;
  margin: 0.5em auto;
  display: block;
  padding: 0.1em 1em;
  color: #ccc;
  
  .span{
    background: #fff;
    color: #ccc;
    position: relative;
    top: -.7em;
    padding: 0.5em;
    text-transform: uppercase;
    letter-spacing: 0.1em;
    font-weight:	900;
  }
}
.overlay-verify{
  background: #000;
  position:fixed;
  height: 100%;
  width: 100%;
  top: 0;
  left: 0;
  z-index: 1;
}

.box{
  background: gray;
  border-radius: 50px;
  text-align: center;
  position: absolute;
  left: 0;
  right: 0;
  top: 20%;
  bottom: 0;
  margin: 0 auto;
  z-index: 9;
  width: 35%;
  height: 50%;
 
  p{
      //padding: 5%;
      position: relative;
      z-index: 3;
    }
  }
  
  
  .box-right{
    text-align: center;
    
    h1 {
      color: #555;
      text-transform: uppercase;
      letter-spacing: 0.07em;
      border-bottom: 1px solid #eee;
      padding-bottom: 1em;
      margin: 0 auto;
    }
    p{
      color: #aaa;
    }
    small{
      color: #ccc;
    }
    .btn{
      font-weight: 600;
      letter-spacing: 0.2em;
      padding: 0.9em 1em 0.7em;
      margin: 1em auto;
      display: block;
    }
  }

</style>
<body>
<main>
  <br>
      <h1><i>Age Verification</i></h1> </br>
      <p>By clicking enter, I certify that I am above the age of 18 and will comply with the statement.</p>
      <br>
      <a href="http://localhost/bumblebee/home.php" class="btn btn-alpha" id="refresh-page">YES, I'm above 18</a>
</br>
      <p class="decor-line"><span>Or</span></p>
      
      <a href="http://localhost/bumblebee/error.php" class="btn btn-beta" id="reset-session">NO, I'm under 18</a>

      <br>
      <br>
      <small>Always enjoy responsibily.</small>
</br>
</br>
    </div>
    </div>
  </article>
  
  <div class="overlay-verify"></div>
</main>

<script>
 jQuery(document).ready(function($){

if (sessionStorage.getItem('advertOnce') !== 'true') {
//sessionStorage.setItem('advertOnce','true');
  $('.box').show();
}else{
  $('.box').hide();
}
 
$('#refresh-page').on('click',function(){
$('.box').hide();
sessionStorage.setItem('advertOnce','true');
});
  
$('#reset-session').on('click',function(){
$('.box').show();
sessionStorage.setItem('advertOnce','');
});
 
});
</script>
<div class="hero">
      <div class="container">
        <h1><b>Welcome To Bumble bee <span><i>Electronic Store</i><span></b></h1>
        <p>Do you like to buy high-quality products from us and <b>pay later</b>?</p>
      </div>
    </div>

    <footer class="footer-distributed">
 
 <div class="footer-left">

   <h3>Bumble<span>bee</span></h3>

   <p class="footer-links">
     <a href="index.php">Home</a>
     ·
     <a href="products.php">Products</a>
     ·
     <a href="contact.php">Contact</a>
     ·
     <a href="register.php">Register</a>
     ·
     <a href="signin.php">Sign in</a>
     ·
     <a href="viewcart.php">Cart</a>
   </p>

   <p class="footer-company-name">Bumblebee &copy; 2023</p>
 </div>

 <div class="footer-center">

   <div>
     <i class="fa fa-map-marker"></i>
     <p><span>Nugegoda , Dehiwala , Borella </span>SL(Sri Lanka)</p>
   </div>

   <div>
     <i class="fa fa-phone"></i>
     <p>+94 110983567</P>  
                         <P>+94 111993568</p>
   </div>

   <div>
     <i class="fa fa-envelope"></i>
     <p><a href="mailto:support@company.com">bumblebee@gmail.com
</a></p>
   </div>

 </div>

 <div class="footer-right">

   <p class="footer-company-about">
     <span>About the company</span>
     Bumble bee company is a high-quality guranteed electronic items selling company.
   </p>

   <div class="footer-icons">

     <a href="#"><i class="fa fa-facebook"></i></a>
     <a href="#"><i class="fa fa-twitter"></i></a>
     <a href="#"><i class="fa fa-linkedin"></i></a>
     <a href="#"><i class="fa fa-instagram"></i></a>
     <a href="#"><i class="fa fa-whatsapp"></i></a>
                      
   </div>

 </div>

  </footer>
</section>
</body>
</html>