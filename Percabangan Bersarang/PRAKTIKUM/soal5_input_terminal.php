<?php
// Nama: Muhammad Iqbal Zulkarnain
// Kelas: X RPL
// Tanggal: 2026-06-30

$nilai = readline("Masukkan nilai ujian: ");
$kehadiran = readline("Masukkan persentase kehadiran: ");

$nilai = (int)$nilai;
$kehadiran = (int)$kehadiran;

if ($nilai >= 75) {
    if ($kehadiran >= 80) {
        echo "Status: LULUS \n";
    } else {
        echo "Status: TIDAK LULUS (Kehadiran kurang) \n";
    }
} else {
    echo "Status: TIDAK LULUS (Nilai kurang) \n";
}
?>