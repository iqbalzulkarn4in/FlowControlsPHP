<?php
$nilai = "A";

switch ($nilai) {
    case "A":
    case "B":
        echo "Lulus";
        break;
    case "C":
        echo "Remedial";
        break;
    default:
        echo "Tidak lulus";
}
?>