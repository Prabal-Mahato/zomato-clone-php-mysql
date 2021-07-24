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
	<h1 class="mt-5 ml-5">My Menus</h1>
	<div class="row">
		<div class="col-8">
			<?php
			include("includes/dbhelper.php");
			$user_id = $_SESSION['user_id'];

			$query = "SELECT * FROM cart c JOIN products p ON c.product_id = p.product_id WHERE c.user_id = user_id";
			$result = mysqli_query($conn,$query);
			$counter = 0;
			$amount = 0;

			while($row = mysqli_fetch_assoc($result)){

				$amount = $amount + $row['price']*$row['quantity'];
				echo '<div class="card mt-3 ml-5" id="product-card'.$row['product_id'].'">
			<div class="row">
				<div class="col-3">
					<img src=" '.$row['bg'].' " style="width: 100%;height: 100px">
				</div>
				<div class="col-7">
					<h5 class="mt-3">'.$row['name'].'</h5>
					<h5>Rs <span id="price'.$row['product_id'].'">'.$row['price'].'</span></h5>
				</div>
				<div class="col-2">
				<div class="mt-4">
				<button data-id='.$row['product_id'].' class="btn btn-danger btn-sm plus-one">-</button>
                   <span id="quantity'.$row['product_id'].'" class="ml-1 mr-1"><b>'.$row['quantity'].'</b></span>
                   <button data-id='.$row['product_id'].' class="btn btn-danger btn-sm plus-one">+</button>
				</div>
                   
				</div>
			</div>
			
		</div>';
		$counter++;
			}
			if($counter == 0){
				echo '<h4>You have no items in Menu</h4>';
			}else{
				echo '<hr>
			<h3 class="ml-5" style="display: inline;">Total Amount: Rs <span id="total">'.$amount.'</span></h3>
			<a href="place_order.php" class="btn btn-danger btn-lg ml-5" style="float: right">Checkout</a>';

			}

          

			?>
			
		</div>
		
	</div>
</div>

<script type="text/javascript">

	$('.plus-one').click(function(){
		var sign = $(this).text();
		var product_id = $(this).attr('data-id');
		var quantity = $('#quantity' + product_id).text();
		var price = Number($('#price'+product_id).text());
		var total = Number($('#total').text());
		$.ajax({
			url:'update_product_quantity.php?product_id=' + product_id + '&quantity=' + quantity + '&sign=' + sign,
			method: 'GET',
            success: function(data){
            	if(sign==='+'){
            		$('#quantity' + product_id).text(Number(quantity) + 1);
            	$('#total').text(total + price);
            }else{
            	$('#quantity' + product_id).text(Number(quantity) - 1);
            	$('#total').text(total - price);
            	if(Number(quantity)-1 === 0){
            		$.ajax({
            			url:'remove_product_from_cart.php?product_id=' + product_id,
            			method:'GET',
            			success:function(data){
            				$('#product-card' + product_id).hide();


            			},
            			error:function(error){

            			}
            		})
            		
            	}
            }
            	
            },
            error: function(error){
            	console.log(error);
            }
		})

	})
</script>

