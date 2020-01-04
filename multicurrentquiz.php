<?php
     session_start();
    include "connection.php";
    $sql="SELECT email FROM register WHERE username='$_SESSION[username]'";
    $result=$conn->query($sql);
    if ($result->num_rows >0)
    {
    while ($row = $result->fetch_assoc()) {
            $_SESSION['email']=$row['email'];
        }
    }
    if(isset($_POST['Assign'])){
        include "assignquiz.php";
    }
    if(isset($_POST['Dashboard'])){
         header("location:dashboard.php");
    }
    if(isset($_POST['Delete'])){
        $query="DELETE FROM quizzz WHERE username='$_SESSION[username]' AND  quiz_name='$_SESSION[quiz]'AND quiz_type='multiple_choice'";
           if($conn->query($query)===TRUE){
            echo "\nitem deleted successfully"."<br>";
           $sql="DELETE FROM multiple_choice WHERE registered_user='$_SESSION[username]' AND  quiz_title='$_SESSION[quiz]'AND quiz_type='multiple_choice'";
           if($conn->query($sql)===TRUE){
            header("location:myquizzes.php");
            echo "\nrecord deleted successfully"."<br>";
           }
           else{
               echo"error with deletion of record"."<br>";
           }
        }
        else{
            echo "\nerror with deletion try again";
        }
       }
?>


<!doctype html>
<head>
    <title>MUltiple Choice|View Quiz</title>
    
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
<body style="margin-left:10%;margin-right:10%;margin-top:10%;">
<div class="d-flex flex-row">
    <form method="post">
     <input type="submit" class="btn purple-gradient" name="Dashboard" value="Dashboard">
     </form>
 </div> 
<div>
    <h1 class="text1 purple-gradient"><?php echo  $_SESSION['quiz']?></h1>
</div>

<?php
// echo"record was found";
$query="SELECT quiz_title,Quiz_number,Question,A,B,C,D,E,Answer,mark,quiz_type FROM multiple_choice WHERE registered_user='$_SESSION[username]' AND  quiz_title='$_SESSION[quiz]'AND quiz_type='multiple_choice' ";
$result = $conn->query($query);
if ($result->num_rows >0)
{
    // echo"record was found";
    while ($row = $result->fetch_assoc()) {
        // $_SESSION['quiz']=$row['quiz_title'];
        ?>
    <div class="card cards">
  <div class="card-body card-content">
<?php 
    echo "<p>". "Q.".$row["Quiz_number"] ."</br> "."Question: ".$row["Question"]."</br> "."A ".$row["A"]. " </br>"."B ".$row["B"]."</br> "."C ".$row["C"]."</br>"."D ".$row["D"]."</br> "."E ".$row["E"]. " </br>"."</p>";
    if($row["Answer"]===$row["A"])
    {
        echo "<p>"."Correct Answer: ".$row["A"]."</p>";
    }
    if($row["Answer"]===$row["B"])
    {
        echo "<p>"."Correct Answer: ".$row["B"]."</p>";
    }
    if($row["Answer"]===$row["C"])
    {
        echo "<p>"."Correct Answer: ".$row["C"]."</p>";
    }
    if($row["Answer"]===$row["D"])
    {
        echo "<p>"."Correct Answer: ".$row["D"]."</p>";
    }
    if($row["Answer"]===$row["E"])
    {
        echo "<p>"."Correct Answer: ".$row["E"]."</p>";
    }
    echo "<br>".$row["mark"]." marks";
?>
    </div>
    </div>
  <?php  
    }
}
?>
<form method='post'>
<div class="d-flex flex-row-reverse">
                <input type="submit" class="btn purple-gradient" name="Delete" value="Delete quiz">
                <input type="submit" class="btn purple-gradient" name="Assign" value="Assign quiz">
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
        