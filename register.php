<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8"/>
    <title>Bumble bee | Register</title>
    <link rel="stylesheet" href="style.css"/>
</head>
<body>
	<style>
		body {
    background: #3e4144;
}
.form {
    margin: 50px auto;
    width: 530px;
    height: 530px;
    padding: 30px 25px;
    background: white;
}
h1.login-title {
    color: #666;
    margin: 0px auto 25px;
    font-size: 25px;
    font-weight: 300;
    text-align: center;
}
.login-input {
    font-size: 15px;
    border: 1px solid #ccc;
    padding: 10px;
    margin-bottom: 25px;
    height: 25px;
    width: calc(100% - 23px);
}
.login-input:focus {
    border-color:#6e8095;
    outline: none;
}
.login-button {
    color: #fff;
    background: #55a1ff;
    border: 0;
    outline: 0;
    width: 100%;
    height: 50px;
    font-size: 16px;
    text-align: center;
    cursor: pointer;
}
.link {
    color: #666;
    font-size: 15px;
    text-align: center;
    margin-bottom: 0px;
}
.link a {
    color: #666;
}
h3 {
    font-weight: normal;
    text-align: center;
}
	</style>
<?php
	session_start();
	if(isset($_SESSION['username'])) {
		
	}

$servername = "localhost";
$username ="root";
$password ="";
$dbname ="bumblee_bee1";

$conn = mysqli_connect($servername, $username, $password, $dbname);

if(!$conn){
	die("connection Error");
}



function getRealUserIp(){
    switch(true){
      case (!empty($_SERVER['HTTP_X_REAL_IP'])) : return $_SERVER['HTTP_X_REAL_IP'];
      case (!empty($_SERVER['HTTP_CLIENT_IP'])) : return $_SERVER['HTTP_CLIENT_IP'];
      case (!empty($_SERVER['HTTP_X_FORWARDED_FOR'])) : return $_SERVER['HTTP_X_FORWARDED_FOR'];
      default : return $_SERVER['REMOTE_ADDR'];
    }
 }
		
		

?>
    <form class="form" action="" method="post">
        <h1 class="login-title">Registration</h1>
        <input type="text" class="login-input" name="username" placeholder="Name" required />
        <input type="text" class="login-input" name="dob" placeholder="Date Of Birth">
		<input type="text" class="login-input" name="email" placeholder="Email Adress">
        <input type="password" class="login-input" name="password" placeholder="Password">
        <input type="password" class="login-input" name="confirm password" placeholder="Confirm Password">
		<input type="text" class="login-input" name="contact" placeholder="Contact">
        <p>By creating an account you agree to our <a href="#">Terms & Privacy</a>.</p><br>
        <input type="submit" name="submit" value="Register" class="login-button">
        <p class="link">Already have an account? Click here to<a href="signin.php"> Signin</a></p>
    </form>
			
	                     
<script src="js/jquery.min.js"> </script>

<script src="js/bootstrap.min.js"></script>
			
<script>
function validateForm() {
		var password=document.getElementById('password').value;
		var password2=document.getElementById('password2').value;
		var telephone = document.getElementById('telephone').value;
		var email = document.getElementById('email').value;
		var myInput = document.getElementById("psw");
		var letter = document.getElementById("letter");
		var capital = document.getElementById("capital");
		var number = document.getElementById("number");
		var length = document.getElementById("length");

		var re= new RegExp(/^(?:\+\d{2})?\d{10}(?:,(?:\+\d{2})?\d{10})*$/);
		
		if(password !=password2) {
			event.preventDefault();
			document.getElementById('response').innerHTML ="<div class='alert alert-danger'>Password Don't Match</div>";
		}else if(!re.test(telephone)){
			event.preventDefault();
			document.getElementById('response').innerHTML ="<div class='alert alert-danger'>Telephone Don't Match</div>";
		}
			  // Validate lowercase letters
			  var lowerCaseLetters = /[a-z]/g;
			  if(myInput.value.match(lowerCaseLetters)) { 
				letter.classList.remove("invalid");
				letter.classList.add("valid");
			  } else {
				letter.classList.remove("valid");
				letter.classList.add("invalid");
			}
		  // Validate capital letters
		  var upperCaseLetters = /[A-Z]/g;
		  if(myInput.value.match(upperCaseLetters)) { 
			capital.classList.remove("invalid");
			capital.classList.add("valid");
		  } else {
			capital.classList.remove("valid");
			capital.classList.add("invalid");
		  }
			  // Validate numbers
		  var numbers = /[0-9]/g;
		  if(myInput.value.match(numbers)) { 
			number.classList.remove("invalid");
			number.classList.add("valid");
		  } else {
			number.classList.remove("valid");
			number.classList.add("invalid");
		  }
		    // Validate length
		  if(myInput.value.length >= 8) {
			length.classList.remove("invalid");
			length.classList.add("valid");
		  } else {
			length.classList.remove("valid");
			length.classList.add("invalid");
		  }
	}
</script>

<footer>
		<div class ="footer"   align="center" style="color:white">
		      <p class="footer-company-name">Bumblebee &copy; 2023</p>
			 </div>
			 </footer>
	
</body>
</html>

<?php

if(isset($_POST['submit'])){

// $secret = "6LcHnoQaAAAAAF3_pqQ55sZMDgaWCGcXq4ucLgkH";

// $response = $_POST['g-recaptcha-response'];

$remoteip = $_SERVER['REMOTE_ADDR'];

// $url = file_get_contents("https://www.google.com/recaptcha/api/siteverify?secret=$secret&response=$response&remoteip=$remoteip");

// $result = json_decode($url, TRUE);
$username=$_POST['username'];
$dob =$_POST['dob'];
$email =$_POST['email'];
$c_ip = getRealUserIp();
$password =$_POST['password'];
$contact =$_POST['contact'];
$get_email = "select * from user where email='$email'";
$run_email = mysqli_query($conn,$get_email);
$check_email = mysqli_num_rows($run_email);
if($check_email == 1){

echo "<script>alert('This email is already registered, try another one')</script>";

exit();

}
$sql = "insert into user (username,dob,email,password,customer_ip,contact) values ('$username','$dob','$email','$password','$c_ip','$contact')";

if(mysqli_query($conn,$sql)===TRUE) {
	$_SESSION['username'] = $username;
	echo "<script>alert('User Registered successfully')</script>";
}else{
	echo mysqli_error($conn);
}
}

?>