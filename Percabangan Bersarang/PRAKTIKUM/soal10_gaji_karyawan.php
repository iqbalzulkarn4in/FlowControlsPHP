<?php
// Nama: Muhammad Iqbal Zulkarnain
// Kelas: X RPL
// Tanggal: 2026-06-30

$jamKerja = readline("Masukkan jumlah jam kerja: ");

$jamKerja = (int)$jamKerja;

$gajiPokok = $jamKerja * 20000;

if ($jamKerja > 40) {
    if ($jamKerja > 60) {
        $bonus = 500000;
    } else {
        $bonus = 250000;
    }
} else {
    $bonus = 0;
}

$totalGaji = $gajiPokok + $bonus;

echo "\n=== PROGRAM GAJI KERYAWAN BERDASARKAN JAM KERJA ===\n";
echo "Jam Kerja: " . $jamKerja . " jam\n";
echo "Gaji Pokok: Rp" . $gajiPokok . "\n";
echo "Bonus: Rp" . $bonus . "\n";
echo "Total Gaji: Rp" . $totalGaji;
?>