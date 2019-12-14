<?php
session_start();
include "connection.php";
if(isset($_POST['sign-in'])){
$username=$_POST['username'];
$password=$_POST['password'];
    $_SESSION['username']=$username; 
    if (empty($username)){
          echo"\nusername is required\n"."<br>";
      }
    if (empty($password)) {
       echo"\npassword is required"."<br>";
      }
    $query = "SELECT * FROM register WHERE username='$username' and passwordd='$password'";
    $result=$conn->query($query);
    if($result->num_rows==1){
     header('location:dashboard.php');   
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
    <link rel="stylesheet" type="text/css" href="css/index.css">
</head>
<body>
    <div class="main">
       
        <h3>Welcome</h3>
        <div class="first">
            <form method="post">
                <input type="text" class="form-control" name='username' placeholder="Enter username"><br>
                <input type="password" class="form-control" id="exampleInputPassword1" name='password'placeholder="Password">
                <a href="forgotpassword.php"><small class="form-text text-muted"> Forgot Password</small></a><br>
                <input type="submit" name="sign-in" class="btn btn-primary btn-lg btn-block" value="sign-in"/><br>
                <a href="registrationpage.php"><small class="form-text text-muted"> Not Registered? <strong>Create an account</strong></small></a>

            </form>

        </div>

    </div>


    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>