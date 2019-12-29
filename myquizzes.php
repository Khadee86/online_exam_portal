<?php
include "connection.php";
     session_start();
?>

<!doctype html>
<head>
    <title>MY Quizzes</title> 
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
                <a href="myquizzes.php" >My Quizzes</a>
            </li>
            <li>
                <a href="exams.html">Exams</a>
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
            <!-- <li>
                <input type='submit' name='logout'value='Log Out' class="download">
            </li> -->
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
  <h1 class="text1 purple-gradient" style="margin:10%; width:60%;color:white;">QUIZZES CREATED</h1>
  <table class="table" style="margin:10%;width:60%;">
  <thead class="purple-gradient white-text">
    <tr>
      <th scope="col">Quiz_name</th>
      <th scope="col">Quiz_type</th>
      <th scope="col">Quiz_code</th>
    </tr>
  </thead>
  </table>

  <?php
    
    $query="SELECT * FROM quizzz WHERE username='$_SESSION[username]'";
    if ($result = $conn->query($query)) {
        while ($row = $result->fetch_assoc()) {
        
    ?>
    <form method="post" >
<table class="table" style="margin:10%;width:60%;">
  <!-- <thead class="purple-gradient white-text">
    <tr>
      <th scope="col">Profile pic</th>
      <th scope="col">First Name</th>
      <th scope="col">Last Name</th>
      <th scope="col">Email</th>
      <th scope="col">Username</th>
      <th scope="col">Student ID</th>
      <th scope="col">Student Level</th>
    </tr>
  </thead> -->

  
  <tbody>
    <tr>
      <th scope="row"><?php echo $row['quiz_name']  ?></th>
      <td><?php echo $row['quiz_type']  ?></td>
      <td><?php echo $row['quiz_code']  ?></td>
      <!-- <td><button  type="submit" class="btn purple-gradient btn-sm" name='view' >View</button></td>
        <td><button  type="submit" class="btn purple-gradient btn-sm" name='delete' >Delete</button></td> -->
    </tr>
  </tbody>
</table>
</form>
<?php
       }
    // }
}
?>
<?php
    // if(isset($_POST['delete']))
    // {
    //    $sql="DELETE FROM quizzz WHERE quiz_name='$row[quiz_name]' AND username='$_SESSION[username]'";
    // //    $sqli="DELETE FROM multiple_choice WHERE quiz_text='row[quiz_name]' AND username='$_SESSION[username]' AND quiz_type='$row[quiz_type]'";
    //    if($conn->query($sql)===TRUE){
    //        echo "\nitem deleted successfully";
    //    }
    //    else{
    //        echo "\nerror with deletion try again";
    //    }
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
