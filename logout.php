<?php

session_start();

unset($_SESSION["user_name"]);

unset($_SESSION["password"]);

header("location:home.php");

?>
