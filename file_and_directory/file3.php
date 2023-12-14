<?php
$namafile = "data.txt";
$handle = fopen($namafile, "r");
if (!$handle) {
    echo "<b>File tidak dapat dibuka atau belum ada</b>";
} else {
    $isi = fgets($handle, 2048);
    fclose($handle);
}
?>