<?php
    $username="root";
    $password="";
    $servername="localhost";
    $db_name="Online_Exam_Portal";

    $conn=new mysqli($servername,$username,$password,$db_name);
    if($conn->connect_error)
    {
        die("Connection failed: " . $conn->connect_error);
    }
    else{
        // echo"connection successfully"."<br>";
    }
?>