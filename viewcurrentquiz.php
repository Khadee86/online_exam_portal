<?php

include "connection.php";
//use once comment after;
 //include "q_table.php";

     session_start();
    //  $_SESSION['quizname']=$_POST['quiz_text'];
    if(isset($_POST['submit']))
    {
        if($_POST['quiz_type']==='multiple_choice')
       {
        $_SESSION['quiz']=$_POST['quiz_text'];
        header("location:multicurrentquiz.php");
       }
        else if($_POST['quiz_type']==='theory')
       {
        $_SESSION['quiz']=$_POST['quiz_text'];
        header("location:theorycurrentquiz.php");
       }
       else if($_POST['quiz_type']==='fill'){
        $_SESSION['quiz']=$_POST['quiz_text'];
        header("location:fillcurrentquiz.php");
       }
       else{
           echo"wrong quiz type selected";
       }
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
    <title>View Current Quiz Questions</title> 
    <link rel="stylesheet" href="dashboardcss.css">
    <!-- Scrollbar Custom CSS -->
    <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/malihu-custom-scrollbar-plugin/3.1.5/jquery.mCustomScrollbar.min.css"> -->


    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <!-- <link rel="stylesheet" type="text/css" href="css/forgotpassword.css"> -->
      <!-- Font Awesome -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<!-- Bootstrap core CSS -->
<link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" rel="stylesheet">
<!-- Material Design Bootstrap -->
<link href="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.3.2/css/mdb.min.css" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Lilita+One&display=swap" rel="stylesheet">
<link href="questions.css" rel="stylesheet" type="text/css"/>
    <!-- Font Awesome JS -->
    <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/solid.js" integrity="sha384-tzzSw1/Vo+0N5UhStP3bvwWPq+uvzCMfrN1fEFe+xBmv1C/AtVX5K0uZtmcHitFZ" crossorigin="anonymous"></script>
    <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/fontawesome.js" integrity="sha384-6OIrr52G08NpOFSZdxxz1xdNSndlD4vdcf/q2myIUVO0VsqaGHJsB0RaBE01VTOY" crossorigin="anonymous"></script>
</head>
<body style="margin-left:10%;margin-right:10%;">
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

    <form method="post" >
<div class="jumbotron text-center blue-grey lighten-5 jumbtron-wrap">
  <!-- <h1 class="text1 purple-gradient">Enter Quiz Title you want to View</h1> -->
  <div class="row d-flex justify-content-center">
    <div class="col-xl-7 pb-2">
      <h4 class="text1">Enter Quiz Title you want to View
        <input type="text" name="quiz_text" id="exampleForm2" class="form-control">
      </h4>
      <h4 class="text1">Enter Quiz Type
      <select class="browser-default custom-select custom-select-lg mb-3" name='quiz_type'>
                <option disabled selected>Quiz type</option>
                        <option>multiple_choice</option>
                        <option>fill</option>
                        <option>theory</option>
              </select>
      </h4>
      <h4 class="text1">
      <input name='submit'class="btn purple-gradient"type='submit'></h4>

    </div>
  </div>
</div>
</form>

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
