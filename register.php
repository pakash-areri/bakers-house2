


<!DOCTYPE html>
<html lang="en-US">
  <head>
  <title>The Baker's House</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <style>
  html,body {
  height: 100%;
}
.error {color: #FF0000;} input[type=submit] { border: 2px solid blue; border-radius: 10px; padding: 10px;
} input[type=text]{ width: 50%;
} input[type=number]{ width: 50%;
}
.centered {
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
}
  #registerimage {
  height: 100%;
  background:transparent url('http://www.simpleimageresizer.com/_uploads/photos/92913e4e/jonathan-taylor-2q8P-sEZjLk-unsplash_500x700.jpg') no-repeat center center /cover;
}
  </style>
  </head>
 <body>



 <?php


include("dbconn.php");




if(isset($_POST['submit'])){ 
  echo "inside first if";

  $name = mysqli_real_escape_string($conn,$_POST["name"]);
$email =mysqli_real_escape_string($conn,$_POST["email"]);
$hadd = mysqli_real_escape_string($conn,$_POST["hadd"]);
$dadd = mysqli_real_escape_string($conn,$_POST["dadd"]);
$phone =mysqli_real_escape_string($conn,$_POST["phone"]);
$pass1 =mysqli_real_escape_string($conn,$_POST["pass1"]);
$pass2 =mysqli_real_escape_string($conn,$_POST["pass2"]);

  $pass=password_hash($pass1, PASSWORD_BCRYPT);
  $cpass=password_hash($pass2, PASSWORD_BCRYPT);


$email_query=" select * from registration where email ='$email'";
$query= mysqli_query($conn, $email_query);

$emailcount=mysqli_num_rows($query);

if($emailcount>0)
{
  
  
  
  ?>
  <script>
  alert("Account with this email already exists")
  </script>
  <?php
}
else{
  if($pass1==$pass2)
  {
    $insertquery=" INSERT INTO registration(name, email, hadd, dadd, phone, password, cpassword) VALUES('$name','$email','$hadd','$dadd','$phone','$pass','$cpass') " ;
$iquery=mysqli_query($conn,$insertquery);

$insertcart="INSERT INTO cart(email,c1,c2,c3,d1,d2,d3,cr1,cr2,cr3,cu1,cu2,cu3) VALUES('$email',0,0,0,0,0,0,0,0,0,0,0,0)";
$cartquery=mysqli_query($conn,$insertcart);
if($iquery){
  ?>
  <script>
  alert("User added successfully")
  </script>
  <?php
  header('location: login.php');
}

  }else{
    ?>
  <script>
  alert("The Passwords do not match")
  </script>
  <?php
  }
}

  }


?>







 <div class="container-fluid h-100">
 <div class="row justify-content-center h-100">
<div class="col-4 hidden-md-down" id="registerimage"> 
<div class="centered"><h1 style="color:white;">Register</h1></div> 
</div>

<div class="col-10 col-sm-10 col-md-10 col-lg-8 col-xl-8">  
<br><br><br>
<p><span class = "error">* required field.</span></p> 

<form method = "POST" action = "<?php echo htmlentities($_SERVER['PHP_SELF']); ?>" >
  <div class="form-row">
    <div class="form-group col-md-6">
      <label><b>Name</b></label>
      

      <span class = "error">* </span>
      <input type="text" class="form-control" name="name" id="name" required /> 
      
    </div>
    <div class="form-group col-md-6">
      <label><b>Email</b></label><span class = "error">* </span>
      <input type="email" class="form-control" name="email"  id="email" placeholder="abc@email.com"required />
    </div>
  </div>
  <div class="form-group">
    <label><b>Home Address</b></label>
    <span class = "error">* </span>
    <input type="text" class="form-control" name="hadd" id="hadd" required />
  </div>
  <div class="form-group">
    <label><b>Delivery Address</b></label>
    <span class = "error">* </span>
    <input type="text" class="form-control" name="dadd" id="dadd" required />
  </div>
  <div class="form-row">
    <div class="form-group col-md-6">
      <label><b>Phone</b></label>
      <span class = "error">* </span>
      <input type="text" class="form-control" name="phone" id="phone"required />
    </div>
  </div>
  <div class="form-row">
    <div class="form-group col-md-6">
      <label><b>Set Password</b></label>
      <span class = "error">* </span>
      <input type="password" class="form-control" name="pass1" id="pass1" required />
     
    </div>
	<div class="form-group col-md-6">
      <label><b>Confirm Password</b></label>
      <span class = "error">*</span>
      <input type="password" class="form-control" name="pass2" id="pass2" required />
    </div>
  </div><br>
  <div align="center">
  <button type="submit" name="submit" class="btn btn-primary" align="center">Register</button>
  <center>
             <a href="login.php">Already have an account? Sign in</a>
           </center>
		   </div>
</form>

</div>


</body>
</html>
     