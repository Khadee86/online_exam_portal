<?php
include"connection.php";
$sql = "CREATE TABLE multiple_choice(
      quizID INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    quiz_title VARCHAR(50),
     Quiz_number INT(5),
       Question VARCHAR(10000),
       A VARCHAR(1000),
       B VARCHAR(1000),
       C VARCHAR(1000),
       D VARCHAR(1000),
       E VARCHAR(1000),
       Answer VARCHAR(1000),
       mark VARCHAR(100),
       registered_user VARCHAR(50),
       quiz_type VARCHAR(30),
    --    FOREIGN KEY (quizmakerID) REFERENCES register(ID)
  )";
  if ($conn->query($sql) === TRUE) {
          echo "Table multiple_choice created successfully";
      } else {
          echo "Error creating table: " . $conn->error;
      }
?>