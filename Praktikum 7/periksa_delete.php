<?php
include_once('koneksi.php');

//tangkap data dari url

$id = $_GET['id'];



//queryinsert
$query = "DELETE FROM periksa WHERE id_data='$id'";


//eksekusi query
if ($dbh->query($query)){
    header('location: periksa.php');
} else {
    echo "Gagal menyimpan data";
}



?> 