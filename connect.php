<?php
    $username="root";
    $password="";
    $servername="localhost";
    $db_name="Online_Exam_Portal";

    $conn=mysqli_connect($servername,$username,$password,$db_name);
    if($conn===false)
    {
        die("Connection failed: " . mysqli_connect_error());
    }
    else{
        // echo"connection successfully"."<br>";
    }
?>