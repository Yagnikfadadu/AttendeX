<?php
session_start();
if(!isset($_SESSION["username"])){
    header("location:login.php");
}else{
    header("location:index.php");
}
?>
