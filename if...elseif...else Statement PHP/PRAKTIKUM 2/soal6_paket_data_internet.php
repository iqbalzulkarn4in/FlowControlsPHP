<?php
// Nama: Muhammad Iqbal Zulkarnain
// Kelas: X RPL
// Tanggal: 2026-06-25

echo "\n=== PROGRAM PAKET DATA INTERNET ===\n";
echo "1. Paket Harian\n";
echo "2. Paket Mingguan\n";
echo "3. Paket Bulanan\n";

$pilih = (int)readline("Masukkan pilihan: ");

echo "\n";

if ($pilih === 1) {
    echo "Paket Dipilih : Paket Harian\n";
    echo "Harga         : Rp5000";
} elseif ($pilih === 2) {
    echo "Paket Dipilih : Paket Mingguan\n";
    echo "Harga         : Rp20000";
} elseif ($pilih === 3) {
    echo "Paket Dipilih : Paket Bulanan\n";
    echo "Harga         : Rp50000";
}
?>