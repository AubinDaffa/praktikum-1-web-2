<?php
include_once('koneksi.php');

//tangkap data

//tangkap data

$id = $_POST['id'];
$nama = $_POST['nama'];
$gender = $_POST['gender'];
$tmp_lahir = $_POST['tmp_lahir'];
$tgl_lahir = $_POST['tgl_lahir'];
$kategori = $_POST['kategori'];
$telpon = $_POST['telpon'];
$alamat = $_POST['alamat'];
$unit_kerja_id = $_POST['unit_kerja_id'];


//queryinsert
$query = "UPDATE paramedik SET nama='$nama', gender='$gender', tmp_lahir='$tmp_lahir', tgl_lahir='$tgl_lahir', kategori='$kategori', telpon='$telpon', alamat='$alamat', unit_kerja_id='$unit_kerja_id' WHERE id='$id'";


//eksekusi query
if ($dbh->query($query)){
    header('location: paramedik.php');
} else {
    echo "Gagal menyimpan data";
}

?> 