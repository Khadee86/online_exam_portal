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
        include"assignquiz.php";
    }
?>


<!doctype html>
<head>
    <title>MUltiple Choice|View Quiz</title>
   <!-- Font Awesome -->
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css">
<!-- Bootstrap core CSS -->
<link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet">
<!-- Material Design Bootstrap -->
<link href="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.8.11/css/mdb.min.css" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Lilita+One&display=swap" rel="stylesheet">
<link href="questions.css" rel="stylesheet" type="text/css"/>
</head>
<body style="margin-left:10%;margin-right:10%;margin-top:10%;">
<div>
    <h1 class="text1 purple-gradient"><?php echo $_SESSION['quiz_text']?></h1>
</div>

<?php
$query="SELECT quiz_title,Quiz_number,Question,A,B,C,D,E,Answer FROM multiple_choice WHERE registered_user='$_SESSION[username]' AND quiz_title='$_SESSION[quiz_text]'AND quiz_type='$_SESSION[multi]'";
$result = $conn->query($query);
if ($result->num_rows >0)
{
    while ($row = $result->fetch_assoc()) {
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
?>
    </div>
    </div>
  <?php  
    }
}
?>
<form method='post'>
<div class="d-flex flex-row-reverse">
                <input type="submit" class="btn purple-gradient" name="Assign" value="Assign quiz">
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
        