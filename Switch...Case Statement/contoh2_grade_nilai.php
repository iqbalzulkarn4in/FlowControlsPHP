<?php
$grade = "B";

switch ($grade) {
    case "A":
        echo "Sangat Baik";
        break;
    case "B":
        echo "Baik";
        break;
    case "C":
        echo "Cukup";
        break;
    case "D":
        echo "Kurang";
        break;
    default:
        echo "Grade tidak dikenal";
}
?>