<?php
// Nama: Muhammad Iqbal Zulkarnain
// Kelas: X RPL
// Tanggal: 2026-06-30

$nilai = 80;
$kehadiran = 75;

if ($nilai >= 75) {
    if ($kehadiran >= 80) {
        echo "Status: LULUS!";
    } else {
        echo "Status: TIDAK LULUS (Kurang Kehadiran)!";
    }
} else {
    echo "Status: TIDAK LULUS (Nilai Kurang)!";
}
?>