
<?php
    session_start();
    include "connect.php";
    if(!isset($_SESSION['username']))
    {
        header("location:login.php");
    }
  if(isset($_POST['editmulti'])){
            header("location:editmulti.php");
        }
    if(isset($_POST['editall'])){
            header("Location:editall.php");
        } 
        if(isset($_POST['logout'])){
            if(session_destroy())
            {
            header("Location:index.php");
            }
        }

   ?>
    
<!doctype html>
<head>
    <title>Edit Quiz page</title>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css">
    <link rel="stylesheet" href="dashboardcss.css">
<!-- Bootstrap core CSS -->
<link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet">
<!-- Material Design Bootstrap -->
<link href="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.3.2/css/mdb.min.css" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Lilita+One&display=swap" rel="stylesheet">
<link href='http://fonts.googleapis.com/css?family=Raleway:400,200' rel='stylesheet' type='text/css'>
<link rel="stylesheet" href="style9.css">
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
            <!-- <h5 style="color:white;"><?php echo  $_SESSION['email']."<br>" ?></h5> -->
        </div>
        

        <ul class="list-unstyled components">
            <li class="active">
                <a href="dashboard.php">Dashboard</a>
            </li>
            <li>
                <a href="myquizzes.php" >My Quizzes</a>
            </li>
            <li>
                <a href="viewcurrentquiz.php">View Quiz created</a>
            </li>
            <li>
                <a href="edit.php">Edit Quiz Created</a>
            </li>
            <li>
                <a href="exams.php">My Exams</a>
            </li>
            <li>
                <a href="#pageSubmenu" data-toggle="collapse" aria-expanded="false">Create an exam</a>
                <ul class="collapse list-unstyled" id="pageSubmenu">
                    <li>
                        <a href="q3.php">Fill in the blank</a>
                    </li>
                    <li>
                        <a href="q.php">Multi-Choice</a>
                    </li>
                    <li>
                        <a href="q2.php">Theory</a>
                    </li>
                </ul>
            </li>

        </ul>

        <ul class="list-unstyled CTAs">
            <li>
            <a href="account.php" class="download">My account</a>
            </li>
            <li>
                <a class="download"><input type='submit' name='logout'value='Log Out' class="download"></a>
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
            </div>
        </nav>
        



</div>

<div class="overlay"></div><br><br><br><br><br><br><br><br><br>
</form>
    <form method='post'>
<div class="purple-gradient">
	    <div class="col-md-12 col-xs-12" align="center">  
        <div class="col-md-12 col-xs-12 login_control">
                <div class="font">
                        <div class="control">
                            <button type='submit' class="btn purple-gradient " name="editmulti">Edit Multi</button>
                        </div>
                <div class="control">
                    <button type='submit' class="btn purple-gradient" name="editall">Edit Theory/ Fill</button>  
                </div>
                <!-- <div align="center">
                     <button type='submit' class="btn purple-gradient">Edit profile</button>
                </div> -->
            </div>
        </div>  
            
    </div>
</form>
<?php
// if(isset($_POST['editpic'])){
//     header("location:pic.php");
// }
?>
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