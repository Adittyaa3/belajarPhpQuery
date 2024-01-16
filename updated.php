<?php

include 'connect.php';

//get data dari form
$id   = $_POST['id'];
$nama         = $_POST['nama'];
$pasword = $_POST['pasword'];
$text       = $_POST['text'];

//query update data ke dalam database berdasarkan ID
$query = "UPDATE user SET nama = '$nama', pasword = '$pasword', text = '$text' WHERE id = '$id'";

//kondisi pengecekan apakah data berhasil diupdate atau tidak
if($conn->query($query)) {
    //redirect ke halaman index.php 
    header("location: index.php");
} else {
    //pesan error gagal update data
    echo "Data Gagal Diupate!";
}


?>