<?php
include "connection.php";
session_start();

    if(!isset($_SESSION['username']))
    {
        header("location:login12.php");
    }
    else{
        echo"take quiz immediately";
    }

?>