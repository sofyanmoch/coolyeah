<?php
if (isset($_POST['submit'])) {
    $targetDir = "uploads/"; // Folder where the image will be uploaded
    $targetFile = $targetDir . basename($_FILES["gambar"]["name"]); // Target file name

    // Check if the uploaded file is an image
    $imageFileType = strtolower(pathinfo($targetFile, PATHINFO_EXTENSION));
    $allowedExtensions = array("jpg", "jpeg", "png", "gif");

    if (in_array($imageFileType, $allowedExtensions)) {
        // try to upload image
        if (move_uploaded_file($_FILES["gambar"]["tmp_name"], $targetFile)) {
            $uploadedImage = $targetFile;
        } else {
            $errorMessage = "Maaf, terjadi kesalahan saat mengunggah berkas.";
        }
    } else {
        $errorMessage = "Maaf, hanya berkas gambar dengan ekstensi JPG, JPEG, PNG, dan GIF yang diperbolehkan.";
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Gambar yang Diunggah</title>
    <!-- Tambahkan link CSS Bootstrap -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
    <div class="container mt-5">
        <?php if (isset($uploadedImage)): ?>
            <h2 class="text-center">Gambar yang Diunggah</h2>
            <div class="text-center">
                <img src="<?= $uploadedImage ?>" alt="Gambar yang Diunggah" class="img-thumbnail">
            </div>
        <?php else: ?>
            <h2 class="text-center">Unggah Gambar</h2>
            <p class="text-center"><?= isset($errorMessage) ? $errorMessage : "" ?></p>
            <div class="text-center">
                <a href="upload.php" class="btn btn-primary">Kembali ke Form Unggah</a>
            </div>
        <?php endif; ?>
    </div>

    <!-- Tambahkan script Bootstrap JavaScript jika diperlukan -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.3/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
