<!DOCTYPE html>
<html lang="en-US">
  <head>
  <title>The Baker's House</title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script> <style>
  html,body {
  height: 100%;
}
.centered {
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
}
  #cartimage {
  height: 100%;
  background:transparent url('http://www.simpleimageresizer.com/_uploads/photos/b85e9004/eduardo-soares-y39ElnSaZxc-unsplash_750x700.jpg') no-repeat center center /cover;
}
h2{
	font-family:Algerian;
}
  </style>
  </head>
 <body>



<?php

session_start();
include('dbconn.php');
$useremail=$_SESSION['email'];
if(isset($_POST['logout'])){
  // remove all session variables
session_unset();

// destroy the session
session_destroy();

header('location: login.php');
}

$no=0;



$sql="select c1 from cart where email='$useremail'";

    $result=mysqli_query($conn,$sql);
    $arraytemp=mysqli_fetch_array($result);
    $c1=$arraytemp['c1'];
    if($c1!=0)
    $no=1;

    $sql="select c2 from cart where email='$useremail'";

    $result=mysqli_query($conn,$sql);
    $arraytemp=mysqli_fetch_array($result);
    $c2=$arraytemp['c2'];
    if($c2!=0)
    $no=1;

    $sql="select c3 from cart where email='$useremail'";

    $result=mysqli_query($conn,$sql);
    $arraytemp=mysqli_fetch_array($result);
    $c3=$arraytemp['c3'];
    if($c3!=0)
    $no=1;


    $sql="select d1 from cart where email='$useremail'";

    $result=mysqli_query($conn,$sql);
    $arraytemp=mysqli_fetch_array($result);
    $d1=$arraytemp['d1'];
    if($d1!=0)
    $no=1;


    $sql="select d2 from cart where email='$useremail'";

    $result=mysqli_query($conn,$sql);
    $arraytemp=mysqli_fetch_array($result);
    $d2=$arraytemp['d2'];
    if($d2!=0)
    $no=1;


    $sql="select d3 from cart where email='$useremail'";

    $result=mysqli_query($conn,$sql);
    $arraytemp=mysqli_fetch_array($result);
    $d3=$arraytemp['d3'];
    if($d3!=0)
    $no=1;


    $sql="select cr1 from cart where email='$useremail'";

    $result=mysqli_query($conn,$sql);
    $arraytemp=mysqli_fetch_array($result);
    $cr1=$arraytemp['cr1'];
    if($cr1!=0)
    $no=1;


    $sql="select cr2 from cart where email='$useremail'";

    $result=mysqli_query($conn,$sql);
    $arraytemp=mysqli_fetch_array($result);
    $cr2=$arraytemp['cr2'];
    if($cr2!=0)
    $no=1;

    
    $sql="select cr3 from cart where email='$useremail'";

    $result=mysqli_query($conn,$sql);
    $arraytemp=mysqli_fetch_array($result);
    $cr3=$arraytemp['cr3'];
    if($cr3!=0)
    $no=1;


    $sql="select cu1 from cart where email='$useremail'";

    $result=mysqli_query($conn,$sql);
    $arraytemp=mysqli_fetch_array($result);
    $cu1=$arraytemp['cu1'];
    if($cu1!=0)
    $no=1;

    $sql="select cu2 from cart where email='$useremail'";

    $result=mysqli_query($conn,$sql);
    $arraytemp=mysqli_fetch_array($result);
    $cu2=$arraytemp['cu2'];
    if($cu2!=0)
    $no=1;


    $sql="select cu3 from cart where email='$useremail'";

    $result=mysqli_query($conn,$sql);
    $arraytemp=mysqli_fetch_array($result);
    $cu3=$arraytemp['cu3'];
    if($cu3!=0)
    $no=1;

    $price1=$price2=$price3=$price4=$price5=$price6=$price7=$price8=$price9=$price10=$price11=$price12=0;
    


    if(isset($_POST['checkout'])){

      
      if($no!=0){
      $sql="INSERT INTO orders (email,c1,c2,c3,d1,d2,d3,cr1,cr2,cr3,cu1,cu2,cu3) VALUES ('$useremail','$c1','$c2','$c3','$d1','$d2','$d3','$cr1','$cr2','$cr3','$cu1','$cu2','$cu3')";
      mysqli_query($conn,$sql);
      $sql="UPDATE cart SET c1=0,c2=0,c3=0,d1=0,d2=0,d3=0,cr1=0,cr2=0,cr3=0,cu1=0,cu2=0,cu3=0 WHERE email='$useremail'";
      mysqli_query($conn,$sql);
      $c1=$c2=$c3=$d1=$d1=$d1=$cr1=$cr2=$cr3=$cu1=$cu2=$cu3=$no=0;
      ?>
      <script>
      alert("Your Order has been confirmed with COD payment and will be delivered within 2 hours, you can find current order in past orders page")
      </script>
    <?php  

      }
      else{
        ?>
        <script>
        alert("No items in cart, please add some items from the browse page.")
        </script>
      <?php
      }

    }


    if(isset($_POST['empty'])){

      if($no!=0){
      $sql="UPDATE cart SET c1=0,c2=0,c3=0,d1=0,d2=0,d3=0,cr1=0,cr2=0,cr3=0,cu1=0,cu2=0,cu3=0 WHERE email='$useremail'";
      mysqli_query($conn,$sql);
      $c1=$c2=$c3=$d1=$d1=$d1=$cr1=$cr2=$cr3=$cu1=$cu2=$cu3=$no=0;
      }
      else{
        ?>
        <script>
        alert("No items in cart, please add some items from the browse page.")
        </script>
      <?php
      }  
    
    }
?>









<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNavDropdown">
    <ul class="navbar-nav">
      <li class="nav-item active">
        <a class="nav-link" href="#">Home<span class="sr-only">(current)</span></a>
      </li>
 <li class="nav-item">
        <a class="nav-link" href="browse.php">Browse Store</a>
      </li>
    </ul>
<ul class="navbar-nav mx-auto">
<li class="nav-item">
                <h2 style="color:white" ><b>The Baker's House</b></h2>
        </li>
</ul>
    <ul class="navbar-nav ml-auto">

<li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          User
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="profile.php">Profile</a>
 <a class="dropdown-item" href="past_orders.php">View Past Orders</a>
 <a class="dropdown-item" href="cart.php">View Cart</a>
 
      </li>
 <li class="nav-item">
 <form class="form-inline my-2 my-lg-0" method="post" action="<?php echo htmlentities($_SERVER['PHP_SELF']); ?>" align='right'>
        <button class="btn btn-dark" name="logout" type='submit'>Logout</button>
</form>
    </li>

    </ul>
</div>
</nav>
 <div class="container-fluid h-100">
 <div class="row justify-content-center h-100">
<div class="col-6  hidden-md-down" id="cartimage"> 
<div class="centered"><h1 style="color:white;"></h1></div> 
</div>

<div class="col-6 hidden-md-down">  
<br><br><br>
<?php
$sql="select name from registration where email='$useremail'";

$result=mysqli_query($conn,$sql);
$arraytemp=mysqli_fetch_array($result);
$name=$arraytemp['name'];



echo "<h5 style='text-align:center;'>Hey $name! Check out your cart below :)</h5>"; ?><br><br><br>
  <div class="row">
    <div class="col-md-4">
     <h5 style='text-align:center;'><b> Cart Items: </b></h5>  
	  </div>
    <div class="col-md-4">
      <h5 style='text-align:center;'><b>Qty:</b></h5>
    </div>
	<div class="col-md-4">
      <h5 style='text-align:center;'><b>Price</b></h5>
    </div>
  </div><br>

 <div class="row">
 <div class="col-md-4">
  <h6 style='text-align:center;'>
  <?php
 if($c1!=0){
  $no=1;
 echo "Belgian Chocolate";
 }
 ?></h6>
 </div>
 <div class="col-md-4">
 <h6 style='text-align:center;'><?php
 if($c1!=0){
 
  echo "$c1";
 }
 ?></h6>
 </div>
 <div class="col-md-4">
  <h6 style='text-align:center;'><?php
 if($c1!=0){
 
 $price1=$c1*399;
  echo "$price1";
 }
 ?></h6>
 </div>
 </div>

  
 <div class="row">
 <div class="col-md-4">
 <h6 style='text-align:center;'><?php
 if($c2!=0){
  $no=1;
 echo "Red Velvet";
 }
 ?>
 
 </h6>
 </div>
 <div class="col-md-4">
  <h6 style='text-align:center;'>
  <?php
 if($c2!=0){
 
  echo "$c2";
 }
 ?>
  </h6>
 </div>
 <div class="col-md-4">
  <h6 style='text-align:center;'>
  
  <?php
 if($c2!=0){
 
 $price2=$c2*699;
  echo "$price2";
 }
 ?></h6>
 </div>
 </div>

<div class="row">
 <div class="col-md-4">
  <h6 style='text-align:center;'>
  <?php
 if($c3!=0){
  $no=1;
 echo "Cheesecake";
 }
 ?></h6>
 </div>
 <div class="col-md-4">
 <h6 style='text-align:center;'><?php
 if($c3!=0){
 
  echo "$c3";
 }
 ?></h6>
 </div>
 <div class="col-md-4">
  <h6 style='text-align:center;'><?php
 if($c3!=0){
 
 $price3=$c3*499;
  echo "$price3";
 }
 ?></h6>
 </div>
 </div>


 <div class="row">
 <div class="col-md-4">
  <h6 style='text-align:center;'>
  <?php
 if($d1!=0){
  $no=1;
 echo "Rainbow Surprise";
 }
 ?></h6>
 </div>
 <div class="col-md-4">
 <h6 style='text-align:center;'><?php
 if($d1!=0){
 
  echo "$d1";
 }
 ?></h6>
 </div>
 <div class="col-md-4">
  <h6 style='text-align:center;'><?php
 if($d1!=0){
 
 $price4=$d1*99;
  echo "$price4";
 }
 ?></h6>
 </div>
 </div>

 <div class="row">
 <div class="col-md-4">
  <h6 style='text-align:center;'>
  <?php
 if($d2!=0){
  $no=1;
 echo "Midnight Beauty";
 }
 ?></h6>
 </div>
 <div class="col-md-4">
 <h6 style='text-align:center;'><?php
 if($d2!=0){
 
  echo "$d2";
 }
 ?></h6>
 </div>
 <div class="col-md-4">
  <h6 style='text-align:center;'><?php
 if($d2!=0){
 
 $price5=$d2*119;
  echo "$price5";
 }
 ?></h6>
 </div>
 </div>


 <div class="row">
 <div class="col-md-4">
  <h6 style='text-align:center;'>
  <?php
 if($d3!=0){
  $no=1;
 echo "Original Sin";
 }
 ?></h6>
 </div>
 <div class="col-md-4">
 <h6 style='text-align:center;'><?php
 if($d3!=0){
 
  echo "$d3";
 }
 ?></h6>
 </div>
 <div class="col-md-4">
  <h6 style='text-align:center;'><?php
 if($d3!=0){
 
 $price6=$d3*129;
  echo "$price6";
 }
 ?></h6>
 </div>
 </div>


 <div class="row">
 <div class="col-md-4">
  <h6 style='text-align:center;'>
  <?php
 if($cr1!=0){
  $no=1;
 echo "Butter Beast";
 }
 ?></h6>
 </div>
 <div class="col-md-4">
 <h6 style='text-align:center;'><?php
 if($cr1!=0){
 
  echo "$cr1";
 }
 ?></h6>
 </div>
 <div class="col-md-4">
  <h6 style='text-align:center;'><?php
 if($cr1!=0){
 
 $price7=$cr1*79;
  echo "$price7";
 }
 ?></h6>
 </div>
 </div>


 <div class="row">
 <div class="col-md-4">
  <h6 style='text-align:center;'>
  <?php
 if($cr2!=0){
  $no=1;
 echo "Choco Sprinkles";
 }
 ?></h6>
 </div>
 <div class="col-md-4">
 <h6 style='text-align:center;'><?php
 if($cr2!=0){
 
  echo "$cr2";
 }
 ?></h6>
 </div>
 <div class="col-md-4">
  <h6 style='text-align:center;'><?php
 if($cr2!=0){
 
 $price8=$cr2*99;
  echo "$price8";
 }
 ?></h6>
 </div>
 </div>


 <div class="row">
 <div class="col-md-4">
  <h6 style='text-align:center;'>
  <?php
 if($cr3!=0){
  $no=1;
 echo "Peanut Butter and Jelly";
 }
 ?></h6>
 </div>
 <div class="col-md-4">
 <h6 style='text-align:center;'><?php
 if($cr3!=0){
 
  echo "$cr3";
 }
 ?></h6>
 </div>
 <div class="col-md-4">
  <h6 style='text-align:center;'><?php
 if($cr3!=0){
 
 $price9=$cr3*129;
  echo "$price9";
 }
 ?></h6>
 </div>
 </div>


 <div class="row">
 <div class="col-md-4">
  <h6 style='text-align:center;'>
  <?php
 if($cu1!=0){
  $no=1;
 echo "Funfetti";
 }
 ?></h6>
 </div>
 <div class="col-md-4">
 <h6 style='text-align:center;'><?php
 if($cu1!=0){
 
  echo "$cu1";
 }
 ?></h6>
 </div>
 <div class="col-md-4">
  <h6 style='text-align:center;'><?php
 if($cu1!=0){
 
 $price10=$cu1*59;
  echo "$price10";
 }
 ?></h6>
 </div>
 </div>


 <div class="row">
 <div class="col-md-4">
  <h6 style='text-align:center;'>
  <?php
 if($cu2!=0){
  $no=1;
 echo "Salted Caramel";
 }
 ?></h6>
 </div>
 <div class="col-md-4">
 <h6 style='text-align:center;'><?php
 if($cu2!=0){
 
  echo "$cu2";
 }
 ?></h6>
 </div>
 <div class="col-md-4">
  <h6 style='text-align:center;'><?php
 if($cu2!=0){
 
 $price11=$cu2*89;
  echo "$price11";
 }
 ?></h6>
 </div>
 </div>


 <div class="row">
 <div class="col-md-4">
  <h6 style='text-align:center;'>
  <?php
 if($cu3!=0){
  $no=1;
 echo "Oreo Blast";
 }
 ?></h6>
 </div>
 <div class="col-md-4">
 <h6 style='text-align:center;'><?php
 if($cu3!=0){
 
  echo "$cu3";
 }
 ?></h6>
 </div>
 <div class="col-md-4">
  <h6 style='text-align:center;'><?php
 if($cu3!=0){
 
 $price12=$cu3*99;
  echo "$price12";
 }
 ?></h6>
 </div>
 </div>


  
 
 
 <div class="row">
 <div class="col-md-4">
 <h5 style='text-align:center;'><?php
  if($no!=0){
  echo "TOTAL:";
  }
  ?></h5>
 </div>
 <div class="col-md-4">
 
 </div>
 <div class="col-md-4">
  <h6 style='text-align:center;'>
  <?php
  if($no!=0){
  $total=$price1+$price2+$price3+$price4+$price5+$price6+$price7+$price8+$price9+$price10+$price11+$price12;
    echo "Rs $total";
  }
  ?>
  </h6>
 </div>
 </div>
 <br><br>


 <div class="row">


 <div class="col-md-4" align="center">
  
 <form method="POST" action="<?php echo htmlentities($_SERVER['PHP_SELF']); ?>">
  <button type="submit" class="btn btn-primary" name="empty" align="center" >Empty Cart
  </button>
  </form>
   </div>
   <div class="col-md-4">
 
 </div>

 <div class="col-md-4" align="center">
 <form method="post" action="<?php echo htmlentities($_SERVER['PHP_SELF']); ?>">
  <button type="submit" class="btn btn-primary" name="checkout" align="center" href="website_homepage.php">Proceed To Checkout</button>
  </form>
   </div>
   </div>



</div>

</body>
</html>
      