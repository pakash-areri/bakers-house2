<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sessions</title>
 
    <!-- CSS only -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
<style>
.card {
      box-shadow: 0 0 10px 0 rgba(100, 100, 100, 0.26);
    }
.card:hover{
	transform:scale(1.1);
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

include('dbconn.php');



if(isset($_POST['logout'])){
    // remove all session variables
  session_unset();
  
  // destroy the session
  session_destroy();
  
  header('location: browse.php');
  }
  

if(isset($_POST['c1'])){
    if(isset($useremail)){
    $sql="select c1 from cart where email='$useremail'";

    $result=mysqli_query($conn,$sql);
    $arraytemp=mysqli_fetch_array($result);
    $temp=$arraytemp['c1'];

    $temp=$temp+1;

    $addc1="UPDATE cart SET c1='$temp' WHERE email='$useremail'";
    mysqli_query($conn,$addc1);
    ?>
    <script>
    alert("One (1) Belgian Chocolate Cake Added to Cart")
    </script>
    <?php
    }
    else{
        ?>
    <script>
    alert("Please Login to add items to cart")
    </script>
    <?php 
    }
}

if(isset($_POST['c2'])){
    if(isset($useremail)){
    $sql="select c2 from cart where email='$useremail'";

    $result=mysqli_query($conn,$sql);
    $arraytemp=mysqli_fetch_array($result);
    $temp=$arraytemp['c2'];

    $temp=$temp+1;

    $addc2="UPDATE cart SET c2='$temp' WHERE email='$useremail'";
    mysqli_query($conn,$addc2);
    ?>
    <script>
    alert("One (1) Red Velvet Cake Added to Cart")
    </script>
    <?php
    }
    else{
        ?>
    <script>
    alert("Please Login to add items to cart")
    </script>
    <?php 
    }
}
if(isset($_POST['c3'])){
    if(isset($useremail)){
    $sql="select c3 from cart where email='$useremail'";

    $result=mysqli_query($conn,$sql);
    $arraytemp=mysqli_fetch_array($result);
    $temp=$arraytemp['c3'];

    $temp=$temp+1;

    $addc3="UPDATE cart SET c3='$temp' WHERE email='$useremail'";
    mysqli_query($conn,$addc3);
    ?>
    <script>
    alert("One (1) Cheesecake Added to Cart")
    </script>
    <?php
    }
    else{
        ?>
    <script>
    alert("Please Login to add items to cart")
    </script>
    <?php 
    }
}
if(isset($_POST['d1'])){
    if(isset($useremail)){
    $sql="select d1 from cart where email='$useremail'";

    $result=mysqli_query($conn,$sql);
    $arraytemp=mysqli_fetch_array($result);
    $temp=$arraytemp['d1'];

    $temp=$temp+1;

    $addd1="UPDATE cart SET d1='$temp' WHERE email='$useremail'";
    mysqli_query($conn,$addd1);
    ?>
    <script>
    alert("One (1) Rainbow Surprise Added to Cart")
    </script>
    <?php
    }
    else{
        ?>
    <script>
    alert("Please Login to add items to cart")
    </script>
    <?php 
    }
}

if(isset($_POST['d2'])){
    if(isset($useremail)){
    $sql="select d2 from cart where email='$useremail'";

    $result=mysqli_query($conn,$sql);
    $arraytemp=mysqli_fetch_array($result);
    $temp=$arraytemp['d2'];

    $temp=$temp+1;

    $addd2="UPDATE cart SET d2='$temp' WHERE email='$useremail'";
    mysqli_query($conn,$addd2);
    ?>
    <script>
    alert("One (1) Midnight Beauty Added to Cart")
    </script>
    <?php
    }
    else{
        ?>
    <script>
    alert("Please Login to add items to cart")
    </script>
    <?php 
    }
}

if(isset($_POST['d3'])){
    if(isset($useremail)){
    $sql="select d3 from cart where email='$useremail'";

    $result=mysqli_query($conn,$sql);
    $arraytemp=mysqli_fetch_array($result);
    $temp=$arraytemp['d3'];

    $temp=$temp+1;

    $addd3="UPDATE cart SET d3='$temp' WHERE email='$useremail'";
    mysqli_query($conn,$addd3);
    ?>
    <script>
    alert("One (1) Original Sin Added to Cart")
    </script>
    <?php
    }
    else{
        ?>
    <script>
    alert("Please Login to add items to cart")
    </script>
    <?php 
    }
}

if(isset($_POST['cr1'])){
    if(isset($useremail)){
    $sql="select cr1 from cart where email='$useremail'";

    $result=mysqli_query($conn,$sql);
    $arraytemp=mysqli_fetch_array($result);
    $temp=$arraytemp['cr1'];

    $temp=$temp+1;

    $addcr1="UPDATE cart SET cr1='$temp' WHERE email='$useremail'";
    mysqli_query($conn,$addcr1);
    ?>
    <script>
    alert("One (1) Butter Beast Added to Cart")
    </script>
    <?php
    }
    else{
        ?>
    <script>
    alert("Please Login to add items to cart")
    </script>
    <?php 
    }
}

if(isset($_POST['cr2'])){
    if(isset($useremail)){
    $sql="select cr2 from cart where email='$useremail'";

    $result=mysqli_query($conn,$sql);
    $arraytemp=mysqli_fetch_array($result);
    $temp=$arraytemp['cr2'];

    $temp=$temp+1;

    $addcr2="UPDATE cart SET cr2='$temp' WHERE email='$useremail'";
    mysqli_query($conn,$addcr2);
    ?>
    <script>
    alert("One (1) Choco Sprinkles Added to Cart")
    </script>
    <?php
    }
    else{
        ?>
    <script>
    alert("Please Login to add items to cart")
    </script>
    <?php 
    }
}

if(isset($_POST['cr3'])){
    if(isset($useremail)){
    $sql="select cr3 from cart where email='$useremail'";

    $result=mysqli_query($conn,$sql);
    $arraytemp=mysqli_fetch_array($result);
    $temp=$arraytemp['cr3'];

    $temp=$temp+1;

    $addcr3="UPDATE cart SET cr3='$temp' WHERE email='$useremail'";
    mysqli_query($conn,$addcr3);
    ?>
    <script>
    alert("One (1) Peanut Butter & Jelly Added to Cart")
    </script>
    <?php
    }
    else{
        ?>
    <script>
    alert("Please Login to add items to cart")
    </script>
    <?php 
    }
}

if(isset($_POST['cu1'])){
    if(isset($useremail)){
    $sql="select cu1 from cart where email='$useremail'";

    $result=mysqli_query($conn,$sql);
    $arraytemp=mysqli_fetch_array($result);
    $temp=$arraytemp['cu1'];

    $temp=$temp+1;

    $addcu1="UPDATE cart SET cu1='$temp' WHERE email='$useremail'";
    mysqli_query($conn,$addcu1);
    ?>
    <script>
    alert("One (1) Funfetti Added to Cart")
    </script>
    <?php
    }
    else{
        ?>
    <script>
    alert("Please Login to add items to cart")
    </script>
    <?php 
    }
}


if(isset($_POST['cu2'])){
    if(isset($useremail)){
    $sql="select cu2 from cart where email='$useremail'";

    $result=mysqli_query($conn,$sql);
    $arraytemp=mysqli_fetch_array($result);
    $temp=$arraytemp['cu2'];

    $temp=$temp+1;

    $addcu2="UPDATE cart SET cu2='$temp' WHERE email='$useremail'";
    mysqli_query($conn,$addcu2);
    ?>
    <script>
    alert("One (1) Salted Caramel Added to Cart")
    </script>
    <?php
    }
    else{
        ?>
    <script>
    alert("Please Login to add items to cart")
    </script>
    <?php 
    }
}

if(isset($_POST['cu3'])){
    if(isset($useremail)){
    $sql="select cu3 from cart where email='$useremail'";

    $result=mysqli_query($conn,$sql);
    $arraytemp=mysqli_fetch_array($result);
    $temp=$arraytemp['cu3'];

    $temp=$temp+1;

    $addcu3="UPDATE cart SET cu3='$temp' WHERE email='$useremail'";
    mysqli_query($conn,$addcu3);
    ?>
    <script>
    alert("One (1) Oreo Blast Added to Cart")
    </script>
    <?php
    }
    else{
        ?>
    <script>
    alert("Please Login to add items to cart")
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
    <div class="container mt-4 mb-5">
 
    
        <form action="<?php echo htmlentities($_SERVER['PHP_SELF']); ?>" method="POST">
		<h3>Cakes</h3>
            <div class="row mt-5">
                <div class="col-4">
                    <div class="card" style="width: 18rem;">
                        <img src="https://thestayathomechef.com/wp-content/uploads/2016/06/The-Most-Amazing-Chocolate-Cake-Square-1.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Belgian Chocolate</h5>
                            <p class="card-text">Rs 399</p>
                            <button type="submit" name="c1" value="Belgian Chocolate" class="btn btn-primary">Add To Cart</button>
                        </div>
                    </div>
                </div>
 
                <div class="col-4">
                    <div class="card" style="width: 18rem;">
                        <img src="https://cdn.sallysbakingaddiction.com/wp-content/uploads/2019/02/red-velvet-cake-slice-2-225x225.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Red Velvet</h5>
                            <p class="card-text">Rs 699</p>
                            <button type="submit" name="c2" value="Red Velvet" class="btn btn-primary">Add To Cart</button>
                        </div>
                    </div>
                </div>
 
                <div class="col-4">
                    <div class="card" style="width: 18rem;">
                        <img src="https://images.sweetauthoring.com/recipe/9103_2054.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Cheesecake</h5>
                            <p class="card-text">Rs 499</p>
                            <button type="submit" name="c3" value="Cheesecake" class="btn btn-primary">Add To Cart</button>
                        </div>
                    </div>
                </div>
                
            </div>
			<br><br>
			<h3>Doughnuts</h3>
            <div class="row mt-5">
                <div class="col-4">
                    <div class="card" style="width: 18rem;">
                        <img src="http://www.simpleimageresizer.com/_uploads/photos/b85e9004/Rainbow_surprise_250x250.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Rainbow Surprise</h5>
                            <p class="card-text">Rs. 99</p>
                            <button type="submit" name="d1" value="Rainbow Surprise" class="btn btn-primary">Add To Cart</button>
                        </div>
                    </div>
                </div>
			
                <div class="col-4">
                    <div class="card" style="width: 18rem;">
                        <img src="http://www.simpleimageresizer.com/_uploads/photos/b85e9004/midnightbeaut_1_250x250.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Midnight Beauty</h5>
                            <p class="card-text">Rs. 119</p>
                            <button type="submit" name="d2" value="Midnight Beauty" class="btn btn-primary">Add To Cart</button>
                        </div>
                    </div>
                </div>
 
                <div class="col-4">
                    <div class="card" style="width: 18rem;">
                        <img src="http://www.simpleimageresizer.com/_uploads/photos/b85e9004/Original_sin_1_1_250x250.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Original Sin</h5>
                            <p class="card-text">Rs. 129</p>
                            <button type="submit" name="d3" value="Original Sin" class="btn btn-primary">Add To Cart</button>
                        </div>
                    </div>
                </div>
                
            </div>
			<br><br>
			<h3>Croissants</h3>
			<div class="row mt-5">
                <div class="col-4">
                    <div class="card" style="width: 18rem;">
                        <img src="http://www.simpleimageresizer.com/_uploads/photos/b85e9004/ke-vin-oCtl9WEP7Ig-unsplash_250x250.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Butter Beast</h5>
                            <p class="card-text">Rs. 79</p>
                            <button type="submit" name="cr1" value="Butter Beast" class="btn btn-primary">Add To Cart</button>
                        </div>
                    </div>
                </div>
 
                <div class="col-4">
                    <div class="card" style="width: 18rem;">
                        <img src="http://www.simpleimageresizer.com/_uploads/photos/b85e9004/anastasiia-ostapovych-JzUCh9XPFgk-unsplash_250x250.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Choco Sprinkles</h5>
                            <p class="card-text">Rs. 99</p>
                            <button type="submit" name="cr2" value="Choco Sprinkles" class="btn btn-primary">Add To Cart</button>
                        </div>
                    </div>
                </div>
 
                <div class="col-4">
                    <div class="card" style="width: 18rem;">
                        <img src="http://www.simpleimageresizer.com/_uploads/photos/b85e9004/pbj_250x250.png" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Peanut Butter & Jelly</h5>
                            <p class="card-text">Rs. 129</p>
                            <button type="submit" name="cr3" value="PB&J" class="btn btn-primary">Add To Cart</button>
                        </div>
                    </div>
                </div>
                
            </div>
			<br><br>
			<h3>Cupcakes</h3>
			<div class="row mt-5">
                <div class="col-4">
                    <div class="card" style="width: 18rem;">
                        <img src="http://www.simpleimageresizer.com/_uploads/photos/b85e9004/funfetti_1_225x225.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Funfetti</h5>
                            <p class="card-text">Rs. 59</p>
                            <button type="submit" name="cu1" value="Funfetti" class="btn btn-primary">Add To Cart</button>
                        </div>
                    </div>
                </div>
 
                <div class="col-4">
                    <div class="card" style="width: 18rem;">
                        <img src="http://www.simpleimageresizer.com/_uploads/photos/b85e9004/saltedcaramel_1_225x225.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Salted Caramel</h5>
                            <p class="card-text">Rs. 89</p>
                            <button type="submit" name="cu2" value="Salted Caramel" class="btn btn-primary">Add To Cart</button>
                        </div>
                    </div>
                </div>
 
                <div class="col-4">
                    <div class="card" style="width: 18rem;">
                        <img src="http://www.simpleimageresizer.com/_uploads/photos/b85e9004/oreo_1_225x225.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Oreo Blast</h5>
                            <p class="card-text">Rs. 99</p>
                            <button type="submit" name="cu3" value="Oreo Blast" class="btn btn-primary">Add To Cart</button>
                        </div>
                    </div>
                </div>
                
            </div>
        </form>
        
    </div>
 
    
    
    <!-- JS, Popper.js, and jQuery -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
</body>
</html>
