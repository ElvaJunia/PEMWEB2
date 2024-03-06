<?php
// tangkap input form
$nama = $_GET['nama'];
$matakuliah = $_GET['matakuliah'];
$uts = $_GET['uts'];
$uas = $_GET['uas'];
$tugas = $_GET['tugas'];

// hitung nilai total (30% UTS + 35% UAS + 35% tugas)
$nilai_total = (30 / 100 * $uts) + (35 / 100 * $uas) + (35 / 100 * $tugas);

if($nilai_total > 55) {
    $status = 'Lulus';
} else {
    $status = 'Tidak Lulus';
}

// Penentuan grade nilai
$grade = "";
if ($nilai_total >= 85) {
  $grade = "A";
  $predikat = "Sangat Memuaskan";
} elseif ($nilai_total >= 75) {
  $grade = "B";
  $predikat = "Memuaskan";
} elseif ($nilai_total >= 65) {
  $grade = "C";
  $predikat = "Cukup";
} elseif ($nilai_total >= 55) {
  $grade = "D";
  $predikat = "Kurang";
} else {
  $grade = "E";
  $predikat = "Sangat Kurang";
}

// tampilkan hasil form
echo "Nama Lengkap: $nama";
echo "<br> Mata Kuliah: $matakuliah";
echo "<br> Nilai UTS: $uts";
echo "<br> Nilai UAS: $uas";
echo "<br> Nilai Tugas: $tugas";
echo "<br> Nilai Total: $nilai_total";
echo "<br> Status: $status";
echo "<br> Grade: $grade";
echo "<br> Predikat: $predikat";

