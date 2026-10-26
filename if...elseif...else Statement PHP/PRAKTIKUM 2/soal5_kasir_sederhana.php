<?php
// Nama: Muhammad Iqbal Zulkarnain
// Kelas: X RPL
// Tanggal: 2026-06-25

echo "\n=== PROGRAM KASIR SEDERHANA ===\n";
echo "1. Buku\n";
echo "2. Pulpen\n";
echo "3. Penghapus\n";

$pilih = (int)readline("Masukkan pilihan: ");
$jumlah = (int)readline("Masukkan jumlah barang: ");

echo "\n";

if ($pilih === 1) {
    $total = $jumlah * 10000;
    echo "Barang        : Buku\n";
    echo "Total Bayar   : Rp" . $total;
} elseif ($pilih === 2) {
    $total = $jumlah * 5000;
    echo "Barang        : Pulpen\n";
    echo "Total Bayar   : Rp" . $total;
} elseif ($pilih === 3) {
    $total = $jumlah * 3000;
    echo "Barang        : Penghapus\n";
    echo "Total Bayar   : Rp" . $total;
} else {
    echo "Pilihan Tidak Valid.";
}
?>