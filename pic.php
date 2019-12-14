<?php
include "connection.php";
// $sql = "CREATE TABLE images (
//      username VARCHAR(30),
//     name VARCHAR(100)
//     )";
    
//     if ($conn->query($sql) === TRUE) {
//         echo "Table MyGuests created successfully";
//     } else {
//         echo "Error creating table: " . $conn->error;
//     }


if(isset($_POST['but_upload'])){
 
  $uname = $_POST['uname'];
  $name = $_FILES['file']['name'];
  $target_dir = "upload/";
  $target_file = $target_dir . basename($_FILES["file"]["name"]);

  // Select file type
  $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

  // Valid file extensions
  $extensions_arr = array("jpg","jpeg","png","gif");

  // Check extension
  if( in_array($imageFileType,$extensions_arr) ){
 
     // Insert record
     $query = "insert into images(name,username) values('".$name."','$uname')";
     mysqli_query($conn,$query);
  
     // Upload file
     move_uploaded_file($_FILES['file']['tmp_name'],$target_dir.$name);



  }
 
}

 // $sql = "select name from images where id=1";
 //      $result = mysqli_query($con,$sql);
 //      $row = mysqli_fetch_array($result);

 //      $image = $row['name'];
 //      $image_src = "upload/".$image;
?>

<form method="post" action="" enctype='multipart/form-data'>
  <input type="text" name="uname" placeholder="enter your username">
  <input type='file' name='file' />
  <input type='submit' value='Save name' name='but_upload'>
  
</form>
<!-- <img src='<?php //echo $image_src;  ?>' > -->
