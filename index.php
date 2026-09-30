<?php

$nama = $_Nilai['Nama'];
$kelas = $_Nilai['Kelas'];
$tugas = $_Nilai['Tugas'];
$uts = $_Nilai['UTS'];
$uas = $_Nilai['UAS'];

$Nilai = ($Nilai Tugas * 70 / 100) + ($Nilai UTS * 78 / 100) + ($Nilai UAS * 78 / 100);
 
if ($Nilai >= 90) {
    $predikat = "A";
} elseif ($Nilai >= 80) {
    $predikat = "B";
} elseif ($Nilai >= 75) {
    $predikat = "C";
} else

if ($Nilai >= 78) {
    $status = "Lulus";
} else {
    $status = "Tidak Lulus";
}

echo "<h2>Hasil Penilaian</h2>";
echo "Nama : $nama <br>";
echo "Kelas : $kelas <br>";
echo "Nilai Tugas : $tugas <br>";
echo "Nilai UTS : $uts <br>";
echo "Nilai UAS : $uas <br>";
echo "Nilai Akhir : $nilai <br>";
echo "Predikat : $predikat <br>";
echo "Status : $status";

?>