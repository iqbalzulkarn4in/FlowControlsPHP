<?php
// Nama: Muhammad Iqbal Zulkarnain
// Kelas: X RPL
// Tanggal: 2026-06-24

$total_belanja = readline("Masukkan total belanja: ");

if ($total_belanja >= 500000) {
    $diskon = 0.15;
} elseif ($total_belanja >= 200000) {
    $diskon = 0.1;
} else {
    $diskon = 0.05;
}

$potongan_harga = $total_belanja * $diskon;
$total_bayar = $total_belanja - $potongan_harga;

echo "\n=== Rincian Potongan Harga ===\n";
echo "Total Belanja: Rp" . $total_belanja . "\n";
echo "Diskon: " . $diskon . "\n";
echo "Potongan Harga: Rp" . $potongan_harga . "\n";
echo "Total Bayar: Rp" . $total_bayar;
?>