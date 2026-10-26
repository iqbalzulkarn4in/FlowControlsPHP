<?php
// Nama: Muhammad Iqbal Zulkarnain
// Kelas: X RPL
// Tanggal: 2026-06-24

$total_belanja = readline("Masukkan total belanja: ");

if ($total_belanja > 500000) {
    $diskon = 0.20;
} elseif ($total_belanja >= 200000) {
    $diskon = 0.10;
} else {
    $diskon = 0;
}

$total_bayar = $total_belanja - ($total_belanja * $diskon);

echo "\n=== Diskon Pembelian ===\n";
echo "Total Belanja: Rp" . $total_belanja . "\n";
echo "Besar Diskon: " . $diskon . "\n";
echo "Total Bayar Akhir: Rp" . $total_bayar;
?>