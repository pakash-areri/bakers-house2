<?php
session_start();
if(isset($_POST['logout'])){
  // remove all session variables
session_unset();

// destroy the session
session_destroy();

header('location: website_homepage.php');
}

if (session_id() == '') {

}
else{
  if(isset($_SESSION['email']))
  $useremail=$_SESSION['email'];
}

if(isset($_POST['login'])){
 
header('location: login.php');
}
if(isset($_SESSION['views']) && $_SESSION['views']<=4) 
    $_SESSION['views'] = $_SESSION['views']+1; 
else
    $_SESSION['views']=1; 
      
?>


<!DOCTYPE html>
<html lang="en-US">
<head>
  <title>The Baker's House</title>
<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

<style>
#demo{
	height:90%;
}
h2{
	font-family:Algerian;
}
.carousel-inner img {
    width: 100%;
    height: 100%;
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
        <a class="nav-link" href="#">Home<span class="sr-only">(current)</span></a>
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
<?php

if(isset($useremail)){?>
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
    <?php
}
    else{  ?>
    <li class="nav-item">
 <form class="form-inline my-2 my-lg-0" method="post" action="<?php echo htmlentities($_SERVER['PHP_SELF']); ?>" align='right'>
        <button class="btn btn-dark" name="login" type='submit'>Login</button>
</form>
    </li>
<?php
    }
?>
    </ul>
</div>
</nav>


<div id="demo" class="carousel slide" data-ride="carousel">
  <ul class="carousel-indicators">
    <li data-target="#demo" data-slide-to="0" class="active"></li>
    <li data-target="#demo" data-slide-to="1"></li>
    <li data-target="#demo" data-slide-to="2"></li>
  </ul>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="http://www.simpleimageresizer.com/_uploads/photos/b85e9004/umesh-soni-LDnmyOaA-ew-unsplash_1500x600.jpg" alt="CAKE" height="500">
      <div class="carousel-caption">
        <h3>Decadent Cakes</h3>
		<button type="button" class="btn btn-primary" action="browse.php" data-toggle="button" aria-pressed="false" autocomplete="off">
		Browse
		</button>
      </div>   
    </div>
    <div class="carousel-item">
      <img src="http://www.simpleimageresizer.com/_uploads/photos/b85e9004/sung-jin-cho-uPpgUrUU4AI-unsplash_1500x600.jpg" alt="DONUT" width="1100" height="500">
      <div class="carousel-caption">
        <h3>Scrumptious Croissants</h3>
		<button type="button" class="btn btn-primary" action="browse.php" data-toggle="button" aria-pressed="false" autocomplete="off">
		Browse
		</button>
      </div>   
    </div>
    <div class="carousel-item">
      <img src="http://www.simpleimageresizer.com/_uploads/photos/b85e9004/wafflewebsite_1500x600.jpg" alt="WAFFLE" width="1100" height="500">
      <div class="carousel-caption">
        <h3>Delicious Waffles</h3>
		<button type="button" class="btn btn-primary" action="browse.php" data-toggle="button" aria-pressed="false" autocomplete="off">
		Browse
		</button>
      </div>   
    </div>
  </div>
  <a class="carousel-control-prev" href="#demo" data-slide="prev">
    <span class="carousel-control-prev-icon"></span>
  </a>
  <a class="carousel-control-next" href="#demo" data-slide="next">
    <span class="carousel-control-next-icon"></span>
  </a>
</div>


  

</body>
</html>