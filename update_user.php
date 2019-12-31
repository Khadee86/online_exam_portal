<?php
$server="localhost";
$password="";
$username="root";
$dbName="online_exam_portal";
$table_name="register";
$conn=mysqli_connect($server,$username,$password);
if(!$conn){die("error in connection<br>");
}
    else{echo "connection successful..<br>";
}
$conn->close();
session_start();
if(isset($_POST["submit"]))
{


    $server="localhost";
    $password="";
    $username="root";
    $dbName="online_exam_portal";
    $table_name="register";
   
    $conn=mysqli_connect($server,$username,$password,$dbName);
    if(!$conn){die("error in connection2<br>");}
        // else{echo "update connection successful..<br>";}
    

$user=$_POST["user"];


$sql="UPDATE register SET username='$user' WHERE username='$_SESSION[username]'";

if(mysqli_query($conn, $sql))
{
    echo "your profile update was succesful<br>";

}
else{
    echo "could not update your profile<br>";
}

}


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
          <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
          <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
          <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="style10.css">
    <title>update profile</title>
    <style>
    .update{display:flex;justify-content:space-between;}
    #show{display:none;}
    </style>
</head>
<body>
<form action="" method="POST">
    <main class="my-form">
            <div class="cotainer">
                <div class="row justify-content-center">
                    <div class="col-md-8">
                            <div class="card">
                                <div class="card-header ">
                                    <strong>UPDATE FORM</strong>
                                </div>
                                <div class="card-body">
                                    <form name=>
                                        <div class="form-group row">
                                            <label for="firstname" class="col-md-4 col-form-label text-md-right">Username</label>
                                            <div class="col-md-6">
                                                <input type="text" id="" class="form-control" name="user">
                                            </div>
                                        </div>
        
                                            <div class="col-md-6 offset-md-4">
                                                    <!-- <button type="button" class="btn btn-purple" name="submit">update</button> -->
                                                    <input type="submit" name="submit" class="btn btn-purple">
                                             
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                    </div>
                </div>
            </div>
        
        </main>
</form>        

<!--     <script>
    var hold=document.getElementById("clickShow");
    hold.addEventListener("click",function()
    {
        var show=document.getElementById("show");
        show.style.display="block";
    }
    );
    </script> -->
</body>
</html>