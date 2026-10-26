<?php
// Nama: Muhammad Iqbal Zulkarnain
// Kelas: X RPL
// Tanggal: 2026-06-24

$umur = readline("Masukkan kategori umur: ");

if ($umur <= 5) {
    echo "Kategori: Balita";
} elseif ($umur <= 12) {
    echo "Kategori: Anak-anak";
} elseif ($umur <= 17) {
    echo "Kategori: Remaja";
} elseif ($umur <= 59) {
    echo "Kategori: Dewasa";
} else {
    echo "Kategori: Lansia";
}
?>