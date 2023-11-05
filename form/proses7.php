<?php
if (isset($_POST["Pilih"])) {
    echo "Band Favoritmu adalah : <br>";
    if (isset($_POST["band01"])) {
        echo "+" . $_POST["band01"] . "<br>";
    }
    if (isset($_POST["band02"])) {
        echo "+" . $_POST["band02"] . "<br>";
    }
    if (isset($_POST["band03"])) {
        echo "+" . $_POST["band03"] . "<br>";
    }
    if (isset($_POST["band04"])) {
        echo "+" . $_POST["band04"] . "<br>";
    }
}
?>
