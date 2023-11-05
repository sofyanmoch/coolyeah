<?php
if (isset($_POST['input'])) {
    $name1 = $_POST['name1'];
    $name2 = $_POST['name2'];
    $name3 = $_POST['name3'];
    $name4 = $_POST['name4'];

    echo "<b>Nama Sahabat-sahabat dekatku : </b><br>";
    echo $name1 . "<br>" . $name2 ."<br>". $name3 ."<br>". $name4 ."<br>";
}
?>