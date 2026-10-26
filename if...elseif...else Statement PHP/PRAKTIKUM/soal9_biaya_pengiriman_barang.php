<?php
// Nama: Muhammad Iqbal Zulkarnain
// Kelas: X RPL
// Tanggal: 2026-06-24

$berat_barang = readline("Masukkan berat barang (dalam kg): ");

if ($berat_barang <= 5) {
    $tarif_per_kg = 10000;
} elseif ($berat_barang <= 10) {
    $tarif_per_kg = 9000;
} else {
    $tarif_per_kg = 8000;
}

$total_pengiriman = $berat_barang * $tarif_per_kg;

echo "\n=== Biaya Pengiriman Barang ===\n";
echo "Berat Barang: " . $berat_barang . " kg\n";
echo "Tarif Per Kg: Rp" . $tarif_per_kg . " per kg\n";
echo "Total Pengiriman: Rp" . $total_pengiriman;
?>