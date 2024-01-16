<?php
include "connect.php";
$id = $_GET['id'];

$sql = "DELETE FROM user WHERE id=$id";

if (mysqli_query($conn, $sql)) {
    mysqli_close($conn);
    header('Location: index.php'); //If book.php is your main page where you list your all records
    exit;
} else {
    echo "Error deleting record";
} 