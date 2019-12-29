<?php
session_start();
include "connection.php";
if(isset($_POST['sign-in'])){
$username=$_POST['username'];
$password=$_POST['password'];
// $email=$_POST['email'];
    $_SESSION['username']=$username; 
    // $_SESSION['email']=$email;  

    if (empty($username)){
          echo"\nusername is required\n"."<br>";
      }
    if (empty($password)) {
       echo"\npassword is required"."<br>";
      }
    $query = "SELECT * FROM register WHERE username='$username' and passwordd='$password'";
    $result=$conn->query($query);
    if($result->num_rows==1){
     header('location:takequiz2.php');   
      }
      else
      {
        echo "<script type='text/javascript'>alert('User Name Or Password Invalid!')</script>";
    }    

}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Sign In</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <!-- <link rel="stylesheet" type="text/css" href="css/forgotpassword.css"> -->
      <!-- Font Awesome -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<!-- Bootstrap core CSS -->
<link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" rel="stylesheet">
<!-- Material Design Bootstrap -->
<link href="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.3.2/css/mdb.min.css" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Lilita+One&display=swap" rel="stylesheet">
    <!-- <link rel="stylesheet" type="text/css" href="index.css"> -->
    <link rel="stylesheet" type="text/css" href="css/reg.css">
</head>
<body class='body'>
    <div class="card card2">
    <div class="card-block">

        <!--Header-->
        <div class="form-header purple-gradient text1">
            <h3><i class="fa fa-user"></i> 
            <h3>Sign In</h3>
        </div>
        <form method="post">
        <!--Body-->
        <div class="md-form">
        <input type="text" class="form-control" name='username' placeholder="Enter username">
        </div>
        <div class="md-form">
        <input type="password" class="form-control" id="exampleInputPassword1" name='password'placeholder="Password">
        </div>
        <a href="forgotpassword.php"><small class="form-text text-muted"> Forgot Password</small></a><br>
        <div class="text-center">
            <input type="submit"  class="btn btn-rounded purple-gradient btn-lg btn-block"name='sign-in' value="Sign-in">
            <a href="registrationpage.php"><small class="form-text text-muted">  Not Registered? <strong>Create an account</strong></small></a>
            <hr>
        </div>
</form>
    </div>
</div>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>