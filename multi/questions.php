<?php
include "connection.php";
session_start();
if(isset($_POST['Done']))
    {
        $quest=$_POST['no_quest'];
$quiz_text=$_POST['quiz_text'];
        header('location:q.php');
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
    <?php
        for($i=1;$i<=$_SESSION['quest'];$i++){
    ?>
<!-- <form method="post"> -->
<div class="card cards">
<form method="post" action='question_data.php'>
  <div class="card-body card-content">
    <h4 class="card-title"><?php echo "Q".$i." "?></h4><hr>
    <p class="lead mb-0">Enter question<input type="text" id="exampleForm2" class="form-control form-control-lg"></p>

    a.<input type="text" id="exampleForm2" class="form-control form-control-sm">
    b.<input type="text" id="exampleForm2" class="form-control form-control-sm">
    c.<input type="text" id="exampleForm2" class="form-control form-control-sm">
    d.<input type="text" id="exampleForm2" class="form-control form-control-sm">
    e.<input type="text" id="exampleForm2" class="form-control form-control-sm">
    Answer<input type="text" id="exampleForm2" class="form-control form-control-lg"><br>
    <input class="btn purple-gradient" type="submit" value="upload"><br>
  </div>
 <?php
        }
    ?>
            <div class="d-flex flex-row-reverse">
                <!-- <input type="submit" class="btn purple-gradient" name="another question" value="another question"><br> -->
                <input type="submit" class="btn purple-gradient" name="Done" value="Done">
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