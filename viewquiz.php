<?php

include "connection.php";
session_start();

// $query="SELECT quiz_title,Quiz_number,Question,A,B,C,D,E,Answer FROM multiple_choice";
$query="SELECT * FROM multiple_choice";
$result = $conn->query($query);
if ($result->num_rows >0)
{
    while ($row = $result->fetch_assoc()) {
        
        if($row['quiz_type']=='multiple_choice')
        {
            header("location:view_quiz.php");
        }
    }
}
  
?>