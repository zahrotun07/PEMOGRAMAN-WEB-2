<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Modul 2 - Latihan 2c</title>
    <style>
        .kotak {
            width: 30px;
            height: 30px;
            text-align: center;
            line-height: 30px;
            float: left;
            margin: 2px;
            border: 1px solid black;
        }
        .clear {
            clear: both;
        }
        .ganjil {
            background-color: #003;
            color: #fff;
        }
        .genap {
            background-color: #999;
        }
    </style>
</head>
<body>

<?php
// Variabel jumlah baris dan kolom
$jumlah_baris = 5;

// Looping untuk baris
for ($i = 1; $i <= $jumlah_baris; $i++) {
    // Mengecek apakah baris ganjil atau genap
    $kelas = ($i % 2 == 0) ? 'genap' : 'ganjil';
    
    // Looping untuk kolom mengikuti nomor baris
    for ($j = 1; $j <= $i; $j++) {
        echo "<div class='kotak $kelas'>$j</div>";
    }
    
    // Menambahkan div clear untuk mengatur baris baru
    echo "<div class='clear'></div>";
}
?>

</body>
</html>