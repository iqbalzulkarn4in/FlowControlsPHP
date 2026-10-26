<?php
// Nama: Muhammad Iqbal Zulkarnain
// Kelas: X RPL
// Tanggal: 2026-06-30

$tugas = readline("Masukkan nilai tugas: ");
$uts   = readline("Masukkan nilai UTS: ");
$uas   = readline("Masukkan nilai UAS: ");

$tugas = (float)$tugas;
$uts   = (float)$uts;
$uas   = (float)$uas;

$nilai_akhir = ($tugas * 0.4) + ($uts * 0.3) + ($uas * 0.3);

echo "Nilai Akhir: $nilai_akhir \n";

if ($nilai_akhir >= 75) {
    if ($uas >= 60) {
        echo "Status: LULUS \n";
    } else {
        echo "Status: TIDAK LULUS (Nilai UAS kurang) \n";
    }
} else {
    echo "Status: TIDAK LULUS (Nilai akhir kurang) \n";
}
?>