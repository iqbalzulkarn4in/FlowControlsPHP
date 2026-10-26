<?php
// Nama: Muhammad Iqbal Zulkarnain
// Kelas: X RPL
// Tanggal: 2026-06-24

$jarak = readline("Masukkan jarak perjalanan (dalam km): ");

echo "\n=== Rincian Biaya Perjalanan ===\n";
echo "Jarak = " . $jarak . " km\n";

if ($jarak <= 50) {
    $tarif_per_km = 2000;
} else {
    $tarif_per_km = 1800;
}

$total_biaya = $jarak * $tarif_per_km;

echo "Tarif Per Km = Rp" . $tarif_per_km . "\n";
echo "Total Biaya Perjalanan = Rp" . $total_biaya;
?>