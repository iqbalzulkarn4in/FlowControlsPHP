<?php
// Nama: Muhammad Iqbal Zulkarnain
// Kelas: X RPL
// Tanggal: 2026-06-25

echo "\n=== PROGRAM TARIF PARKIR ===\n";
echo "1. Motor\n";
echo "2. Mobil\n";
echo "3. Bus\n";

$pilih = (int)readline("Masukkan jenis kendaraan: ");
$lama_parkir = (int)readline("Masukkan lama parkir (jam): ");

echo "\n";

if ($pilih === 1) {
    $total = $lama_parkir * 2000;
    echo "Jenis Kendaraan: Motor\n";
    echo "Total Bayar: Rp" . $total;
} elseif ($pilih === 2) {
    $total = $lama_parkir * 5000;
    echo "Jenis Kendaraan: Mobil\n";
    echo "Total Bayar: Rp" . $total;
} elseif ($pilih === 3) {
    $total = $lama_parkir * 10000;
    echo "Jenis Kendaraan = Bus\n";
    echo "Total Bayar: Rp" . $total;
} else {
    echo "Pilihan Tidak Valid.";
}
?>