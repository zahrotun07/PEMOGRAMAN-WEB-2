<?php
// Membuat array warna
$warna = array("hijau", "kuning", "kelabu", "merah muda");

// Menampilkan lirik "Balonku Ada Lima"
echo "Balonku ada lima.<br>";
echo "Rupa-rupa warnanya: <br>";

// Menampilkan warna dari array
foreach ($warna as $w) {
    echo $w . ", ";
}
echo "dan biru.<br><br>"; // Menambahkan warna biru yang tidak ada di array

// Lanjutkan lirik lagunya
echo "Meletus balon " . $warna[0] . " DOR!!!<br>"; // Balon hijau meletus
echo "Hatiku sangat kacau.<br>";
echo "Balonku tinggal empat.<br>";
echo "Kupegang erat-erat.<br>";
?>
