<?php
// Nama: Muhammad Iqbal Zulkarnain
// Kelas: X RPl
// Tanggal: 2026-06-30

$kelas = readline("Masukkan kelas kamar: ");
$menginap = readline("Masukkan lama menginap (hari): ");

$kelas = (int)$kelas;
$menginap = (int)$menginap;

echo "\n=== PROGRAM BIAYA RAWAT INAP RUMAH SAKIT ===\n";
echo "Kelas Kamar: " . $kelas . "\n";
echo "Lama Menginap: " . $menginap . "\n";

if ($kelas === 1) {
    $tarif_kamar = 500000;
    if ($menginap > 5) {
        echo "Total Biaya Sebelum Diskon: Rp" . $biaya_awal = $menginap * $tarif_kamar . "\n";
        echo "Diskon: Rp" . $diskon = 0.1 * $biaya_awal . "\n";;
        echo "Total Biaya Yang Harus Dibayar: Rp" . $total_biaya = $biaya_awal - $diskon;
    } else {
        $total = $menginap * $tarif_kamar;
        echo "Total Biaya Tanpa Diskon: Rp" . $total;
    }
} elseif ($kelas === 2) {
    $tarif_kamar = 350000;
    if ($menginap > 5) {
        echo "Total Biaya Sebelum Diskon: Rp" . $biaya_awal = $menginap * $tarif_kamar . "\n";
        echo "Diskon: Rp" . $diskon = 0.07 * $biaya_awal . "\n";
        echo "Total Biaya Yang Harus Dibayar: Rp" . $total_biaya = $biaya_awal - $diskon;
    } else {
        $total = $menginap * $tarif_kamar;
        echo "Total Biaya Tanpa Diskon: Rp" . $total;
    }
} elseif ($kelas === 3) {
    $tarif_kamar = 200000;
    if ($menginap > 5) {
        echo "Total Biaya Sebelum Diskon: Rp" . $biaya_awal = $menginap * $tarif_kamar . "\n";
        echo "Diskon: Rp" . $diskon = 0.05 * $biaya_awal . "\n";
        echo "Total Biaya Yang Harus Dibayar: Rp" . $total_biaya = $biaya_awal - $diskon;
    } else {
        $total = $menginap * $tarif_kamar;
        echo "Total Biaya Tanpa Diskon: Rp" . $total;
    }
} else {
    echo "Pilihan Tidak Valid.";
}
?>