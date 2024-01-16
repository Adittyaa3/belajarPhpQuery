<?php
include ("connect.php");

$nama = $_POST['nama'];
$password = $_POST['password'];
$text= $_POST['text'];
 
mysqli_query($conn,"INSERT INTO user VALUES('','$nama','$password','$text')") ;

header("location:index.php");
?>