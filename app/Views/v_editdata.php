<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Load Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <title>Form Edit Data</title>
</head>
<body>
<?php
    foreach ($tampil as $row)
    ?>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-6">
            <div class="text-black">
                <h1>Edit Data</h1>
                <form action="<?php echo base_url('tampil/saveeditData/')?>" method="post">
                    <div class="form-group">
                    <div class="text-black">
                        <label for="nim">Nik</label>
                        <input type="text" placeholder="Masukkan Nik" class="form-control" id="nim" name="nim" required>
                    </div>
                    <div class="form-group">
                    <div class="text-black">
                        <label for="nama">Nama Muzakki</label>
                        <input type="text" placeholder="Masukkan Nama Anda" class="form-control" id="nama" name="nama" required>
                    </div>
                    <div class="form-group">
                    <div class="text-black">
                        <label for="fakultas">Jenis Pembayaran</label>
                        <input type="text" placeholder="Masukkan Jenis Pembayaran" class="form-control" id="fakultas" name="fakultas" required>
                    </div>
                    <div class="form-group">
                    <div class="text-black">
                        <label for="alamat">Nominal</label>
                        <input type="text" placeholder="Nominal min Rp40.000" class="form-control" id="alamat" name="alamat" required>
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                    <button type="reset" class="btn btn-danger">Reset</button>
                </form>

        </div>
    </div>

    <!-- Load Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>