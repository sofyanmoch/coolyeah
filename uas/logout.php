<?php
session_start();

// Hapus session
if (isset($_SESSION['login'])) {
    unset($_SESSION['login']);
    session_destroy();

    // Hapus cookie "remember_user"
    if (isset($_COOKIE['remember_user'])) {
        setcookie("remember_user", "", time() - 3600, "/");
    }

    echo '<!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Logout</title>
        <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    </head>
    <body class="bg-gray-100 min-h-screen flex items-center justify-center">
        <div class="bg-white p-8 rounded shadow-md max-w-md w-full">
            <h1 class="text-2xl font-semibold mb-4">Anda sudah berhasil LOGOUT</h1>
            <h2 class="text-gray-700 mb-4">
                Klik <a href="index.php" class="text-blue-500">di sini</a> untuk LOGIN kembali.
                Anda akan diarahkan ke halaman login dalam beberapa detik.
            </h2>
            <h2 class="text-gray-700">
                Jika tidak diarahkan, klik <a href="index.php" class="text-blue-500">di sini</a>.
            </h2>
        </div>
        <script>
            setTimeout(function() {
                window.location.href = "index.php";
            }, 4000); // Redirect ke halaman login dalam 5 detik
        </script>
    </body>
    </html>';
} else {
    // Jika belum login, kembalikan ke halaman login
    header("Location: index.php");
    exit();
}
?>
