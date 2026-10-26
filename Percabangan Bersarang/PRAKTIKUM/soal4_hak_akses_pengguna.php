<?php
// Nama: Muhammad Iqbal Zulkarnain
// Kelas: X RPL
// Tanggal: 2026-06-30

$role = readline("Masukkan role Anda: ");
$statusAkun = readline("Masukkan status akun: ");

if ($role === "Admin") {
    if ($statusAkun === "Aktif") {
        echo "Akses Penuh.";
    } else {
        echo "Akun Diblokir.";
    }
} elseif ($role === "User") {
    if ($statusAkun === "Aktif") {
        echo "Akses Terbatas.";
    } else {
        echo "Akun Diblokir.";
    }
} else {
    echo "Pilihan Tidak Valid.";
}
?>