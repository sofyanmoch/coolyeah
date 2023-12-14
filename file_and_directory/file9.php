<?php
$file = "data.txt";
$filebaru = "databaru.txt";
$filebaru2 = "databaru2.txt";
if (copy ($file, $filebaru)) {
echo "File <b>$file</b> berhasil dicopy menjadi <b>$filebaru</b>. <br>";
}
if (rename ($filebaru, $filebaru2)) {
echo "File <b>$filebaru</b> berhasil direname menjadi <b>$filebaru2</b>. <br>";
}
if (unlink ($filebaru2)) {
echo "File <b>$filebaru2</b> berhasil dihapus. <br>"; }?>