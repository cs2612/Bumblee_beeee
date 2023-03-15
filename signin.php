<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8"/>
    <title>Bumble bee| Signin</title>
    <link rel="stylesheet" href="style.css"/>
</head>
<body>
	<style>
		body {
    background: #3e4144;
}
.form {
    margin: 50px auto;
    width: 450px;
    height: 330px;
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

if(!$conn) {
	die("Connection Error");
}

if(isset($_POST['submit'])) {
	
	//retreving values from form
	$username =$_POST['username'];
	$password =$_POST['password'];

if(isset($_POST['submit'])) {
	$sql = "SELECT * FROM user WHERE username='$username' AND password='$password'";
	$result= mysqli_query($conn, $sql);
	$rows = mysqli_num_rows($result);
    
	if($rows == 1) {
	$_SESSION['username'] = $username;
  $_SESSION['success'] = "<script>alert('you are now logged in')</script>";
	header("location:home.php");
		}
	}
}
?>
<form class="form" method="post" name="login">
    <h1 class="login-title">Signin</h1>
    <input type="text" class="login-input" name="username" placeholder="Username" autofocus="true"/>
    <input type="password" class="login-input" name="password" placeholder="Password"/>
    <input type="submit" value="Signin" name="submit" class="login-button"/>
    <p class="link"> Don't have an account? <a href="register.php">Register Now</a></p> <br>
    <p class="link"><i><p>If your an Admin please click here to <b><a href="Admin/admin login.php"> Signin</p></b></i></a></p>
</form>
<footer>
		<div class ="footer"   align="center" style="color:white">
            
		      <p>Bumblebee &copy; 2023.</p>
			 </div>
			 </footer>
</body>
</html>