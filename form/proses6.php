<?php
if (isset($_POST["Pilih"])) {
    $jurusan = $_POST['jurusan'];
    echo "Jurusan anda adalah <b><font color='red'>$jurusan</font></b>";
}
?>