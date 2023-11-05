<?php
if (isset($_POST["Proses"])) {
    $saran = nl2br($_POST["saran"]);
    echo "Kritik dan Saranmu adalah : <br>" . "<font color='blue'><b>$saran</b></font>";
}
?>