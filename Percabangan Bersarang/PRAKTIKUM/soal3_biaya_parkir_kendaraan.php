<?php
// Nama: Muhammad Iqbal Zulkarnain
// Kelas: X RPL
// Tanggal: 2026-06-30

$jenisKendaraan = readline("Masukkan jenis Kendaraan: ");
$lamaParkir = (int)readline("Masukkan lama parkir; ");

if ($jenisKendaraan === "Motor") {
    if ($lamaParkir <= 2) {
        echo "Biaya Parkir Rp2000.";
    } else {
        echo "Biaya Parkir Rp4000.";
    }
} elseif ($jenisKendaraan === "Mobil") {
    if ($lamaParkir <= 2) {
        echo "Biaya Parkir Rp5000.";
    } else {
        echo "Biaya Parkir Rp10000.";
    }
} else {
    echo "Pilihan Tidak Valid!";
}
?>