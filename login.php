<?php
session_start();
$host="localhost";
$user="root";
$password="";

$db="the_bakers_house";


$conn=mysqli_connect($host,$user,$password);
mysqli_select_db($conn,$db);


if(isset($_POST['submit'])){
  
  
  $emaillogin=$_POST['email'];
  $passlogin=$_POST['pass'];
  
 


  $sql="select password from registration where email='$emaillogin'";

  $result=mysqli_query($conn,$sql);
  $arraypass=mysqli_fetch_array($result);
  $pass=$arraypass['password'];
 

  if(mysqli_num_rows($result)==1){

    
    $passcheck=password_verify($passlogin,$pass);

    if($passcheck){
   
      $_SESSION['email']=$emaillogin;
    header('location: website_homepage.php');
    }
  }
  else{
    ?>
    <script>alert("email and/or password incorrect");</script>";
    <?php
  }

}

?>



<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
<style>
html,body {
  height: 100%;
}
#cupcake {
  height: 100%;
  background:transparent url('http://www.simpleimageresizer.com/_uploads/photos/92913e4e/michaela-baum-VnM6_liIRJ0-unsplash_1_1000x700.jpg') no-repeat center center /cover;
}
.profile-input-field{
padding-left:50px;
}
</style>

</head>
<body>

<div class="container-fluid h-100">
  <div class="row justify-content-center h-100">
    <div class="col-10 col-sm-10 col-md-10 col-lg-8 col-xl-8" id="cupcake">
     
    </div>
    <div class="col-4 hidden-md-down">
	<br><br><br><br>
	<h3 align="center"> Login </h3><br><br>
	<div class="profile-input-field">
    <form method="post" action="<?php echo htmlentities($_SERVER['PHP_SELF']); ?>">
	<div class="form-group">
  <label>Email:</label><span class = "error"> 
  
        <input type="text" class="form-control" name="email" style="width:20em;" placeholder="abc@email.com" required />
          </div>
        
    <div class="form-group">
	<label>Password:</label><span class = "error">
        <input type="password" class="form-control" name="pass" style="width:20em;" placeholder="password" required  />
          </div>
    <br><br><br>
        <div class="form-group" align="middle">
            <button type="submit" name='submit' class="btn btn-primary" align="center" style="width:10em; margin:0;">Sign in</button>
            <center>
             <a href="register.php">Don't have an account? Register now</a>
           </center>

          </div>
		
    </form>
    </div>
  </div>
</div>
</body>
</html>