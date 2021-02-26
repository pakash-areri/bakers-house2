<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sessions</title>
 
    <!-- CSS only -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  <style>
.card {
      box-shadow: 0 0 10px 0 rgba(100, 100, 100, 0.26);
    }

h2{
	font-family:Algerian;
}
h3{
	font-family:Cooper Black;
}
</style>

</head>
<body>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNavDropdown">
    <ul class="navbar-nav">
      <li class="nav-item active">
        <a class="nav-link" href="website_homepage.php">Home<span class="sr-only">(current)</span></a>
      </li>
	  <li class="nav-item">
        <a class="nav-link" href="browse.php">Browse Store</a>
      </li>
    </ul>
	<ul class="navbar-nav mx-auto">
		<li class="nav-item">
                <h2 style="color:white"><b>The Baker's House</b></h2>
        </li>
	</ul>
        <ul class="navbar-nav ml-auto">
	
	<li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          User
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="profile.php">Profile</a>
		  <a class="dropdown-item" href="profile.php">View Past Orders</a>
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
<center>
<br><br><br>



<?php
session_start();
include('dbconn.php');
$useremail=$_SESSION['email'];
$sql="select * from orders where email='$useremail' order by ID DESC";

    $result=mysqli_query($conn,$sql);
   
    if(isset($_POST['logout'])){
      // remove all session variables
    session_unset();
    
    // destroy the session
    session_destroy();
    
    header('location: login.php');
    }
    

?>








<h3 style="text-align:center"> Your Past Orders</h3>
<br>
	
  <?php
  while($rows=mysqli_fetch_array($result))
  {
    $date=$rows['date_time'];
    $c1=$rows['c1'];
    $c2=$rows['c2'];
    $c3=$rows['c3'];
    $d1=$rows['d1'];
    $d2=$rows['d2'];
    $d3=$rows['d3'];
    $cr1=$rows['cr1'];
    $cr2=$rows['cr2'];
    $cr3=$rows['cr3'];
    $cu1=$rows['cu1'];
    $cu2=$rows['cu2'];
    $cu3=$rows['cu3'];
    $price1=$price2=$price3=$price4=$price5=$price6=$price7=$price8=$price9=$price10=$price11=$price12=0;
    
  ?>
  
  <div class="card" style="width: 48rem;"><br>

	<div class="card-body">
    <p class="card-text">
	<div class="row">
	<div class="col-md-4">
	<h6><b><?php echo" Date: $date"?>  </b></h6>
	</div>
	</div>
  
<br>
	<div class="row">
    <div class="col-md-4">
     <h6 style='text-align:center;'><b> Cart Items: </b></h6>  
	  </div>
    <div class="col-md-4">
      <h6 style='text-align:center;'><b>Qty:</b></h6>
    </div>
	<div class="col-md-4">
      <h6 style='text-align:center;'><b>Price</b></h6>
    </div>
  </div>
  
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

  </div>
</div>
<br>
<?php
  }
?>
</center>

</html>