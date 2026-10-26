<?php
// Nama: Muhammad Iqbal Zulkarnain
// Kelas: X RPL
// Tanggal: 2026-06-25

echo "1. Penjumlahan \n";
echo "2. Pengurangan \n";
echo "3. Perkalian \n";
echo "4. Pembagian \n";

$pilih = (int)readline("Masukkan pilihan: ");

$angka1 = readline("Masukkan angka ke-1: ");
$angka2 = readline("Masukkan angka ke-2: ");

if ($pilih === 1) {
    $jumlah = $angka1 + $angka2;
    echo "\n$angka1 + $angka2 = $jumlah";
} elseif ($pilih === 2) {
    $kurang = $angka1 - $angka2;
    echo "\n$angka1 - $angka2 = $kurang";
} elseif ($pilih === 3) {
    $kali = $angka1 * $angka2;
    echo "\n$angka1 * $angka2 = $kali";
} elseif ($pilih === 4) {
    $bagi = $angka1 / $angka2;
    echo "\n$angka1 / $angka2 = $bagi";
} else {
    echo "Pilihan tidak ada";
}
?>