<?php
// Nama: Muhammad Iqbal Zulkarnain
// Kelas: X RPL
// Tanggal: 2026-06-30

$totalBelanja = readline("Masukkan total belanja: ");

$totalBelanja = (float)$totalBelanja;

if ($totalBelanja >= 500000) {
    if ($totalBelanja >= 1000000) {
        $diskon = 0.2 * $totalBelanja;
    } else {
        $diskon = 0.1 * $totalBelanja;
    }
} else {
    $diskon = 0;
}

$totalBayar = $totalBelanja - $diskon;

echo "\n=== PROGRAM DISKON PEMBELIAN ===\n";
echo "Total Belanja = Rp" . $totalBelanja . "\n";
echo "Diskon = " . $diskon . "\n";
echo "Total Bayar = Rp" . $totalBayar;
?>