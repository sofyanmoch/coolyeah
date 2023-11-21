<?php
function hitungLuasPersegi($sisi) {
    return $sisi * $sisi;
}

function hitungKelilingPersegi($sisi) {
    return 4 * $sisi;
}

// Check if form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get input value
    $sisi = $_POST["sisi"];

    if ($sisi > 0) {
        $luas = hitungLuasPersegi($sisi);
        $keliling = hitungKelilingPersegi($sisi);
    } else {
        $error_message = "Masukkan nilai sisi yang valid (angka positif).";
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HITUNG BANGUN DATAR</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" />
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>

<body class="bg-gray-100 min-h-screen flex items-center justify-center">

    <div class="bg-white w-full md:max-w-md h-auto rounded-lg overflow-hidden shadow-md">
        <!-- Header -->
        <div class="text-center py-4 border-b">
            <h1 class="text-lg font-semibold">LUAS DAN KELILING PERSEGI</h1>
        </div>

        <!-- Container -->
        <div class="container p-5 mx-auto">

            <!-- Main content -->
            <form method="post" action="">
                <div class="grid grid-cols-4 gap-4 mb-4">
                    <label for="sisi" class="col-span-1">Panjang Sisi:</label>
                    <input type="number" name="sisi" id="sisi" class="w-full p-2 border border-gray-300 col-span-3" required>
                </div>
                <div class="grid grid-cols-4 gap-4">
                    <div class="col-span-1"></div>
                    <button type="submit" class="bg-blue-500 text-white py-2 px-4 rounded cursor-pointer col-span-1">Hitung</button>
                </div>
            </form>

            <?php if (isset($luas) && isset($keliling)): ?>
                <div class="mt-4 p-4 bg-gray-100 border border-gray-300">
                    <h2 class="font-semibold text-lg">HASIL PERHITUNGAN</h2>
                    <p>Luas Persegi: <?= $luas ?></p>
                    <p>Keliling Persegi: <?= $keliling ?></p>
                </div>
            <?php elseif (isset($error_message)): ?>
                <div class="mt-4 p-4 bg-red-200 border border-red-300">
                    <p><?= $error_message ?></p>
                </div>
            <?php endif; ?>

        </div>

        <!-- Footer -->
        <div class="text-center py-3 border-t">
            <p class="text-xs">
                Made with <i class="fa fa-heart"></i> by
                <a href="https://github.com/sofyanmoch" class="underline">Mochamad Sofyan - 22205037</a>
            </p>
        </div>
    </div>

</body>

</html>


