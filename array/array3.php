<?php
$warna = array("Blue", "Black", "Red", "Yellow", "Green");

echo "Menampilkan isi array warna dengan for : <br>";
for ($i = 0; $i < count($warna); $i++) {
    echo "Do you like <font color=$warna[$i]>$warna[$i]</font> ? <br>";
}

echo "Menampilkan isi array warna dengan foreach : <br>";
foreach ($warna as $colour) {
    echo "Do you like <font color=$colour>$colour</font> ? <br>";
}
?>