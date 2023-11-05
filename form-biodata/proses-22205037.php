<!DOCTYPE html>
<html>
<head>
    <title>Hasil Biodata</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
<div class="container">
    <h2 class="mt-4">Hasil Biodata</h2>
    <div class="card mt-4">
        <div class="card-body">
            <p><strong>No Identitas:</strong> <?php echo $_POST['no_identitas']; ?></p>
            <p><strong>Nama:</strong> <?php echo $_POST['nama']; ?></p>
            <p><strong>Tempat Lahir:</strong> <?php echo $_POST['tempat_lahir']; ?></p>
            <p><strong>Tanggal Lahir:</strong> <?php echo $_POST['tanggal_lahir']; ?></p>
            <p><strong>Jenis Kelamin:</strong> <?php echo $_POST['jenis_kelamin']; ?></p>
            <p><strong>Hobby:</strong> <?php
                if (isset($_POST['hobby']) && is_array($_POST['hobby'])) {
                    echo implode(', ', $_POST['hobby']);
                }
            ?></p>
            <p><strong>Alamat:</strong> <?php echo $_POST['alamat']; ?></p>
            <p><strong>Username:</strong> <?php echo $_POST['username']; ?></p>
            <p><strong>Password:</strong> <?php echo $_POST['password']; ?></p>
            <?php
            if (isset($_FILES['pas_foto'])) {
                $file_name = $_FILES['pas_foto']['name'];
                $file_tmp = $_FILES['pas_foto']['tmp_name'];
                $file_destination = "uploads/" . $file_name;
                move_uploaded_file($file_tmp, $file_destination);

                echo "<p><strong>Pas Foto:</strong></p>";
                echo "<img src='$file_destination' class='img-thumbnail' width='150' />";
            }
            ?>
        </div>
    </div>
</div>
</body>
</html>
