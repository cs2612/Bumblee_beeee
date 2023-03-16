<?php


if(!isset($_SESSION['admin_email'])){

echo "<script>window.open('admin login.php','_self')</script>";

}

else {


?>

<div class="row"><!-- 1 row Starts -->

<div class="col-lg-12"><!-- col-lg-12 Starts -->

<ol class="breadcrumb"><!-- breadcrumb Starts  --->

<li class="active">

<i class="fa fa-dashboard"></i> Dashboard / View Orders

</li>

</ol><!-- breadcrumb Ends  --->

</div><!-- col-lg-12 Ends -->

</div><!-- 1 row Ends -->


<div class="row"><!-- 2 row Starts -->

<div class="col-lg-12"><!-- col-lg-12 Starts -->

<div class="panel panel-default"><!-- panel panel-default Starts -->

<div class="panel-heading"><!-- panel-heading Starts -->

<h3 class="panel-title"><!-- panel-title Starts -->

<i class="fa fa-money fa-fw"></i> View Orders

</h3><!-- panel-title Ends -->

</div><!-- panel-heading Ends -->

<div class="panel-body"><!-- panel-body Starts -->

<div class="table-responsive"><!-- table-responsive Starts -->

<table class="table table-bordered table-hover table-striped"><!-- table table-bordered table-hover table-striped Starts -->

<thead><!-- thead Starts -->

<tr>

<th>#</th>
<th>Customer</th>
<th>product</th>
<th>Invoice</th>
<th>Qty</th>
<th>Total Amount</th>
<th>Status</th>
<th>Action</th>


</tr>

</thead><!-- thead Ends -->
<tbody>
<?php

$i = 0;

$get_customer_orders = "select * from customer_orders";

$run_customer_orders = mysqli_query($con,$get_customer_orders);

while($row_customer_orders=mysqli_fetch_array($run_customer_orders)){
$order_id=$row_customer_orders['order_id'];
$pro_id=$row_customer_orders['product_id'];
$customer_id = $row_customer_orders['user_id'];
$invoice=$row_customer_orders['invoice_no'];
$pro_stock = $row_customer_orders['qty'];
$total_price=$row_customer_orders['due_amount'];
$status=$row_customer_orders['order_status'];

$i++;

?>

<tr>
<td><?php echo $order_id; ?></td>
<td><?php echo $i; ?></td>
<td><?php echo $pro_id; ?></td>
<td><?php echo $invoice; ?></td>
<td> <?php echo $pro_stock; ?> </td>
<td><?php echo number_format ($total_price); ?> LKR</td>
<td> <?php echo $status; ?> </td>
</td>
<td>

<a href="admin index.php?delete_product=<?php echo $order_id; ?>">

<i class="fa fa-trash-o"> </i> Delete

</a>

</td>

<td>

</a>

</td>

</tr>

<?php } ?>


</tbody>


</table><!-- table table-bordered table-hover table-striped Ends -->

</div><!-- table-responsive Ends -->

</div><!-- panel-body Ends -->

</div><!-- panel panel-default Ends -->

</div><!-- col-lg-12 Ends -->

</div><!-- 2 row Ends -->



<?php } ?>

