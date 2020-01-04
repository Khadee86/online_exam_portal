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
        session_start();
        $counter=0;
        if(isset($_POST['Dashboard'])){
          header("location:dashboard.php");
     } 
?>

<!doctype html>
<head>
    <title>Take fill in the blank Quiz|Student</title>
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
<link href="questions.css" rel="stylesheet" type="text/css"/>
</head>
<body style="margin-left:20%;margin-right:20%;margin-top:5%;">
<div class="d-flex flex-row">
    <form method="post">
     <input type="submit" class="btn purple-gradient" name="Dashboard" value="Dashboard">
     </form>
 </div> 
<div>
    <h1 class="text1 purple-gradient"><?php echo $_SESSION['quiz_name']?></h1>
</div>

<?php
$query="SELECT quiz_title,Quiz_number,Question FROM multiple_choice WHERE quiz_title='$_SESSION[quiz_name]' AND quiz_type='fill'";
$result = $conn->query($query);
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
        