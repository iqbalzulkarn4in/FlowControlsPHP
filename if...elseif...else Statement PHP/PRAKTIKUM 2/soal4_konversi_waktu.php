<?php
// Nama: Muhammad Iqbal Zulkarnain
// Kelas: X RPL
// Tanggal: 2026-06-25

echo "\n=== PROGRAM KONVERSI WAKTU ===\n";
echo "1. Jam ke Menit\n";
echo "2. Jam ke Detik\n";
echo "3. Menit ke Jam\n";
echo "4. Menit ke Detik\n";

$pilih = (int)readline("Masukkan pilihan: ");
$waktu = (float)readline("Masukkan nilai waktu: ");

echo "\n";

if ($pilih === 1) {
    $hasil = $waktu * 60;
    echo $waktu . " Jam = " . $hasil . " Menit";
} elseif ($pilih === 2) {
    $hasil = $waktu * 3600;
    echo $waktu . " Jam = " . $hasil . " Detik";
} elseif ($pilih === 3) {
    $hasil = $waktu / 60;
    echo $waktu . " Menit = " . $hasil . " Jam";
} elseif ($pilih === 4) {
    $hasil = $waktu * 60;
    echo $waktu . " Menit = " . $hasil . " Detik";
} else {
    echo "Pilihan Tidak Valid.";
}
?>