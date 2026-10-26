<?php
// Nama: Muhammad Iqbal Zulkarnain
// Kelas: X RPL
// Tanggal: 2026-06-30

$pengiriman = readline("Masukkan jenis pengiriman: ");
$beratBarang = readline("Masukkan berat barang (kg): ");

$beratBarang = (int)$beratBarang;

echo "\n== PROGRAM BIAYA PENGIRIMAN BARANG ===\n";
echo "Jenis Pengiriman: " . $pengiriman;
echo "Berat Barang: " . $beratBarang . " kg\n";

if ($pengiriman === "Reguler") {
    $biayaDasar = 10000;
    if ($beratBarang > 5) {
        $biayaAwal = $beratBarang * $biayaDasar;
        $biayaTambahan = ($beratBarang - 5) * 3000;
        echo "Total Biaya Pengiriman: Rp" . $totalBiaya = $biayaAwal + $biayaTambahan;
    } else { 
        $total = $beratBarang * $biayaDasar;
        echo "Total Biaya Pengiriman (Kurang dari 5 kg): Rp" . $total;
    }
} elseif ($pengiriman === "Ekspres") {
    $biayaDasar = 20000;
    if ($beratBarang > 5) {
        $biayaAwal = $beratBarang * $biayaDasar;
        $biayaTambahan = ($beratBarang - 5) * 5000;
        echo "Total Biaya Pengiriman: Rp" . $totalBiaya = $biayaAwal + $biayaTambahan;
    } else { 
        $total = $beratBarang * $biayaDasar;
        echo "Total Biaya Pengiriman (Kurang dari 5 kg): Rp" . $total;
    }
} else {
    echo "Pilihan Tidak Valid";
}
?>