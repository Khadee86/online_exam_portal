<?php
    include "connection.php";
    // $sql = "CREATE TABLE view(
    //      ID INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    //      username VARCHAR(30),
    //      quiz_title VARCHAR(30),
    //      score INT(20),
    //      reg_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
    //      )";
        
    //     if ($conn->query($sql) === TRUE) {
    //         echo "Table view created successfully";
    //     } else {
    //         echo "Error creating table: " . $conn->error;
    //     }
    session_start();
    $counter=0;
    // if(isset($_POST['Finish'])){
    //     $sql1=" INSERT INTO view(username,quiz_title,score,quiz_type)VALUES('$_SESSION[username]','$_SESSION[quiz_text]','$_SESSION[multi]') ";
    //       if ($conn->query($sql1) === TRUE){
    //           // echo " record created successfully"."<br>";
    //           // header('location:exams.php');
    //             }   
    //           else {
    //                 echo "Try inserting again"."<br>";
    //                }
      
    //     }
   
    
?>
  

<!doctype html>
<head>
    <title>Take multiple choice Quiz|Student</title>
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
$query="SELECT quiz_title,Quiz_number,Question,A,B,C,D,E,Answer FROM multiple_choice WHERE quiz_title='$_SESSION[quiz_text]' AND quiz_type='$_SESSION[multi]'";
$result = $conn->query($query);
        if ($result->num_rows >0)
        {
            while ($row = $result->fetch_assoc()) {
              $correct_ans=$row["Answer"];
              // echo $correct_ans;
?>
    <div class="card cards">
  <div class="card-body card-content">
<?php 
    // $ans=$_POST['ans'];
    echo "<p>". "Q.".$row["Quiz_number"] ."</br> "."Question: ".$row["Question"]."</br> ";
?>
<form method="post">
<!-- Material unchecked -->
<div class="form-check">
  <input type="radio" class="form-check-input" name="options">
  <label class="form-check-label" for="materialChecked"><?php echo $row["A"]?></label>
</div>
<!-- Material checked -->
<div class="form-check">
  <input type="radio" class="form-check-input" name="options" checked>
  <label class="form-check-label" for="materialChecked"><?php echo $row["B"]?></label>
</div>
<div class="form-check">
  <input type="radio" class="form-check-input" name="options" checked>
  <label class="form-check-label" for="materialChecked"><?php echo $row["C"]?></label>
</div>
<div class="form-check">
  <input type="radio" class="form-check-input"  name="options" checked>
  <label class="form-check-label" for="materialChecked"><?php echo $row["D"]?></label>
</div>
<div class="form-check">
  <input type="radio" class="form-check-input"  name="options" checked>
  <label class="form-check-label" for="materialChecked"><?php echo $row["E"]?></label>
</div>
<input type="submit" name="submit" class="btn purple-gradient">

</form>

<!-- Answer<input type="text" name="ans">-->
<?php  
     if(isset($_POST['submit'])){ 
    
      $options=$_POST['options'];
      echo $options;
       if ($options===$correct_ans){
        echo $correct_ans;
        echo $counter;
    //             echo"you are correct";
    //       // $counter=0;
    //       // $sql="SELECT Answer,mark from multiple_choice WHERE quiz_title='$_SESSION[quiz_title]";
    //       // $result1 = $conn->query($sql);
    //       // while ($row = $result1->fetch_assoc()) {
    //           // $sum=$counter+$row['mark'];
    //       //  echo "Your mark is: ".$sum;
          }
       }
    //   else
    //   {
    //             // echo "wrong";
    //   }
    // }
    //   }
    //   else
    //   {
    //             // echo "wrong";
    //   }
    // }
    
?>
<!-- <p class="lead mb-0">Enter Answer <textarea class="form-control form-control-lg" id="exampleForm2" name="answer"></textarea> -->
    </div>
    </div>
  <?php  
    }
}
?>

<div class="d-flex flex-row-reverse">
<form method='post'>
                <input type="submit" class="btn purple-gradient" name="Finish" value="Finish Exam">
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
        