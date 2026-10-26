<?php
// Nama: Muhammad Iqbal Zulkarnain
// Kelas: X RPL
// Tanggal: 2026-06-25

echo "\n=== PROGRAM KONVERSI SUHU ===\n";
echo "1. Celcius ke Fahrenheit\n";
echo "2. Fahrenheit ke Celcius\n";
echo "3. Celcius ke Kelvin\n";
echo "4. Kelvin ke Celcius\n";

$pilih = (int)readline("Masukkan jenis konversi: ");
$suhu = (float)readline("Masukkan nilai suhu: ");

echo "\n";

if ($pilih === 1) {
    $hasil = ($suhu * 9 / 5) + 32;
    echo $suhu . " C = " . $hasil . " F";
} elseif ($pilih === 2) {
    $hasil = ($suhu - 32) * 5 / 9;
    echo $suhu . " F = " . $hasil . " C";
} elseif ($pilih === 3) {
    $hasil = $suhu + 273.15;
    echo $suhu . " C = " . $hasil . " K";
} elseif ($pilih === 3) {
    $hasil = $suhu - 273.15;
    echo $suhu . " K = " . $hasil . " C";
} else {
    echo "Pilihan Tidak Valid.";
}
?>