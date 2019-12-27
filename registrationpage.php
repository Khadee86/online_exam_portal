<?php
include "connection.php";
//use once and comment after;
// $sql = "CREATE TABLE register (
//   ID INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
//   firstname VARCHAR(30) NOT NULL,
//   lastname VARCHAR(30) NOT NULL,
//   email VARCHAR(50),
//   stud_id VARCHAR(20),
//   stu_level VARCHAR(20),
//   username VARCHAR(30),
//   passwordd VARCHAR(20),
//   photo VARCHAR(100),
//   reg_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
//   )";
  
  // if ($conn->query($sql) === TRUE) {
  //     echo "Table register created successfully";
  // } else {
  //     echo "Error creating table: " . $conn->error;
  // }
    if(isset($_POST['submit'])){
      $fname=$_POST['first_name'];
      $lname=$_POST['last_name'];
      $email=$_POST['email'];
      $stud=$_POST['stud_id'];
      $stu_level=$_POST['stud_level'];
      $username=$_POST['username'];
      $password=$_POST['password'];
      // $password=md5($password);

      // if (empty($firstname)){
      //   echo"\nfirstname is required\n"."<br>";
      // }
      // if (empty($lastname)){
      //   echo"\nlastname is required\n"."<br>";
      // }
      if (empty($username)){
        echo"\nusername is required\n"."<br>";
      }
    if (empty($email)){
      echo"\nemail is required\n"."<br>";
      }
    if (empty($stud)){
    echo"\nID is required"."<br>";
     }
    if (empty($password)) {
      echo"\npassword is required"."<br>";
      }
        $sqli="SELECT * from register where username='$username' ";
        $result=$conn->query($sqli);
        if($result->num_rows==1){
            echo"username is already taken"."<br>";
        }
        else{
          $mysqli="INSERT INTO register(firstname,lastname,email,stud_id,stu_level,username,passwordd)VALUES('$fname','$lname','$email','$stud','$stu_level','$username','$password')";
          
          if ($conn->query($mysqli) === TRUE){
              echo " record created successfully"."<br>";
              header('location:login.php');
                }   
              else {
                    echo "Try inserting again"."<br>";
                   }
            }
    }
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Registration Page</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <!-- <link rel="stylesheet" type="text/css" href="css/forgotpassword.css"> -->
      <!-- Font Awesome -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<!-- Bootstrap core CSS -->
<link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" rel="stylesheet">
<!-- Material Design Bootstrap -->
<link href="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.3.2/css/mdb.min.css" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Lilita+One&display=swap" rel="stylesheet">
    <!-- <link rel="stylesheet" type="text/css" href="css/registrationpage.css"> -->
    <link rel="stylesheet" type="text/css" href="css/reg.css">
    
</head>
<body class='body'>
<div class="card card2">
    <div class="card-block">

        <!--Header-->
        <div class="form-header purple-gradient text1">
            <h3><i class="fa fa-user"></i> 
            <h3>Sign Up</h3>
        </div>
        <form method="post">
        <!--Body-->
        <div class="md-form">
            <input type="text" class="form-control" placeholder="First name" name='first_name'>
        </div>
        <div class="md-form">
        <input type="text" class="form-control" placeholder="Last name" name='last_name'>
        </div>
        <div class="md-form">
        <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name='email'placeholder="Enter email">
        <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
        </div>
        <div class="md-form">
        <input type="text" class="form-control" name='stud_id' placeholder="Enter ID Number">
        </div>
        <div class="md-form">
        <select class="browser-default custom-select custom-select-lg mb-3" name='stud_level'>
                <option disabled selected>Level</option>
                        <option>100</option>
                        <option>200</option>
                        <option>300</option>
                        <option>400</option>
                        <option>500</option>
                        <option>600</option>
              </select>
        </div>
        <div class="md-form">
        <input type="text" class="form-control"  aria-describedby="emailHelp" name='username'placeholder="Enter username">
        </div>
        <div class="md-form">
        <input type="password" class="form-control"  aria-describedby="emailHelp" name='password'placeholder="Enter password">
        </div>
        <div class="text-center">
            <input type="submit"  class="btn btn-rounded purple-gradient btn-lg btn-block"name='submit' value="Sign-up">
            <a href="login.php"><small class="form-text text-muted"> Already have an account? <strong>Sign-In</strong></small></a>
            <hr>
        </div>
</form>
    </div>
</div>
</body>
</html>