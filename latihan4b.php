<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Latihan4b.php</title>
</head>
<body>

<?php
// Daftar negara ASEAN awal
$negara_asean = ["Indonesia", "Singapura", "Malaysia", "Brunei", "Thailand"];

// Menampilkan daftar negara ASEAN awal
echo "<h3>Daftar Negara ASEAN awal:</h3>";
echo "<ul>";
foreach ($negara_asean as $negara) {
    echo "<li>$negara</li>";
}
echo "</ul>";

// Menambahkan 3 negara baru
array_push($negara_asean, "Laos", "Filipina", "Myanmar");

// Menampilkan daftar negara ASEAN baru
echo "<h3>Daftar Negara ASEAN baru:</h3>";
echo "<ul>";
foreach ($negara_asean as $negara) {
    echo "<li>$negara</li>";
}
echo "</ul>";
?>

</body>
</html>