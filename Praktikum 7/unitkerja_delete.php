<?php
include_once('koneksi.php');

//tangkap data dari url

$id = $_GET['id'];



//queryinsert
$query = "DELETE FROM unit_kerja WHERE id='$id'";


//eksekusi query
if ($dbh->query($query)){
    header('location: unit_kerja.php');
} else {
    echo "Gagal menyimpan data";
}











?> 