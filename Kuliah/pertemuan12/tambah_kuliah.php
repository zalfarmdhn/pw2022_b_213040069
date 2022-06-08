<?php
require 'functions_kuliah.php';

// cek apakah tombol tambah sudah diklik
if (isset($_POST["tambah"])) {
    if (tambah($_POST) > 0) {
        echo "  <script>
                    alert('data berhasil ditambahkan!'); 
                    document.location.href = 'index.php';       
                </script>";
    } else {
        echo "  <script>
                    alert('data gagal ditambahkan!');
                    document.location.href = 'index.php';        
                </script>";
    }
}

?>


<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>Tambah Data Mahasiswa</title>
</head>

<body>



    <div class="container">
        <br>
        <h1>Form Tambah Data Mahasiswa</h1>

        <a href="index.php">Kembali ke Daftar Mahasiswa</a>

        <div class="row mt-3">
            <div class="col-8">


                <form action="" method="post" autocomplete="off">
                    <div class="mb-3">
                        <label for="npm" class="form-label">NPM</label>
                        <input type="text" class="form-control" id="npm" name="npm" required maxlength="9" minlength="9" style="width: 150px;">
                    </div>
                    <div class="mb-3">
                        <label for="nama" class="form-label">Nama</label>
                        <input type="text" class="form-control" id="nama" name="nama" required>
                    </div>
                    <div class="mb-3">
                        <label for="email" class="form-label">Email</label>
                        <input type="email" class="form-control" id="email" name="email" required>
                    </div>
                    <div class="mb-3">
                        <label for="jurusan" class="form-label">Jurusan</label>
                        <input type="text" class="form-control" id="jurusan" name="jurusan" required>
                    </div>
                    <div class="mb-3">
                        <label for="gambar" class="form-label">Gambar</label>
                        <input type="text" class="form-control" id="gambar" name="gambar" required>
                    </div>
                    <button type="submit" name="tambah" class="btn btn-primary">Tambah Data Mahasiswa</button>

                </form>

            </div>
        </div>

    </div>

    <script src="https://cdn.jsdelivr.net/nama/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

</body>

</html>