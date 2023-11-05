<!DOCTYPE html>
<html>
<head>
    <title>Program hitung grade nilai mahasiswa</title>
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
        <h1>Program hitung grade nilai mahasiswa</h1>
        <form method="post" action="result.php">
            <div class="form-group">
                <label for="nim">NIM:</label>
                <input type="text" class="form-control" id="nim" name="nim" required>
            </div>
            
            <div class="form-group">
                <label for="nama">Nama Mahasiswa:</label>
                <input type="text" class="form-control" id="nama" name="nama" required>
            </div>
            
            <div class="form-group">
                <label for="nilai">Nilai:</label>
                <input type="number" min="1" max="100" class="form-control" id="nilai" name="nilai" required>
            </div>
            
            <button type="submit" class="btn btn-primary">Hitung</button>
        </form>

        <form method="post" action="hitung.php" class="mt-2">
            <button type="submit" class="btn btn-secondary">Reset</button>
        </form>
    </div>
    
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
</body>
</html>
