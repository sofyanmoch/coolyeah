<?php
function tambahString($str) {
    $str = $str . ", Jakarta";
    return $str;
}

$str = 'Universitas Budi Luhur';
echo tambahString($str);
?>