<?php
function tambahString(&$str) {
    $str = $str . ", Jakarta";
    return $str;
}

$str = "Universitas Budi Luhur";
echo "\$str = $str <br>";
echo tambahString($str) . "<br>";
echo "\$str = $str <br>";
?>