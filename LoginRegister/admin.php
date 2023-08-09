<?php
session_start();
$username = $_SESSION['username'];
$level =($_SESSION['level']);
if(!empty($username)&& ($level)=='1'){
    echo "<h1>Admin | Dasboard</h1>";
    echo "Welcome!", $username;
}else{
    header('location:login.php');
}

echo "<a href= 'logout.php'>Log Out</a>";
?>