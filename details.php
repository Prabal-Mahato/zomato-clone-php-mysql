 <?php
   session_start();
   $conn = mysqli_connect("localhost","root","","zomato");

   if(!empty($_SESSION)){
   	$is_logged_in = 1;
   }else{
   	$is_logged_in = 0;
   }

   $product_id = $_GET['id'];

   $query = "SELECT * FROM products WHERE product_id = $product_id";
   $result = mysqli_query($conn,$query);
   $result = mysqli_fetch_assoc($result);

   $user_id = $_SESSION['user_id'];

   $img_path = $result['bg'];

   $query2 = "SELECT * FROM wishlist WHERE user_id = $user_id AND product_id = $product_id";
   $result2 = mysqli_query($conn,$query2);
   $num_rows = mysqli_num_rows($result2);

   $query3 = "SELECT * FROM cart WHERE user_id = $user_id AND product_id = $product_id";
   $result3 = mysqli_query($conn,$query3);
   $num_rows2 = mysqli_num_rows($result3);
?>

<?php include("includes/header.php");?>


  <div class="container mt-5">
    <div class="row">
      <div class="col-6">
        <img src="<?php echo $img_path?> " style="width: 100%; height: 400px;">
      </div>
      <div class="col-6">
        <h1><?php echo $result['name'];?></h1>
        <h4>Rs <?php echo $result['price'];?></h4> 
        <p><?php echo $result['details'];?></p>
        <?php
        if($num_rows2){
          echo '<button class="btn btn-lg btn-primary" style="background-color: purple">Added to Menu</button>';
        }else{
          echo '<button id="cart-btn" class="btn btn-lg btn-danger">Add to Menu</button>';
        }


        if($num_rows){
          echo '<button class="btn btn-lg btn-primary" style="background-color: purple">Wishlisted</button>';
        }else{
          echo '<button id="wishlist-btn" class="btn btn-lg btn-primary">Wishlist</button>';
        }

        ?>
       
      </div>>
    </div>
  </div>
  <script type="text/javascript">
  $(document).ready(function(){
    $('#wishlist-btn').click(function(){
      if($('#wishlist-btn').text() === 'Wishlist'){

         $.ajax({
        url: 'add_wishlist.php?product_id=' + <?php echo $product_id;
         ?>,
        method:'GET',
        success: function(data){
          $('#wishlist-btn').text('Wishlisted');
          $('#wishlist-btn').css('background-color','purple');
          console.log(data);

        },
        error: function(error){
          console.log(error);

        }
      })
      }
     
    })

    $('#cart-btn').click(function(){
      $.ajax({
        url: 'add_to_cart.php?product_id=' + <?php echo $product_id;
         ?>,
        method:'GET',
        success: function(data){
          $('#cart-btn').text('Added to Menu');
          $('#cart-btn').css('background-color','purple');
        },
        error: function(error){
          console.log(error)
        }
      })
    })
  })
</script>

</body>
</html>