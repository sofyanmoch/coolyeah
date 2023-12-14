<?php
//buat direktori
$dir = "include"; //nama direktori
$cek = mkdir($dir);
if ($cek) {
    echo "Direktori <b>$dir</b> berhasil dibuat";
} else {
    echo "Direktori <b>$dir</b> gagal dibuat";
} //hapus direktori
$del = rmdir($dir);
if ($del) {
    echo "<br>Direktori <b>$dir</b> berhasil dihapus";
} else {
    echo "<br>Direktori <b>$dir</b> gagal dihapus";
}
?>