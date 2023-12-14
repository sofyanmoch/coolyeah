<?php
function cetakGanjil ($awal, $akhir) {
    for($i=$awal; $i < $akhir; $i++) {
        if ($i%2 == 1) {
            echo "$i ";
        }
    }
}

$a = 10;
$b = 50;
echo "Bilangan ganjil dari $a sampai $b : <br>";
cetakGanjil($a, $b);
?>