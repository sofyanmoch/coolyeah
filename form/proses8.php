<?php
if (isset($_POST["Pilih"])) {
    $film = $_POST["kartun"];
    echo "Film kartun favoritmu adalah : <font color='blue'><b>$film</b></font>";
}
?>