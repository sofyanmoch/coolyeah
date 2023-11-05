<!DOCTYPE html>
<html>
<head>
    <title>Form Unggah Gambar</title>
    <!-- Tambahkan link CSS Bootstrap -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
    <div class="container mt-5">
        <h2 class="text-center">Unggah Gambar</h2>
        <form action="load.php" method="post" enctype="multipart/form-data">
            <div class="form-group">
                <label for="gambar">Pilih gambar:</label>
                <input type="file" class="form-control-file" name="gambar" id="gambar">
            </div>
            <button type="submit" name="submit" class="btn btn-primary">Unggah</button>
        </form>
    </div>

    <!-- Tambahkan script Bootstrap JavaScript jika diperlukan -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.3/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
