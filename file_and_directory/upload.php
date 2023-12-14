<?php
if (isset($_POST['Upload'])) {
$dir_upload = "images/";
$nama_file = $_FILES['file']['name'];
if (is_uploaded_file($_FILES['file']['tmp_name'])){ $cek = move_uploaded_file ($_FILES['file']['tmp_name'], $dir_upload.$nama_file);
if ($cek) { die ("File berhasil diupload");
} else {
 die ("File gagal diupload");
}
}
}
?>