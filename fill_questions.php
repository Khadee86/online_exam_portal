<?php
include "connection.php";
 session_start();
 $qtype2='fill';
 $_SESSION['fill']=$qtype2;
//  $query="SELECT username FROM registers WHERE "
//  echo $_SESSION['username'];
 if(isset($_POST['upload']))
 {
     
     $qno=$_POST['quest_no'];
     $question=$_POST['quest'];
     $mark=$_POST['mark'];
    //  $ans=$_POST['answer'];
    $uname=$_SESSION['username'];
     $quiz_text=$_SESSION['quiz_text'];
     if (empty($question)){
     echo"\nplease enter question\n"."<br>";
     }
    //   if (empty($ans)){
    //  echo"\nplease enter answer\n"."<br>";
    //  }

          $mysqli="INSERT INTO multiple_choice(Quiz_number,quiz_title,Question,mark,registered_user,quiz_type)VALUES('$qno','$quiz_text','$question','$mark','$uname','$_SESSION[fill]')";
   
          if ($conn->query($mysqli) === TRUE){
              echo " question created successfully"."<br>";
                }   
              else {
                    echo "Try inserting again"."<br>";
                  }
 }
 if(isset($_POST['Dashboard'])){
  header("location:dashboard.php");
}
 if(isset($_POST['Done'])){

    header("location:view_quiz2.php");
 }
 
 ?>
<!doctype html>
<head>
    <title>Questions</title>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css">
 
<!-- Bootstrap core CSS -->
<link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet">
<!-- Material Design Bootstrap -->
<link href="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.3.2/css/mdb.min.css" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Lilita+One&display=swap" rel="stylesheet">
<link href='http://fonts.googleapis.com/css?family=Raleway:400,200' rel='stylesheet' type='text/css'>
<link href="questions.css" rel="stylesheet" type="text/css"/>
</head>
<body style="margin-left:10%;margin-right:10%;margin-top:10%;">
<div class="d-flex flex-row">
    <form method="post">
     <input type="submit" class="btn purple-gradient" name="Dashboard" value="Dashboard">
     </form>
 </div> 
    <div>
    <h1 class="text1 purple-gradient"><?php echo $_SESSION['quiz_text']?></h1>
</div>
<!-- <form method="post"> -->
<div class="card cards">
<form method="post">
  <div class="card-body card-content">
  <p class="lead mb-0">Note: to make fill in th blank space use an underscore</p>
    <p class="lead mb-0">Question no. <input type="number" name='quest_no'id="exampleForm2" class="form-control"></p>
    <p class="lead mb-0">Enter question<input type="text"name='quest' id="exampleForm2" class="form-control form-control-lg"></p>
    Mark<input style='width:20%;'name='mark' type="text" id="exampleForm2" class="form-control form-control-lg"><br>
    <input class="btn purple-gradient" type="submit" name='upload'value="upload"><br>
  </div>
            <div class="d-flex flex-row-reverse">
                <input type="submit" class="btn purple-gradient" name="Done" value="view quiz when done">
            </div> 
        </form>
        </div>
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