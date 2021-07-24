<?php
session_start();

if(empty($_SESSION)){
	header('Location:login_form.php');
}else{
	$is_logged_in = 1;
}
?>

<?php include("includes/header.php"); ?>

<div class="contaier">
	<h1 class="mt-5 ml-5">My Wishlist</h1>
	<div class="row">
		<div class="col-8">
			<?php
			include("includes/dbhelper.php");
			$user_id = $_SESSION['user_id'];

			$query = "SELECT * FROM wishlist w JOIN products p ON w.product_id = p.product_id WHERE w.user_id = user_id";
			$result = mysqli_query($conn,$query);
			$counter = 0;

			while($row = mysqli_fetch_assoc($result)){
				echo '<div class="card mt-3 ml-5">
			<div class="row">
				<div class="col-4">
					<img src=" '.$row['bg'].' " style="width: 100%;height: 150px">
				</div>
				<div class="col-8">
					<h4 class="mt-3">'.$row['name'].'</h4>
					<h5>Rs '.$row['price'].'</h5>
				</div>
			</div>
			
		</div>';
		$counter++;
			}
			if($counter == 0){
				echo '<h4>You have no wishlisted items</h4>';
			}

			?>
			
		</div>
		
	</div>
</div>

