<?php
session_start();

$servername = "localhost";
$username ="root";
$password ="";
$dbname ="bumblee_bee1";

$conn = mysqli_connect($servername, $username, $password, $dbname);

if(!$conn){
	die("connection Error");
}

if(isset($_POST['submit'])) {
        $to = "bumblebee@gmail.com";
        $subject = $_POST['name'];
        $message = $_POST['message'];
        
        mail($to, $subject, $message);
        echo '<script>alert("Successfully send message")</script>';
		echo '<script>window.location="contact.php"</script>';
    }
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
<title>Buble bee | Contact</title>
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

<li><a class="active" href="contact.php" target="_self"  class ="nav-link"  ><i class="fa fa-phone"></i>Contact</a></li>
				
<li><a href="register.php"   target="_self" class ="nav-link" ><i class="fa fa-pencil"></i>Register</a></li>
				
<li><a href="signin.php"   target="_self" class ="nav-link" ><i class="fa fa-fw fa-user"></i>Signin</a></li>
				

</div>	
</ul>
</nav>

<div class"container">
<style>
.container {
  position: relative;
  text-align: center;
  color: white;
}
.centered {
  position: absolute;
  top: 55%;
  left: 60%;
  transform: translate(-50%, -50%);
 
}

  #wrap {
        width: 100%;
        height: 90px;
        margin: 0;
        z-index: 99;
        position: relative;
        background-color: #222;
      }
      </style>
<div align="center">
<img src="contact.jpeg"  width="100%;" height="550">
<div class="centered"><b><h1 style="color:white; background-color:gray; border: 1px solid black;">Get in touch</h1></b><br>
<b><i><h3 style="background-color:gray; border-radius: 20px; height: 170px;"><br>Want to get in touch? We'd love to hear from you.
</br>Our support team makes sure that you get the best advice and guidance regarding whatever queries you have. We help you out from your very primary question to the most complex inquiries. Here's how you can reach us......</b></i></h3></div>
</div>
 </div>
    </br>             
<div align="center">
		<h1><u><i><b>To get more information...</b></u></i></h1>
				
					<h3><i class="fa fa-map-marker">Our Address</h3></i>
						<p>Nawala rd,<br>
							Rajagiriya<br>
							Sri Lanka.<br> <b>(Head Office)</b><br>
						</p>
						
						
			    
					<h3><i class="fa fa-phone">Call Us</h3></i>
                           <p>+94 110983567</p>
                           <p>+94 111993568</p>
						
						
				
					<h3><i class="fa fa-envelope">E-mail Us</h3></i>
						<p><a href="mailto:support@company.com">bumblebee@gmail.com</p></a>
                            
                              <h3>Our Social Media Networks</h3>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<a href="#" class="fa fa-facebook fa-2x" style="color:#3b5998;"></a>
<a href="#" class="fa fa-twitter fa-2x" style="color:#55acee;"></a>
<a href="#" class="fa fa-linkedin fa-2x" style="color:#0077b5;"></a>
<a href="#" class="fa fa-instagram fa-2x" style="color:#bc2a8d;"></a>
<a href="#" class="fa fa-whatsapp  fa-2x" style="color:#43d854;"></a>
						
                   </div>
		</div>
		</div>
</div>		

		<br>
		<hr>
<div align="center" style="margin: 25px;">
<form method="post">
<table class="contact">
    <tr class="contact">
        <td class="contact" colspan="2"><h2>If you wish to contact us, send us an email.<h2></td>
    </tr>
    
    <tr class="contact">
        <td class="contact">Your name:</td>
        <td class="contact"><input type="text" name="name" required></td>
    </tr>

    <tr class="contact">
        <td class="contact">Telephone:</td>
        <td class="contact"><input type="text" maxlength="10" required></td>
    </tr>

    <tr class="contact">
        <td class="contact">Email address:</td>
        <td class="contact"><input type="email" required></td>
    </tr>
	
	<tr class="contact">
        <td class="contact">Message:</b></td>
        <td class="contact"><textarea rows="10" cols="40" name="message" required></textarea>
    </tr>
    
    <tr class="contact">
        <td class="contact"></td>
        <td class="contact"><input type="submit" name="submit"></td>
    </tr>
</table>
</form>
</div>
		  
		     <footer>
		<div class ="footer" text-align="center">
		      Bumblebee &copy;2023.
			 </div>
			 </footer>
		
	</body>
</html>