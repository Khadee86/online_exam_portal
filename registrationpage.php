<?php
include "connection.php";
//use once and comment after;
// $sql = "CREATE TABLE register (
//   ID INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
//   firstname VARCHAR(30) NOT NULL,
//   lastname VARCHAR(30) NOT NULL,
//   email VARCHAR(50),
//   stud_id VARCHAR(20),
//   user_role VARCHAR(20),
//   stu_level VARCHAR(20),
//   username VARCHAR(30),
//   passwordd VARCHAR(20),
//      photo VARCHAR(20),
//   reg_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
//   )";
  
//   if ($conn->query($sql) === TRUE) {
//       echo "Table register created successfully";
//   } else {
//       echo "Error creating table: " . $conn->error;
//   }
    if(isset($_POST['submit'])){
      $fname=$_POST['first_name'];
      $lname=$_POST['last_name'];
      $email=$_POST['email'];
      $stud=$_POST['stud_id'];
      $role=$_POST['role'];
      $stu_level=$_POST['stud_level'];
      $username=$_POST['username'];
      $password=$_POST['password'];
      // $password=md5($password);

      if (empty($firstname)){
        echo"\nfirstname is required\n"."<br>";
      }
      if (empty($lastname)){
        echo"\nlastname is required\n"."<br>";
      }
      if (empty($username)){
        echo"\nusername is required\n"."<br>";
      }
    if (empty($email)){
      echo"\nemail is required\n"."<br>";
      }
      if (empty($role)){
        echo"\nuser role is required\n"."<br>";
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
          $mysqli="INSERT INTO register(firstname,lastname,email,stud_id,user_role,stu_level,username,passwordd)VALUES('$fname','$lname','$email','$stud','$role','$stu_level','$username','$password')";
          
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
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css">
<!-- Bootstrap core CSS -->
<link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet">
<!-- Material Design Bootstrap -->
<link href="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.8.11/css/mdb.min.css" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Lilita+One&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="css/registrationpage.css">
</head>
<body>
    <div class="main">
        <h3>Create Account</h3> <br>
        <div class="first">
            <form method="post">
                <input type="text" class="form-control" placeholder="First name" name='first_name'> <br>
                <input type="text" class="form-control" placeholder="Last name" name='last_name'><br>
                <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name='email'placeholder="Enter email">
                <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small><br>
                <input type="text" class="form-control" name='stud_id' placeholder="Enter ID Number"><br>
                <div class=" mb-3">
                      <div class="custom-file">
                          <input name='file'type="file" class="custom-file-input" id="inputGroupFile02">
                          <label class="custom-file-label" for="inputGroupFile02" aria-describedby="inputGroupFileAddon02">Upload Passport</label>
                        </div>
                <div>
                <select class="browser-default custom-select custom-select-lg mb-3" name='role'>
                <option disabled selected>User Role</option>
                        <option>Student</option>
                        <option>Lecturer</option>
              </select>
                <select class="browser-default custom-select custom-select-lg mb-3" name='stud_level'>
                <option disabled selected>Level</option>
                        <option>100</option>
                        <option>200</option>
                        <option>300</option>
                        <option>400</option>
                        <option>500</option>
                        <option>600</option>
              </select>
      
                <input type="text" class="form-control"  aria-describedby="emailHelp" name='username'placeholder="Enter username"><br>
                <input type="password" class="form-control" id="exampleInputPassword1"name='password' placeholder="Password"><br>
                 <input type="submit"  class="btn btn-rounded purple-gradient btn-lg btn-block"name='submit' value="Sign-up"><br>
                <a href="index.php"><small class="form-text text-muted"> Already have an account? <strong>Sign-In</strong></small></a>         
             <form>
        </div>
    </div>
</body>
</html>