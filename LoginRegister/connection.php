<?php
$connection = mysqli_connect('localhost','root','','newlogin');
if(!$connection){
    die("Koneksi database gagal".mysqli_connect_error());
}

?>