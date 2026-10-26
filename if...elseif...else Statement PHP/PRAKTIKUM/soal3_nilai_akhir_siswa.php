<?php
// Nama: Muhammad Iqbal Zulkarnanin\
// Kelas: X RPL
// Tanggal: 2026-06-24

$nilai_tugas = readline("Masukkan nilai tugas: ");
$nilai_ujian = readline("Masukkan nilai ujian: ");

$nilai_akhir = (0.4 * $nilai_tugas) + (0.6 * $nilai_ujian);

if ($nilai_akhir >= 60) {
    echo "Siswa dinyatakan LULUS!";
} else {
    echo "Siswa dinyatakan TIDAK LULUS!";
}
?>