<?php
// tangkap form registrasi
$nim = $_POST['nim'];
$nama = $_POST['nama'];
$jk = $_POST['jk'];
$prodi = $_POST['prodi'];
$skills = $_POST['skill'];
$domisili = $_POST['domisili'];
$email = $_POST['email'];


echo "NIM: $nim";
echo "<br> Nama: $nama";
echo "<br> Jenis Kelamin: $jk";
echo "<br> Program Studi: $prodi";
echo "<br> Skill Programming: " . join(', ', $skills);
echo "<br> Domisili: $domisili";
echo "<br> Email $email";
