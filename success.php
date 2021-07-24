<?php
session_start();

if(empty($_SESSION)){
	header('Location:login_form.php');
}else{
	$is_logged_in = 1;
}
?>

<?php include("includes/header.php"); ?>

<div class="container mt-5">
	<div class="row mt-5">
		<div class="col-12">
			<img style="display: block; margin: auto; width: 200px; height: 200px" src="https://thumbs.dreamstime.com/b/order-placed-abstract-concept-vector-illustration-e-commerce-model-online-store-delivery-booking-process-order-placed-courier-205558923.jpg">
			<h1 class="text-md-center">Order Placed Successfully</h1>
			<a href="orders.php" class="btn btn-danger btn-lg" style="display: block; margin: auto">Go to your Orders</a>
		</div>
	</div>
</div>