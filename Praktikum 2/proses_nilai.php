<?php
// input form
$nama = $_POST['nama'];
$matkul = $_POST['matkul'];
$uts = $_POST['uts'];
$uas = $_POST['uas'];
$tugas = $_POST['tugas'];


// nilai total (30% UTS + 35% UAS + Tugas 35%)
$nilai_total= (30/100 * $uts) + (35/100 * $uas) + (35/100 * $tugas);

if ($nilai_total > 55){
    $hasil = 'lulus';
} else {
    $hasil = 'Tidak lulus';
}

if (($nilai_total >= 85) && ($nilai_total <= 100)) {
    $predikat = 'A';
} elseif (($nilai_total >= 70) && ($nilai_total <= 84)) {
    $predikat = 'B';
} elseif (($nilai_total >= 56) && ($nilai_total <= 69)){
    $predikat = 'C';
} elseif (($nilai_total >= 36) && ($nilai_total <= 55)){
    $predikat = 'D';
} elseif (($nilai_total >= 0) && ($nilai_total <= 35)) {
    $predikat = 'E';
} else {
    $predikat = 'I';
}


echo "Nama Lengkap: $nama";
echo "<br> Mata Kuliah: $matkul";
echo "<br> Nilai UTS: $uts";
echo "<br> Nilai Tugas: $tugas";
echo "<br> Nilai UAS: $uas";
echo "<br> Predikat Nilai : $predikat";
echo "<br> Hasil: :$hasil";