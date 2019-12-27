<?php
include "connection.php";
    session_start();
     echo "welcome ".$_SESSION['username']."<br>";
    if(isset($_POST['logout'])){
        if(session_destroy())
        {
        header("Location:index.php");
        }
    }
?>
<!doctype html>
<head>
<title>DASHBOARD</title>    
<head>
<body>
<form method="post">
<input type="submit"  class="btn btn-rounded purple-gradient btn-lg btn-block"name='logout' value="logout"><br>
<form>
</body>
</html>