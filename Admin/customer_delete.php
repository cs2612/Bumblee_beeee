<?php



if(!isset($_SESSION['admin_email'])){

echo "<script>window.open('admin login.php','_self')</script>";

}

else {




?>

<?php

if(isset($_GET['customer_delete'])){

$delete_id = $_GET['customer_delete'];

$delete_customer= "delete from user where user_id='$delete_id'";

$run_delete = mysqli_query($con,$delete_customer);


if($run_delete){

echo "<script>alert('Customer Has Been Deleted')</script>";

echo "<script>window.open('admin index.php?view_customers','_self')</script>";


}

}


?>




<?php } ?>