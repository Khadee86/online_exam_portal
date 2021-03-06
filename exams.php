<?php
include "connection.php";
     session_start();
     if(isset($_POST['logout'])){
        if(session_destroy())
        {
        header("Location:index.php");
        }
    }
?>

<!doctype html>
<head>
    <title>Exams</title> 
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


  <table class="table" style="margin:10%;width:60%;">
  <thead class="purple-gradient white-text">
    <tr>
      <!-- <th scope="col">Profile pic</th>
      <th scope="col">First Name</th>
      <th scope="col">Last Name</th> -->
      <th scope="col">Quiz</th>
      <th scope="col">Username</th>
      <th scope="col">quiz_type</th>
      <th scope="col">Score</th>
      <th scope="col">Date Taken</th>
     <!--  <th scope="col">Student ID</th>
      <th scope="col">Student Level</th> -->
    </tr>
  </thead>
  <?php
    
    $query="SELECT * FROM view WHERE username = '$_SESSION[username]'";
    if ($result = $conn->query($query)) {
        while ($row = $result->fetch_assoc()) {
            echo"<tr>";
            echo"<td>".$row['quiz_title']."</td>";
            echo"<td>".$row['username'] ."</td>";
            echo"<td>".$row['quiz_type']."<?td>";
            echo"<td>".$row['score']."<?td>";
            echo"<td>".$row['reg_date']."<?td>";
            echo"</tr>";
        }
    }
    ?>
    </table>
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
