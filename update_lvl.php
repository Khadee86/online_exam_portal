<?php
$server="localhost";
$password="";
$username="root";
$dbName="online_exam_portal";
$table_name="register";
$conn=mysqli_connect($server,$username,$password);
if(!$conn){die("error in connection<br>");
}
    else{
        // echo "connection successful..<br>";
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
    

$stu_level=$_POST["stu_level"];


$sql="UPDATE register SET stu_level='$stu_level' WHERE username='$_SESSION[username]'";

if(mysqli_query($conn, $sql))
{
    // echo "your profile update was succesful<br>";

}
else{
    echo "could not update your student level<br>";
}

}
if(isset($_POST['goback'])){
    header("location:account.php");
  }

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
          
    <link rel="stylesheet" href="style10.css">
    <title>update profile</title>
    <style>
    .update{display:flex;justify-content:space-between;}
    #show{display:none;}
    </style>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css">
    <link rel="stylesheet" href="dashboardcss.css">
<!-- Bootstrap core CSS -->
<link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet">
<!-- Material Design Bootstrap -->
<link href="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.3.2/css/mdb.min.css" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Lilita+One&display=swap" rel="stylesheet">
<link href='http://fonts.googleapis.com/css?family=Raleway:400,200' rel='stylesheet' type='text/css'>
</head>
<body>
<div class="top purple-gradient">
        Online Exam Portal
    </div> 
<form method="post">
<div class="wrapper">
    <!-- Sidebar  -->
    <nav id="sidebar" class="purple-gradient">
        <div id="dismiss">
            <i class="fas fa-arrow-left"></i>
        </div>

        <div class="sidebar-header purple-gradient">
            <h3 style="color:white;"><?php echo "Welcome ".$_SESSION['username']."<br>" ?></h3>
        </div>
        

        <ul class="list-unstyled components">
            <li class="active">
                <a href="dashboard.php">Dashboard</a>
            </li>
            <li>
                <a href="quiz.html" >My Quizzes</a>
            </li>
            <li>
                <a href="exams.html">Exams</a>
            </li>
            <li>
                <a href="#pageSubmenu" data-toggle="collapse" aria-expanded="false">Create an exam</a>
                <ul class="collapse list-unstyled" id="pageSubmenu">
                    <li>
                        <a href="#">Fill in the blank</a>
                    </li>
                    <li>
                        <a href="q.php">Multi-Choice</a>
                    </li>
                    <li>
                        <a href="#">Theory</a>
                    </li>
                </ul>
            </li>

        </ul>

        <ul class="list-unstyled CTAs">
            <li>
            <a href="account.php" class="download">My account</a>
            </li>
            <li>
                <input type='submit'style='color:#6d7fcc;' name='logout'value='Log Out' class="download">
            </li>
        </ul>
    </nav>

    <!-- Page Content  -->
    <div id="content">

        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <div class="container-fluid">

                <button type="button" id="sidebarCollapse" class="btn  purple-gradient">
                    <i class="fas fa-align-left"></i>
                    <span>Dashboard</span>
                </button>
                <a href="#"><img src="images/new_logo.png" alt=""></a>
            </div>
        </nav>
</div>

<div class="overlay"></div>
</form>
<form action="" method="POST">
    <main class="my-form" style='margin-top:10%;'>
            <div class="cotainer">
                <div class="row justify-content-center">
                    <div class="col-md-8">
                            <div class="card">
                                <div class="card-header purple-gradient">
                                    <strong style='color:white;'>UPDATE LEVEL</strong>
                                </div>
                                <div class="card-body">
                                    <!-- <form> -->
                                        <div class="form-group row">
                                            <label for="firstname" class="col-md-4 col-form-label text-md-right">Student Level</label>
                                            <div class="col-md-6">
                                                <input type="text" id="" class="form-control" name="stu_level">
                                            </div>
                                        </div>
        
                                            <div class="col-md-6 offset-md-4">
                                                    <!-- <button type="button" class="btn btn-purple" name="submit">update</button> -->
                                                    <input type="submit" name="submit" class="btn purple-gradient" value='update level'>
                                            </div>
                                        </div> 
                                    <!-- </form> -->
                                </div>
                                <div class="d-flex flex-row-reverse" style='margin-left:40%;'>
                                             <input type='submit' class='btn purple-gradient' name='goback' value='Go back'/>
                                        </div> 
                            </div>
                    </div>
                </div>
            </div>
        
        </main>
        
</form>     
      
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
          <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
          <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>

            <!-- jQuery CDN - Slim version (=without AJAX) -->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<!-- Popper.JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js" integrity="sha384-cs/chFZiN24E4KMATLdqdvsezGxaGsi4hLGOzlXwp5UZB1LY//20VyM2taTB4QvJ" crossorigin="anonymous"></script>
<!-- Bootstrap JS -->
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js" integrity="sha384-uefMccjFJAIv6A+rW+L4AHf99KvxDjWSu1z9VI8SKNVmz4sk7buKt/6v9KI65qnm" crossorigin="anonymous"></script>
<!-- jQuery Custom Scroller CDN -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/malihu-custom-scrollbar-plugin/3.1.5/jquery.mCustomScrollbar.concat.min.js"></script>
          <script type="text/javascript" src="js/dashboard.js">
          </script>
</body>
</html>
