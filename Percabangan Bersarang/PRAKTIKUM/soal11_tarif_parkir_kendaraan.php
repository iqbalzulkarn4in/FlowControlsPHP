<?php
// Nama: Muhammad Iqbal Zulkarnain
// Kelas: X RPL
// Tanggal: 2026-06-30

$jenisKendaraan = readline("Masukkan jenis kendaraan: ");
$lamaParkir = readline("Masukkan lama parkir: ");

$lamaParkir = (int)$lamaParkir;

echo "\n=== PROGRAM TARIF PARKIR KENDARAAN ===\n";
echo "Jenis Kendaraan: " . $jenisKendaraan . "\n";
echo "Lama Parkir: " . $lamaParkir . " Jam\n";

if ($jenisKendaraan === "Motor") {
    if ($lamaParkir <= 2) {
        echo "Total Biaya Parkir: Rp" . $totalBiaya = $lamaParkir * 2000;
    } else {
        $biayaAwal = 2 * 2000;
        $biayaTambahan = ($lamaParkir - 2) * 1000;
        echo "Total Biaya Parkir: Rp" . $totalBiaya = $biayaAwal + $biayaTambahan;
    }
} elseif ($jenisKendaraan === "Mobil") {
    if ($lamaParkir <= 2) {
        echo "Total Biaya Parkir: Rp" . $totalBiaya = $lamaParkir * 5000;
    } else {
        $biayaAwal = 2 * 5000;
        $biayaTambahan = ($lamaParkir - 2) * 2000;
        echo "Total Biaya Parkir: Rp" . $totalBiaya = $biayaAwal + $biayaTambahan;
    }
} else {
    echo "Pilihan Tidak Valid.";
}
?>