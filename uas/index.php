<?php
session_start();

// Fungsi untuk mengeset cookie
function setRememberCookie($username) {
    $expiry = time() + (30 * 24 * 3600); // Cookie berlaku selama 30 hari
    setcookie("remember_user", $username, $expiry, "/");
}

// Fungsi untuk menghapus cookie
function clearRememberCookie() {
    setcookie("remember_user", "", time() - 3600, "/");
}

// Cek apakah user sudah login sebelumnya menggunakan cookie
if (isset($_COOKIE['remember_user'])) {
    $_SESSION['login'] = $_COOKIE['remember_user'];
    header("Location: calculator.php");
    exit();
}

if (isset($_POST['Login'])) {
    $user = $_POST['user'];
    $pass = $_POST['pass'];
    
    // Periksa login
    if ($user == "opdev" && $pass == "123") {
        // Menciptakan session
        $_SESSION['login'] = $user;
        
        // Cek opsi "Ingat Saya"
        if (isset($_POST['remember'])) {
            setRememberCookie($user);
        } else {
            clearRememberCookie();
        }

        // Menuju ke halaman pemeriksaan session
        header("Location: calculator.php");
        exit();
    } else {
        $errorMessage = "Login Gagal";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login here...</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="bg-gray-100 min-h-screen flex items-center justify-center">
    <div class="bg-white p-8 rounded shadow-md max-w-md w-full">
        <form action="" method="post">
            <?php
            if (isset($errorMessage)) {
                echo '<p class="text-red-500 mb-4">' . $errorMessage . '</p>';
            }
            ?>
            <h2 class="text-2xl font-semibold mb-4">Login</h2> 
            <div class="mb-4">
                <label for="user" class="block text-gray-800">Username:</label>
                <input type="text" id="user" name="user" class="w-full p-2 border border-gray-300 rounded" required>
            </div>
            <div class="mb-4">
                <label for="pass" class="block text-gray-800">Password:</label>
                <input type="password" id="pass" name="pass" class="w-full p-2 border border-gray-300 rounded" required>
            </div>
            <div class="mb-4">
                <label for="remember" class="flex items-center">
                    <input type="checkbox" id="remember" name="remember" class="mr-2">
                    <span class="text-gray-700">Ingat Saya</span>
                </label>
            </div>
            <button type="submit" name="Login" class="bg-green-500 text-white px-4 py-2 rounded">
                Log In
            </button>
        </form>
    </div>
</body>
</html>
