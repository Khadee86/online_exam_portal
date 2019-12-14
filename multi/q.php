
<?php
include "connection.php";
$sql = "CREATE TABLE quizz (
    ID INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
   Quiz_number INT(5),
     Question VARCHAR(10000),
     A VARCHAR(1000),
     B VARCHAR(1000),
     C VARCHAR(1000),
     D VARCHAR(1000),
     E VARCHAR(1000),
     Answer VARCHAR(1000)
)";
if ($conn->query($sql) === TRUE) {
        //    echo "Table quizz created successfully";
       } else {
           echo "Error creating table: " . $conn->error;
       }
     session_start();
    if(isset($_POST['submit']))
    {
        $quest=$_POST['no_quest'];
        $quiz_text=$_POST['quiz_text'];
        $user=$_POST['user'];
        $_SESSION['quest']=$quest;
         $_SESSION['quiz_text']=$quiz_text;
         $_SESSION['user']=$user;
        header('location:questions.php');
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
    <form method="post" >
<div class="jumbotron text-center blue-grey lighten-5 jumbtron-wrap">
  <h1 class="text1 purple-gradient">MULTIPLE CHOICE QUESTIONS</h1>
  <div class="row d-flex justify-content-center">
    <div class="col-xl-7 pb-2">

    <h4 class="text1">Enter Username
        <input type="text" name="user" id="exampleForm2" class="form-control">
      </h4>
      <h4 class="text1">Enter Title of Quiz
        <input type="text" name="quiz_text" id="exampleForm2" class="form-control">
      </h4>
      <!-- <input name='quizz'class="btn purple-gradient"type='submit'> -->
      <h4 class="text1">Enter total number of questions
        <input type="number" id="exampleForm2"name='no_quest' class="form-control">
      <input name='submit'class="btn purple-gradient"type='submit'></h4>

    </div>
  </div>
</div>
</form>

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
