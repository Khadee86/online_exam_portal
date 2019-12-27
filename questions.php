<?php
include "connection.php";
 session_start();
//  $query="SELECT username FROM registers WHERE "
// echo $_SESSION['username'];

 if(isset($_POST['upload']))
 {
     
     $qno=$_POST['quest_no'];
     $question=$_POST['quest'];
     $a=$_POST['a'];
     $b=$_POST['b'];
     $c=$_POST['c'];
     $d=$_POST['d'];
     $e=$_POST['e'];
     $ans=$_POST['answer'];
     $uname=$_SESSION['username'];
     $mark=$_POST['mark'];
     $quiz_text=$_SESSION['quiz_text'];
     if (empty($question)){
     echo"\nplease enter question\n"."<br>";
     }
      if (empty($ans)){
     echo"\nplease enter answer\n"."<br>";
     }

          $mysqli="INSERT INTO multiple_choice(Quiz_number,quiz_title,Question,A,B,C,D,E,Answer,registered_user,mark,quiz_type)VALUES('$qno','$quiz_text','$question','$a','$b','$c','$d','$e','$ans','$uname','$mark','$_SESSION[multi]')";
   
          if ($conn->query($mysqli) === TRUE){
              // echo " question created successfully"."<br>";
                }   
              else {
                    echo "Try inserting again"."<br>";
                  }
 }

 if(isset($_POST['Done'])){

    header("location:view_quiz.php");
 }
 ?>
<!doctype html>
<head>
    <title>Questions</title>
   <!-- Font Awesome -->
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css">
<!-- Bootstrap core CSS -->
<link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet">
<!-- Material Design Bootstrap -->
<link href="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.8.11/css/mdb.min.css" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Lilita+One&display=swap" rel="stylesheet">
<link href="questions.css" rel="stylesheet" type="text/css"/>
</head>
<body>
    <div>
    <h1 class="text1 purple-gradient"><?php echo $_SESSION['quiz_text']?></h1>
</div>
<!-- <form method="post"> -->
<div class="card cards">
<form method="post">
  <div class="card-body card-content">
    <p class="lead mb-0">Question no. <input style='width:20%;' type="number" name='quest_no'id="exampleForm2" class="form-control"></p>
    <p class="lead mb-0">Enter question<input type="text"name='quest' id="exampleForm2" class="form-control form-control-lg"></p>

    a.<input name='a'type="text" id="exampleForm2" class="form-control form-control-sm">
    b.<input name='b' type="text" id="exampleForm2" class="form-control form-control-sm">
    c.<input name='c' type="text" id="exampleForm2" class="form-control form-control-sm">
    d.<input name='d' type="text" id="exampleForm2" class="form-control form-control-sm">
    e.<input name='e' type="text" id="exampleForm2" class="form-control form-control-sm">
    Answer<input name='answer'type="text" id="exampleForm2" class="form-control form-control-lg"><br>
    Mark<input style='width:20%;'name='mark'type="text" id="exampleForm2" class="form-control form-control-lg"><br>
    <input class="btn purple-gradient" type="submit" name='upload'value="upload"><br>
  </div>
            <div class="d-flex flex-row-reverse">
                <input type="submit" class="btn purple-gradient" name="Done" value="view quiz when done">
            </div> 
        </form>
        </div>
    <!-- JQuery -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<!-- Bootstrap tooltips -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.4/umd/popper.min.js"></script>
<!-- Bootstrap core JavaScript -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/js/bootstrap.min.js"></script>
<!-- MDB core JavaScript -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.8.11/js/mdb.min.js"></script>
</body>
</html>