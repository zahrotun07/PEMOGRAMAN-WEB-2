<?php
// Mendapatkan nilai siswa dari input (misalnya dari form)
$nilai = 90; // Contoh nilai, bisa diubah sesuai input

// Menentukan keterangan berdasarkan nilai
if ($nilai >= 86 && $nilai <= 100) {
    $keterangan = "A - Sangat Baik";
} elseif ($nilai >= 76 && $nilai <= 85) {
    $keterangan = "B - Baik";
} elseif ($nilai >= 66 && $nilai <= 75) {
    $keterangan = "C - Cukup";
} elseif ($nilai >= 0 && $nilai <= 65) {
    $keterangan = "D - Kurang";
} else {
    $keterangan = "Nilai Diluar Range";
}

// Menampilkan hasil
echo "Nilai: $nilai, Keterangan: $keterangan";
?>