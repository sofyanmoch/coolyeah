<?php
session_start();

// Periksa apakah user sudah login
if (isset($_SESSION['login'])) {
    $username = $_SESSION['login'];
} else {
    // Jika belum login, kembalikan ke halaman login
    header("Location: index.php");
    exit();
}

// Proses perhitungan kalkulator jika formulir dikirim
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $num1 = $_POST['num1'];
    $num2 = $_POST['num2'];
    $operation = $_POST['operation'];
    $result = calculate($num1, $num2, $operation);

    // Simpan riwayat perhitungan dalam session
    $historyItem = "$num1 $operation $num2 = $result";
    if (!isset($_SESSION['history'])) {
        $_SESSION['history'] = [];
    }
    array_unshift($_SESSION['history'], $historyItem);
}

// Fungsi kalkulator
function tambah($num1, $num2) {
    return $num1 + $num2;
}

function kurang($num1, $num2) {
    return $num1 - $num2;
}

function kali($num1, $num2) {
    return $num1 * $num2;
}

function bagi($num1, $num2) {
    if ($num2 != 0) {
        return $num1 / $num2;
    } else {
        return "Error: Nilai harus lebih besar dari 0";
    }
}

// Fungsi untuk memanggil fungsi perhitungan sesuai operasi yang dipilih
function calculate($num1, $num2, $operation) {
    switch ($operation) {
        case 'tambah':
            return tambah($num1, $num2);
        case 'kurang':
            return kurang($num1, $num2);
        case 'kali':
            return kali($num1, $num2);
        case 'bagi':
            return bagi($num1, $num2);
        default:
            return "Invalid operation";
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Selamat Datang</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>

<body class="bg-gray-100 min-h-screen flex items-center justify-center">
    <div class="bg-white p-8 rounded shadow-md max-w-md w-full">
        <h1 class="text-2xl font-semibold mb-4">Selamat Datang, <?php echo $username; ?>!</h1>

        <!-- Formulir Kalkulator -->
        <form action="calculator.php" method="post">
            <div class="mb-4">
                <label for="num1" class="block text-gray-800">Angka Pertama:</label>
                <input type="number" id="num1" name="num1" class="w-full p-2 border border-gray-300 rounded" required>
            </div>
            <div class="mb-4">
                <label for="operation" class="block text-gray-800">Operasi:</label>
                <select id="operation" name="operation" class="w-full p-2 border border-gray-300 rounded">
                    <option value="tambah">Penjumlahan (+)</option>
                    <option value="kurang">Pengurangan (-)</option>
                    <option value="kali">Perkalian (*)</option>
                    <option value="bagi">Pembagian (/)</option>
                </select>
            </div>
            <div class="mb-4">
                <label for="num2" class="block text-gray-800">Angka Kedua:</label>
                <input type="number" id="num2" name="num2" class="w-full p-2 border border-gray-300 rounded" required>
            </div>
            <button type="submit" class="bg-green-500 text-white px-4 py-2 rounded">Hitung</button>
        </form>

        <?php if (isset($result)) : ?>
            <div class="mt-4">
                <p class="text-center">Hasil: <?php echo $result; ?></p>
            </div>
        <?php endif; ?>

        <?php if (isset($_SESSION['history']) && !empty($_SESSION['history'])) : ?>
            <div class="mt-8">
                <h2 class="text-xl font-semibold mb-2">Riwayat Perhitungan</h2>
                <ul>
                    <?php foreach ($_SESSION['history'] as $historyItem) : ?>
                        <li><?php echo $historyItem; ?></li>
                    <?php endforeach; ?>
                </ul>
            </div>
        <?php endif; ?>

        <div class="mt-8">
            <a href="logout.php" class="text-blue-500">Logout</a>
        </div>

    </div>
</body>

</html>
