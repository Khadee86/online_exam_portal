<?php
	include "connection.php";
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
$query="SELECT quiz_title,Quiz_number,Question,A,B,C,D,E,Answer FROM multiple_choice WHERE registered_user='$_SESSION[username]' AND quiz_title='$_SESSION[quiz_text]'";
$result = $conn->query($query);
if ($result->num_rows >0)
{
    while ($row = $result->fetch_assoc()) {
    }
}
        ?>
    <div class="card cards">
  <div class="card-body card-content">
<?php 
    echo "<p>". "Q.".$row["Quiz_number"] ."</br> "."Question: ".$row["Question"]."</br> "."A ".$row["A"]. " </br>"."B ".$row["B"]."</br> "."C ".$row["C"]."</br>"."D ".$row["D"]."</br> "."E ".$row["E"]. " </br>"."</p>";

?>
Answer<input type="text" name="ans">
    </div>
    </div>
<?php 
 	$query="SELECT Answer FROM multiple_choice WHERE quiz_title='$_SESSION[quiz_text]'";
 	$result = $conn->query($query);
if ($result->num_rows >0)
{
    while ($row = $result->fetch_assoc()) {
    	$lol=strcmp($ans, $row["Answer"]);
    	echo $lol;
    }
}    
?>
<form method='post'>

<div class="d-flex flex-row-reverse">
                <input type="submit" class="btn purple-gradient" name="submit" value="submit" placeholder="enter option">
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