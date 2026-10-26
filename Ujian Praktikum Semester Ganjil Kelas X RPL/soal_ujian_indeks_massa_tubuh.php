<?php
// Nama: Muhammad Iqbal Zulkarnain
// Kelas: X RPL
// Tanggal: 2026-06-25

$berat = (float)readline("Masukkan berat badan (kg): ");
$tinggi = (float)readline("Masukkan tinggi badan (meter): ");

$imt = $berat / ($tinggi * $tinggi);

echo "\n=== Indeks Massa Tubuh ===\n";
echo "Berat Badan: " . $berat . " kg\n";
echo "Tinggi Badan: " . $tinggi . " meter\n";
echo "Hasil IMT: " . $imt . "\n";

if ($imt >= 30) {
    echo "Anda Obesitas.";
} elseif ($imt >= 25) {
    echo "Anda Kelebihan Berat.";
} elseif ($imt >= 18.5) {
    echo "Anda Normal.";
} else {
    echo "Anda Kurus.";
}
?>