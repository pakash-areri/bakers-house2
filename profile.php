

<!DOCTYPE html>
<html lang="en-US">
  <head>
  <title>The Baker's House</title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script> <style>
  .card {
      box-shadow: 0 0 10px 0 rgba(100, 100, 100, 0.26);
	  color:#5c472a;
    }
	h4{
		font-family:Lucida Calligraphy;
	}
	label{
		font-family:Lucida Calligraphy;
	}
	h2{
		font-family:Algerian;
	}
  </style>
  </head>
  
  <body style="background-image: url('http://www.simpleimageresizer.com/_uploads/photos/b85e9004/miti-qYreP9QOdrk-unsplash_1_1680x1100.jpg');">

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





    if(isset($_POST['update'])){
    echo"submit";
      if(isset($_POST['nhadd'])){
        $nhadd=$_POST['nhadd'];
        $sql="UPDATE registration SET hadd='$nhadd' where email='$useremail'";
        mysqli_query($conn,$sql);
        echo "home";
      }
      if(isset($_POST['ndadd'])){
       $ndadd=$_POST['ndadd'];
       $sql="UPDATE registration SET dadd='$ndadd'  where email='$useremail'";
       mysqli_query($conn,$sql);
       echo "home";
     }
     if(isset($_POST['phone'])){
       $nhadd=$_POST['phone'];
       $sql="UPDATE registration SET phone='$nphone'  where email='$useremail'";
       mysqli_query($conn,$sql);
       echo "home";
     }
    
    
    }

    $sql="select * from registration where email='$useremail'";
 

    $result=mysqli_query($conn,$sql);
    $arraytemp=mysqli_fetch_array($result);
    $name1=$arraytemp['name'];
    $hadd1=$arraytemp['hadd'];
    $dadd1=$arraytemp['dadd'];
    $phone1=$arraytemp['phone'];

     ?>







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
    <div class="col-4 hidden-md-down" id="userprofile">
     <br><br>
	<div id="profilecard" class="card" style="width: 22rem;">
	<img class="card-img-top" src="http://www.simpleimageresizer.com/_uploads/photos/b85e9004/userprofile_100x100.png" alt="User Profile">
	<div class="card-body">
    <h4 class="card-title"><b>Profile</b></h4>
    <p class="card-text">
	<?php echo "<h5><i>Name:</i></h5> $name1 <br> <h5><i>Email:</i></h5> $useremail <br> <h5><i>Home Address:</i></h5> $hadd1 <br> <h5><i>Delivery Address:</i></h5> $dadd1 <br> <h5><i>Phone:</i></h5> $phone1";
	?>
	</p>
	</div>
	</div>
    </div>
	
    <div class="col-10 col-sm-10 col-md-10 col-lg-8 col-xl-8">
	<br><br><br><br><br>
	<div class="card" style="width: 48rem;">
  <div class="card-body">
    <p class="card-text">
	<form method="post" action="<?php echo htmlentities($_SERVER['PHP_SELF']); ?>">
	<div class="form-group col-md-8">
      <label><b>Home Address</b></label>
      <input type="text" class="form-control" name="nhadd" >
    </div>
	<div class="form-group col-md-8">
      <label><b>Delivery Address</b></label>
      <input type="text" class="form-control" name="ndadd"  >
    </div>
	<div class="form-group col-md-6">
      <label><b>Phone</b></label>
      <input type="text" class="form-control" name="nphone"  >
    </div>

    </p><br><br>
	<div align="center">
  <button type="submit" name="update" class="btn btn-primary"  align="center">Update</button>
	</div>
	</form>
	
  </div>
</div>
	</div>
</div>

  </body>
  
</html?