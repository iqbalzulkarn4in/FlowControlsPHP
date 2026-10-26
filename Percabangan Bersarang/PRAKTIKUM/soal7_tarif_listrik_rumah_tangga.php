<?php
// Nama: Muhammad Iqbal Zulkarnain
// Kelas: X RPL
// Tanggal: 2026-06-30

$daya = readline("Masukkan daya listrik rumah (900 atau 1300 VA): ");
$pemakaian = readline("Masukkan jumlah pemakaian listrik (dalam kWh): ");

$pemakaian = (int)$pemakaian;

if ($daya === "900 VA") {
    if ($pemakaian <= 100) {
        echo "Tarif Rp1.000 per kWh.\n";
    } else {
        echo "Tarif Rp1.200 per kWh.\n";
    }
} elseif ($daya === "1300 VA") {
    if ($pemakaian <= 100) {
        echo "Tarif Rp1.400 per kWh.\n";
    } else {
        echo "Tarif 1.600 per kWh.\n";
    }
} else {
    echo "Pilihan Tidak Valid.\n";
}
?>