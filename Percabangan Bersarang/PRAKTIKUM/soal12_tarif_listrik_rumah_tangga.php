<?php
// Nama: Muhammad Iqbal Zulkarnain
// Kelas: X RPL
// Tanggal: 2026-06-30

$pelanggan = readline("Masukkan jenis pelanggan: ");
$pemakaian = readline("Masukkan jumlah pemakaian (kWh): ");

$pemakaian = (int)$pemakaian;

echo "\n=== PROGRAM TARIF LISTRIK RUMAH TANGGA ===\n";
echo "Jenis Pelanggan: " . $pelanggan . "\n";
echo "Jumlah Pemakaian Listrik: " . $pemakaian . " kWh\n";

if ($pelanggan === "Rumah Tangga") {
    $tarifDasar = 1500;
    if ($pemakaian > 100) {
        $biayaAwal = $pemakaian * $tarifDasar;
        $biayaTambahan = ($pemakaian - 100) * 500;
        echo "Total Biaya Listrik: Rp" . $totalBiaya = $biayaAwal + $biayaTambahan;
    } else {
        $total = $pemakaian * $tarifDasar;
        echo "Total Biaya Listrik: Rp" . $total;
    }
} elseif ($pelanggan === "Usaha") {
    $tarifDasar = 2000;
    if ($pemakaian > 100) {
        $biayaAwal = $pemakaian * $tarifDasar;
        $biayaTambahan = ($pemakaian - 100) * 1000;
        echo "Total Biaya Listrik: Rp" . $totalBiaya = $biayaAwal + $biayaTambahan;
    } else {
        $total = $pemakaian * $tarifDasar;
        echo "Total Biaya Listrik: Rp" . $total;
    }
} else {
    echo "Pilihan Tidak Valid.";
}   
?>