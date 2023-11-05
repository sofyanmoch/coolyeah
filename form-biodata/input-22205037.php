<!DOCTYPE html>
<html>
<head>
    <title>Form Biodata</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
<div class="container my-5">
    <h2 class="text-center">Form Biodata</h2>
    <div class="container">
    <form action="proses-22205037.php" method="post" enctype="multipart/form-data">
        <div class="form-group">
            <label for="no_identitas">No Identitas:</label>
            <input type="text" class="form-control" id="no_identitas" name="no_identitas">
        </div>

        <div class="form-group">
            <label for="nama">Nama:</label>
            <input type="text" class="form-control" id="nama" name="nama">
        </div>

        <div class="form-group">
            <label for="tempat_lahir">Tempat Lahir:</label>
            <input type="text" class="form-control" id="tempat_lahir" name="tempat_lahir">
        </div>

        <div class="form-row">
            <div class="form-group col-md-4">
                <label for="tanggal_lahir">Tanggal Lahir:</label>
                <select class="form-control" id="tanggal_lahir" name="tanggal_lahir">
                    <?php
                    for ($i = 1; $i <= 31; $i++) {
                        echo "<option value='$i'>$i</option>";
                    }
                    ?>
                </select>
            </div>
            <div class="form-group col-md-4">
                <label for="bulan_lahir">Bulan Lahir:</label>
                <select class="form-control" id="bulan_lahir" name="bulan_lahir">
                    <?php
                    $bulan = [
                        "Januari", "Februari", "Maret", "April", "Mei", "Juni",
                        "Juli", "Agustus", "September", "Oktober", "November", "Desember"
                    ];
                    foreach ($bulan as $key => $value) {
                        $month = $key + 1;
                        echo "<option value='$month'>$value</option>";
                    }
                    ?>
                </select>
            </div>
            <div class="form-group col-md-4">
                <label for="tahun_lahir">Tahun Lahir:</label>
                <select class="form-control" id="tahun_lahir" name="tahun_lahir">
                    <?php
                    for ($i = 1980; $i <= 2005; $i++) {
                        echo "<option value='$i'>$i</option>";
                    }
                    ?>
                </select>
            </div>
        </div>


        <div class="form-group">
            <label>Jenis Kelamin:</label><br>
            <div class="form-check-inline">
                <label class="form-check-label">
                    <input type="radio" class="form-check-input" name="jenis_kelamin" value="Laki-laki">Laki-laki
                </label>
            </div>
            <div class="form-check-inline">
                <label class="form-check-label">
                    <input type="radio" class="form-check-input" name="jenis_kelamin" value="Perempuan">Perempuan
                </label>
            </div>
        </div>

        <div class="form-group">
            <label>Hobby:</label><br>
            <div class="form-check">
                <label class="form-check-label">
                    <input type="checkbox" class="form-check-input" name="hobby[]" value="Sepakbola">Membaca
                </label>
            </div>
            <div class="form-check">
                <label class="form-check-label">
                    <input type="checkbox" class="form-check-input" name="hobby[]" value="Gaming">Olahraga
                </label>
            </div>
            <div class="form-check">
                <label class="form-check-label">
                    <input type="checkbox" class="form-check-input" name="hobby[]" value="Memancing">Makan
                </label>
            </div>
        </div>

        <div class="form-group">
            <label for="alamat">Alamat:</label>
            <textarea class="form-control" id="alamat" name="alamat" rows="4"></textarea>
        </div>

        <div class="form-group">
            <label for="username">Username:</label>
            <input type="text" class="form-control" id="username" name="username">
        </div>

        <div class="form-group">
            <label for="password">Password:</label>
            <input type="password" class="form-control" id="password" name="password">
        </div>

        <div class="form-group">
            <label for="pas_foto">Pas Foto:</label>
            <input type="file" class="form-control-file" id="pas_foto" name="pas_foto">
        </div>

        <button type="submit" class="btn btn-primary">Kirim</button>
    </form>
    </div>
</div>
</body>
</html>
