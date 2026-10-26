<?php
// Nama: Muhammad Iqbal Zulkarnain
// Kelas: X RPl
// Tanggal: 2026-06-30

$golongan = readline("Masukkan golongan: ");
$lembur = readline("Masukkan jumlah jam lembur: ");
$gaji_kotor = readline("Masukkan total gaji kotor: ");

$lembur = (int)$lembur;
$gaji_kotor = (int)$gaji_kotor;

echo "\n=== PROGRAM GAJI KARYAWAN DENGAN TUNJANGAN DAN PAJAK ===\n";
echo "Golongan Karyawan: " . $golongan . "\n";

if ($golongan === "A") {
    echo "Gaji Pokok: Rp" . $gaji_pokok = 3000000 . "\n";
    echo "Tunjangan: Rp" . $tunjangan = 500000 . "\n";
    echo "Upah Lembur: Rp" . $upah_lembur = 25000 . "\n";
    if ($lembur > 10) {
        echo "Bonus Lembur: Rp" . $bonus = ($lembur - 10) * 300000 . "\n";
    } else {
        echo "Tidak Mendapatkan Bonus Lembur\n";
    }
} elseif ($golongan === "B") {
    echo "Gaji Pokok: Rp" . $gaji_pokok = 4000000 . "\n";
    echo "Tunjangan: Rp" . $tunjangan = 750000 . "\n";
    echo "Upah Lembur: Rp" . $upah_lembur = 25000 . "\n";
    if ($lembur > 10) {
        echo "Bonus Lembur: Rp" . $bonus = ($lembur - 10) * 300000 . "\n";
    } else {
        echo "Tidak Mendapatkan Bonus Lembur\n";
    }
} else {
    echo "Pilihan Tidak Valid.";
}

if ($gaji_kotor > 5000000) {
    echo "Gaji Kotor: Rp" . $gaji_kotor . "\n";
    echo "Pajak: Rp" . $pajak = 0.05 * $gaji_kotor . "\n";
    echo "Gaji Bersih: Rp" . $gaji_bersih = $gaji_kotor - $pajak;
} else {
    echo "Pajak: Rp" . $pajak = 0.03 * $gaji_kotor . "\n";
    echo "Gaji Bersih: Rp" . $gaji_bersih = $gaji_kotor - $pajak;
}
?>