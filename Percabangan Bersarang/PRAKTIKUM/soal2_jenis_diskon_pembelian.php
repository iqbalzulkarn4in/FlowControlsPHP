<?php
// Nama: Muhammad Iqbal Zulkarnain
// Kelas: X RPL
// Tanggal: 2026-06-30

$totalBelanja = (int)readline("Masukkan total belanja: ");
$statusMember = readline("Masukkan status member: ");

if ($totalBelanja >= 500000) {
    if ($statusMember === "Ya") {
        echo "Diskon 20%";
    } else {
        echo "Diskon 10%";
    }
} else {
    echo "Tidak Mendapat Diskon.";
}