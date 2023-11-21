<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HITUNG BANGUN DATAR</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" />
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>

<style>
    .container {
        height: 400px;
    }
</style>

<body class="bg-gray-100 min-h-screen flex items-center justify-center">
    <div class="bg-white w-full md:max-w-2xl h-400 rounded-lg overflow-hidden shadow-md">
        <!-- Header -->
        <div class="text-center py-4 border-b">
            <h1 class="text-lg font-semibold">PROGRAM MENGHITUNG LUAS DAN KELILING BANGUN DATAR</h1>
        </div>

        <!-- Container -->
        <div class="container flex justify-between p-8">
    <div onclick="redirect('persegi.php')" class="w-1/4 h-16 bg-gray-400 hover:bg-blue-500 cursor-pointer flex items-center justify-center box border border-black">
        <p class="text-white">Persegi</p>
    </div>

    <div onclick="redirect('persegi-panjang.php')" class="w-1/4 h-16 bg-gray-400 hover:bg-blue-500 cursor-pointer flex items-center justify-center box border border-black">
        <p class="text-white">Persegi Panjang</p>
    </div>

    <div onclick="redirect('lingkaran.php')" class="w-1/4 h-16 bg-gray-400 hover:bg-blue-500 cursor-pointer flex items-center justify-center box border border-black">
        <p class="text-white">Lingkaran</p>
    </div>
</div>


        <!-- Footer -->
        <div class="text-center py-3 border-t">
            <p class="text-xs">
                Made with <i class="fa fa-heart"></i> by
                <a href="https://github.com/sofyanmoch" class="underline">Mochamad Sofyan - 22205037</a>
            </p>
        </div>
    </div>

    <script>
        function redirect(target) {
            location.href = target;
        };
    </script>
</body>

</html>
