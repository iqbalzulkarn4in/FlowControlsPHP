<?php
// Nama: Muhammad Iqbal Zulkarnain
// Kelas: X RPL
// Tanggal: 2026-06-24

$nilai = readline("Masukkan nilai angka: ");

if ($nilai >= 80) {
    echo "Grade: A";
} elseif ($nilai >= 70) {
    echo "Grade: B";
} elseif ($nilai >= 60) {
    echo "Grade: C";
} elseif ($nilai >= 50) {
    echo "Grade: D";
} else {
    echo "Grade: E";
}
?>