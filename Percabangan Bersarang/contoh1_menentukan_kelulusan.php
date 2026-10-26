<?php
$nilai = 85;

if ($nilai >= 75) {
    echo "Status: Lulus <br>";

    if ($nilai >= 90) {
        echo "Predikat: A";
    } else {
        echo "Predikat: B";
    }
} else {
    echo "Status: Tidak Lulus";
}
?>