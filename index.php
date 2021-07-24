       <?php
   session_start();
   if(!empty($_SESSION)){
   	$is_logged_in = 1;
   }else{
   	$is_logged_in = 0;
   }
?>

<?php include("includes/header.php");?>
	<div id="carouselExampleSlidesOnly" class="carousel slide" data-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img class="d-block w-100" height="500px" src="https://pbs.twimg.com/media/DpJAKdxW0AARf5c.jpg" alt="First slide">
    </div>
  </div>
</div>
<div class="container">
	<h4 class="mt-5">Order food online in Kolkata</h4>
	<div class="row">

		<div class="col-6">
			<a href="d_details.php"><div class="card mt-3">
			<div class="row">
				<div class="col-4">
					<img src="https://upload.wikimedia.org/wikipedia/commons/thumb/7/74/Dominos_pizza_logo.svg/1200px-Dominos_pizza_logo.svg.png" class="mt-3" style="width: 100%; height: 100px">
				</div>
					<div class="col-5">
						<h4 class="mt-3">Domino's Pizza</h4>
						<h6>Italian</h6>
						<h6>30 mins</h6>
					</div>
					<div class="col-3">
						<button class="mt-4 btn btn-danger">Order Now</button>
			</div>
		</div>
		</div>
		
	</div>
</a>

	<div class="col-6">
			<a href="kfc_details.php"><div class="card mt-3">
			<div class="row">
				<div class="col-4">
					<img src="https://1000logos.net/wp-content/uploads/2017/03/KFC-Symbol.jpg" class="mt-3" style="width: 100%; height: 100px">
				</div>
					<div class="col-5">
						<h4 class="mt-3">KFC</h4>
						<h6>Fast Food</h6>
						<h6>35 mins</h6>
					</div>
					<div class="col-3">
						<button class="mt-4 btn btn-danger">Order Now</button>
			</div>
		</div>
		</div>
		
	</div>
</a>

	<div class="col-6">
			<a href="subway_details.php"><div class="card mt-3">
			<div class="row">
				<div class="col-4">
					<img src="https://admin.itsnicethat.com/images/AHvQAqDViS6Z8PIy9aADCpfIA1A=/27734/format-webp%7Cwidth-2880/57a8ace67fa44c98d1002105.jpg" class="mt-3" style="width: 100%; height: 100px">
				</div>
					<div class="col-5">
						<h4 class="mt-3">Subway</h4>
						<h6>American</h6>
						<h6>27 mins</h6>
					</div>
					<div class="col-3">
						<button class="mt-4 btn btn-danger">Order Now</button>
			</div>
		</div>
		</div>
		
	</div>
    </a>
	<div class="col-6">
			<a href="ab_details.php"><div class="card mt-3">
			<div class="row">
				<div class="col-4">
					<img src="https://www.teahub.io/photos/full/236-2365872_kolkata-biryani-arsalan.jpg" class="mt-3" style="width: 100%; height: 100px">
				</div>
					<div class="col-5">
						<h4 class="mt-3">Arsalan Biryani</h4>
						<h6>Bengali</h6>
						<h6>28 mins</h6>
					</div>
					<div class="col-3">
						<button class="mt-4 btn btn-danger">Order Now</button>
			</div>
		</div>
		</div>
		
	</div>
</a>


	<div class="col-6">
			<a href="zz_details.php"><div class="card mt-3">
			<div class="row">
				<div class="col-4">
					<img src="https://b.zmtcdn.com/data/pictures/4/19405444/86d19b7d3d8686f3def4517ac59dea2a_o2_featured_v2.jpg" class="mt-3" style="width: 100%; height: 100px">
				</div>
					<div class="col-5">
						<h4 class="mt-3">Flavours of North</h4>
						<h6>North Indian</h6>
						<h6>60 mins</h6>
					</div>
					<div class="col-3">
						<button class="mt-4 btn btn-danger">Order Now</button>
			</div>
		</div>
		</div>
		
	</div>
</a>

	<div class="col-6">
			<a href="mcd_details.php"><div class="card mt-3">
			<div class="row">
				<div class="col-4">
					<img src="https://www.clipartkey.com/mpngs/m/267-2675024_mcdonalds-logo-circle-clipart-png-download-mcdonalds-logo.png" class="mt-3" style="width: 100%; height: 100px">
				</div>
					<div class="col-5">
						<h4 class="mt-3">McDonald's</h4>
						<h6>American</h6>
						<h6>29 mins</h6>
					</div>
					<div class="col-3">
						<button class="mt-4 btn btn-danger">Order Now</button>
			</div>
		</div>
		</div>
		
	</div>
</a>
	
</div>


</body>
</html>