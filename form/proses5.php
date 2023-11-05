<?php
if (isset($_POST["login"])) {
    $username = $_POST["username"];
    $password = $_POST["password"];
    if ($username == 'root' && $password == 'root') {
        echo "<h2>Login successfully</h2>";
    } else {
        echo "<h2>Login Failed</h2>";
    }
}
