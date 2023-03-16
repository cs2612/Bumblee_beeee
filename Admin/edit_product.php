<?php

if(!isset($_SESSION['admin_email'])){

echo "<script>window.open('admin login.php','_self')</script>";

}

else {

?>

<?php

if(isset($_GET['edit_product'])){

$edit_id = $_GET['edit_product'];

$get_p = "select * from product where product_id='$edit_id'";

$run_edit = mysqli_query($con,$get_p);

$row_edit = mysqli_fetch_array($run_edit);

$p_id = $row_edit['product_id'];

$p_title = $row_edit['product_name'];

$pat = $row_edit['category_id'];

$pro_image = $row_edit['image'];

$new_p_image = $row_edit['image'];

$p_price = $row_edit['product_price'];

$p_desc = $row_edit['description'];


}




$get_cat = "select * from category";

$run_cat = mysqli_query($con,$get_cat);

$row_cat = mysqli_fetch_array($run_cat);

$cat_title = $row_cat['category_name'];


?>


<!DOCTYPE html>

<html>

<head>

<title> Edit Products </title>


<script src="//cdn.tinymce.com/4/tinymce.min.js"></script>
  <script>tinymce.init({ selector:'#product_desc' });</script>

</head>

<body>

<div class="row"><!-- row Starts -->

<div class="col-lg-12"><!-- col-lg-12 Starts -->

<ol class="breadcrumb"><!-- breadcrumb Starts -->

<li class="active">

<i class="fa fa-dashboard"> </i> Dashboard / Edit Products

</li>

</ol><!-- breadcrumb Ends -->

</div><!-- col-lg-12 Ends -->

</div><!-- row Ends -->


<div class="row"><!-- 2 row Starts --> 

<div class="col-lg-12"><!-- col-lg-12 Starts -->

<div class="panel panel-default"><!-- panel panel-default Starts -->

<div class="panel-heading"><!-- panel-heading Starts -->

<h3 class="panel-title">

<i class="fa fa-money fa-fw"></i> Edit Products

</h3>

</div><!-- panel-heading Ends -->

<div class="panel-body"><!-- panel-body Starts -->

<form class="form-horizontal" method="post" enctype="multipart/form-data"><!-- form-horizontal Starts -->

<div class="form-group" ><!-- form-group Starts -->

<label class="col-md-3 control-label" > Product Title </label>

<div class="col-md-6" >

<input type="text" name="name" class="form-control" required value="<?php echo $p_title; ?>">

</div>

</div><!-- form-group Ends -->


</select>

</div>

</div><!-- form-group Ends -->

</select>

</div>

</div><!-- form-group Ends -->

<div class="form-group" ><!-- form-group Starts -->

<label class="col-md-3 control-label" > Category </label>

<div class="col-md-6" >

<select name="cat" class="form-control" >

<option value="<?php echo $cat; ?>" > <?php echo $cat_title; ?> </option>

<?php

$get_cat = "select * from category ";

$run_cat = mysqli_query($con,$get_cat);

while ($row_cat=mysqli_fetch_array($run_cat)) {

$cat_id = $row_cat['category_id'];

$cat_title = $row_cat['category_name'];

echo "<option value='$cat_id'>$cat_title</option>";

}

?>
</select>
</div>

</div>
<br>
<br>
</div><!-- form-group Ends -->

<div class="form-group" ><!-- form-group Starts -->

<label class="col-md-3 control-label" > Product Image </label>

<div class="col-md-6" >

<input type="file" name="image" class="form-control" >

</div>
</div>

<br>
<div class="panel-body"><!-- panel-body Starts -->

<form class="form-horizontal" method="post" enctype="multipart/form-data"><!-- form-horizontal Starts -->

<div class="form-group" ><!-- form-group Starts -->

<label class="col-md-3 control-label" > Product Price </label>

<div class="col-md-6" >

<input type="text" name="name" class="form-control" required value="<?php echo $p_price; ?>LKR">

</div>

</div>

<div class="form-group" ><!-- form-group Starts -->

<div class="col-md-6" >

<ul class="nav nav-tabs"><!-- nav nav-tabs Starts -->

<li class="active">

<a data-toggle="tab" href="#description"> Product Description </a>

</li>


<div class="tab-content"><!-- tab-content Starts -->

<div id="description" class="tab-pane fade in active"><!-- description tab-pane fade in active Starts -->

<br>

<textarea name="description" class="form-control"  required value="<?php echo $p_desc; ?>"rows="10" id="description">


</textarea>
</div>



<br>
<br>

<div class="form-group" ><!-- form-group Starts -->

<label class="col-md-3 control-label" ></label>

<div class="col-md-6" >

<input type="submit" name="update" value="Update Product" class="btn btn-primary form-control" >

</div>

</div><!-- form-group Ends -->

</form><!-- form-horizontal Ends -->

</div><!-- panel-body Ends -->

</div><!-- panel panel-default Ends -->

</div><!-- col-lg-12 Ends -->

</div><!-- 2 row Ends --> 




</body>

</html>

<?php

if(isset($_POST['update'])){

$product_title = $_POST['product_name'];
$product_cat = $_POST['category_id'];
$product_price = $_POST['product_price'];
$product_desc = $_POST['description'];
$product_label = $_POST['product_label'];


$product_img = $_FILES['product_img']['name'];
$temp_name = $_FILES['product_img']['tmp_name'];

if(empty($product_img)){

$product_img = $new_p_image;

}

move_uploaded_file($temp_name1,"mages/$product_img");


$update_product = "update product set category_id='$product_cat',product_name='$product_title',image='$product_img',product_price='$product_price',description='$product_desc',product_label='$product_label' where product_id='$p_id'";

$run_product = mysqli_query($con,$update_product);

if($run_product){

echo "<script> alert('Product has been updated successfully') </script>";

echo "<script>window.open('admin index.php?view_products','_self')</script>";

}

}

?>

<?php } ?>
