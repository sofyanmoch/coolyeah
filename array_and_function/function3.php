<?php
function luasLingkaran ($jariJari) {
    return 3.14 * $jariJari * $jariJari;
}

$r = 10;
echo "Luas lingkaran dengan jari-jari $r = ";
echo luasLingkaran($r);
?>