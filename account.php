<?php
    session_start();
    include "connect.php";
    if(!isset($_SESSION['username']))
    {
        header("location:login.php");
    }
    $query=mysqli_query($conn,"SELECT * FROM register WHERE username='$_SESSION[username]'");
    if($query)
    {
        if(mysqli_num_rows($query)>0){
            $row=mysqli_fetch_array($query);
            $image = $row['photo'];
            $image_src = "upload/".$image;
        }
    }

    if(isset($_POST['editpic'])){
            header("location:pic.php");
        }
        if(isset($_POST['logout'])){
            if(session_destroy())
            {
            header("Location:index.php");
            }
        }
        if(isset($_POST['first'])){
            header("location:update_fname.php");
    }
      if(isset($_POST['last'])){
            header("location:update_lname.php");
    }
    if(isset($_POST['email'])){
            header("location:update_email.php");
    }
    if(isset($_POST['lvl'])){
        header("location:update_lvl.php");
}
    

   ?>
    
<!doctype html>
<head>
    <title>Account page</title>
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
        </div>
        

        <ul class="list-unstyled components">
            <li class="active">
                <a href="dashboard.php">Dashboard</a>
            </li>
            <li>
                <a href="quiz.html" >My Quizzes</a>
            </li>
            <li>
                <a href="exams.php">Exams</a>
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
    <form method='post'>
<div class="purple-gradient">
	<div class="row login_box purple-gradient">
	    <div class="col-md-12 col-xs-12" align="center">
            <div class="outter"><img src='<?php echo $image_src;  ?>' class="image-circle"/>
        </div>   
        <div class="col-md-12 col-xs-12 login_control">
                <div class="font">
                <div class="control">
                     <button type='submit' name='editpic'class="btn purple-gradient">Insert profile picture</button>
                     <div class="label purple-gradient">Username:<?php echo $row['username']?></div>
                </div>
                 <div class="control">
                            <div class="label purple-gradient">ID:<?php echo $row['stud_id']?></div>
                        </div>
                        <div class="control">
                            <div class="label purple-gradient">Level:<?php echo $row['stu_level']?></div>
                            <button type='submit' class="btn purple-gradient " name="lvl">Edit Student level</button>
                        </div>
                <div class="control">
                    <div class="label purple-gradient">Firstname: <?php echo $row['firstname']?></div>
                    <button type='submit' class="btn purple-gradient" name="first">Edit firstname</button>  
                </div>
                <div class="control">
                        <div class="label purple-gradient">Lastname:<?php echo $row['lastname']?></div>
                        <button type='submit' class="btn purple-gradient " name="last">Edit Lastname</button>
                    </div>
                <div class="control">
                        <div class="label purple-gradient">Emailaddress: <?php echo $row['email']?></div>
                        <button type='submit' class="btn purple-gradient" name="email">Edit Email</button>
                   </div>
                <!-- <div align="center">
                     <button type='submit' class="btn purple-gradient">Edit profile</button>
                </div> -->
            </div>
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