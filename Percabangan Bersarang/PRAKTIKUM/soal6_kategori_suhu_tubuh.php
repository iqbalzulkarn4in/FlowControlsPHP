<?php
// Nama: Muhammad Iqbal Zulkarnain
// Kelas: X RPL
// Tanggal: 2026-06-30

$usia = readline("Masukkan usia Anda: ");
$suhuTubuh = readline("Masukkan suhu tubuh: ");

$usia = (int)$usia;
$suhuTubuh = (int)$suhuTubuh;

if ($usia >= 12) {
    if ($suhuTubuh >= 38) {
        echo "Demam.\n";
    } else {
        echo "Suhu Normal.\n";
    }
} elseif ($usia < 12) {
    if ($suhuTubuh >= 37.5) {
        echo "Demam Anak.\n";
    } else {
        echo "Suhu Normal Anak.\n";
    }
} else {
    echo "Pilihan Tidak Valid.\n";
}
?>