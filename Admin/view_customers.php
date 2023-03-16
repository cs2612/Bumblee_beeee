<?php

if(!isset($_SESSION['admin_email'])){

echo "<script>window.open('admin login.php','_self')</script>";

}

else {


?>

<div class="row"><!-- 1 row Starts -->

<div class="col-lg-12"><!-- col-lg-12 Starts -->

<ol class="breadcrumb"><!-- breadcrumb Starts -->

<li class="active">

<i class="fa fa-dashboard"></i> Dashboard / View Customers

</li>

</ol><!-- breadcrumb Ends -->

</div><!-- col-lg-12 Ends -->

</div><!-- 1 row Ends -->

<div class="row"><!-- 2 row Starts --> 

<div class="col-lg-12"><!-- col-lg-12 Starts -->

<div class="panel panel-default"><!-- panel panel-default Starts -->

<div class="panel-heading"><!-- panel-heading Starts -->

<h3 class="panel-title"><!-- panel-title Starts -->

<i class="fa fa-money fa-fw"></i> View Customers

</h3><!-- panel-title Ends -->

</div><!-- panel-heading Ends -->


<div class="panel-body" ><!-- panel-body Starts -->

<div class="table-responsive" ><!-- table-responsive Starts -->

<table class="table table-bordered table-hover table-striped" ><!-- table table-bordered table-hover table-striped Starts -->

<thead><!-- thead Starts -->

<tr>

<th>#</th>
<th>Name</th>
<th>Date Of Birth</th>
<th>Email</th>
<th>Phone Number</th>
<th>Delete</th>


</tr>

</thead><!-- thead Ends -->


<tbody><!-- tbody Starts -->

<?php

$i=0;

$get_u = "select * from user";

$run_u = mysqli_query($con,$get_u);

while($row_u=mysqli_fetch_array($run_u)){

$user_id = $row_u['user_id'];

$name = $row_u['username'];

$dob = $row_u['dob'];

$email = $row_u['email'];

$contact = $row_u['contact'];

$i++;




?>

<tr>

<td><?php echo $i; ?></td>

<td><?php echo $name; ?></td>

<td><?php echo $dob; ?></td>

<td><?php echo $email; ?></td>

<td><?php echo $contact; ?></td>

<td>

<a href="admin index.php?customer_delete=<?php echo $user_id; ?>" >

<i class="fa fa-trash-o" ></i> Delete

</a>


</td>


</tr>

<?php } ?>


</tbody><!-- tbody Ends -->



</table><!-- table table-bordered table-hover table-striped Ends -->

</div><!-- table-responsive Ends -->

</div><!-- panel-body Ends -->


</div><!-- panel panel-default Ends -->

</div><!-- col-lg-12 Ends -->

</div><!-- 2 row Ends --> 

<?php } ?>