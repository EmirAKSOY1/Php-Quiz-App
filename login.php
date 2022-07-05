<?php
session_start();
$_SESSION["user"] = $_POST['user'];
if(!isset($_SESSION["user"])){
    echo "<script>location.href='index.php';</script>";
}
else{
    echo "<script>location.href='sorular.php';</script>";
}

?>