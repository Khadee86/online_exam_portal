<?php
    include "connection.php";
    session_start();

    if(isset($_POST['Assign'])){
        $sql1=" INSERT INTO view(username,quiz_title)VALUES('$_SESSION[username]','$_SESSION[quiz_text]') ";
          if ($conn->query($sql1) === TRUE){
            header('location:exams.php');
              }   
            else {
                  echo "insert again"."<br>";
                 }
      
        }
?>

<!doctype html>
<head>
    <title>Take fill in the blank Quiz|Student</title>
   <!-- Font Awesome -->
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css">
<!-- Bootstrap core CSS -->
<link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet">
<!-- Material Design Bootstrap -->
<link href="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.8.11/css/mdb.min.css" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Lilita+One&display=swap" rel="stylesheet">
<link href="questions.css" rel="stylesheet" type="text/css"/>
</head>
<body style="margin-left:20%;margin-right:20%;margin-top:5%;">

<div>
    <h1 class="text1 purple-gradient"><?php echo $_SESSION['quiz_text']?></h1>
</div>

<?php
$query="SELECT quiz_title,Quiz_number,Question FROM multiple_choice WHERE registered_user='$_SESSION[username]' AND quiz_title='$_SESSION[quiz_text]' AND quiz_type='$_SESSION[fill]'";
$result = $conn->query($query);
if ($result->num_rows >0)
{
    while ($row = $result->fetch_assoc()) {
        ?>
    <div class="card cards">
  <div class="card-body card-content">
<?php 
    echo "<p>". "Q.".$row["Quiz_number"] ."</br> "."Question: ".$row["Question"]."</br> "."</p>";
    // if($row["Answer"]===$row["Answer"])
    // {
    //     echo "<p>"."Correct Answer: ".$row["Answer"]."</p>";
    // }
    
?>
<p class="lead mb-0">Enter Answer <textarea class="form-control form-control-lg" id="exampleForm2" name="answer"></textarea>
    </div>
    </div>
  <?php  
    }
}
?>

<div class="d-flex flex-row-reverse">
<form method='post'>
                <input type="submit" class="btn purple-gradient" name="Assign" value="Finish Exam">
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
        