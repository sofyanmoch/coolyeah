<!DOCTYPE html>
<html>
<head>
    <title>Hasil Perhitungan Grade Nilai Mahasiswa</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <style>
        body {
            background-color: #f5f5f5;
            font-family: Arial, sans-serif;
        }

        .container {
            max-width: 400px;
            background: #fff;
            padding: 20px;
            border-radius: 5px;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
            margin: 0 auto;
            margin-top: 50px;
        }

        .container h1 {
            text-align: center;
            margin-bottom: 20px;
        }

        .form-group {
            margin-bottom: 20px;
        }

        .form-group label {
            font-weight: bold;
        }

        .btn-primary {
            width: 100%;
            background-color: #4a90e2;
            border: none;
        }

        .btn-primary:hover {
            background-color: #357abf;
        }

        .btn-secondary {
            width: 100%;
            background-color: #f5f5f5;
            color: #333;
            border: none;
        }

        .btn-secondary:hover {
            background-color: #ccc;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Hasil Perhitungan Grade Nilai Mahasiswa</h1>

        <?php
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $nim = $_POST['nim'];
            $nama = $_POST['nama'];
            $nilai = $_POST['nilai'];

            $grade = '';

            if ($nilai >= 81 && $nilai <= 100) {
                $grade = 'A (Lulus)';
            } elseif ($nilai >= 61 && $nilai <= 80.99) {
                $grade = 'B (Lulus)';
            } elseif ($nilai >= 41 && $nilai <= 60.99) {
                $grade = 'C (Lulus)';
            } elseif ($nilai >= 21 && $nilai <= 40.99) {
                $grade = 'D (Tidak Lulus)';
            } elseif ($nilai >= 0 && $nilai <= 20.99) {
                $grade = 'E (Tidak Lulus)';
            } else {
                $grade = 'Nilai tidak valid';
            }

            echo "<p style='color: red;'>NIM: $nim</p>";
            echo "<p>Nama Mahasiswa: $nama</p>";
            echo "<p>Nilai: $nilai</p>";
            echo "<p>Grade: $grade</p>";
        }
        ?>

        <form method="post" action="hitung.php">
            <button type="submit" class="btn btn-secondary">Ulangi</button>
        </form>
    </div>
    
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
</body>
</html>
