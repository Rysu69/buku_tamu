<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Data Petugas</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <style>
        body {
            background-color: #f8f9fa;
        }
    </style>
</head>
<body>
<h5>Isi Buku Tamu.</h5>
<hr>
<form action="?url=proses-isi-buku" method="post">
    <div class="form-group mb-2">
        <label>Nama</label>
        <input type="text" name="nama" class="form-control" required>
    </div>
    <div class="form-group mb-2">
        <label>Email / NoTelp</label>
        <input type="text" name="hubung" class="form-control" required>
    </div>
    <div class="form-group mb-2">
        <label>Asal</label>
        <input type="text" name="asal" class="form-control" required>
    </div>
    <div class="form-group mb-2">
        <label>Pekerjaan</label>
        <input type="text" name="pekerjaan" class="form-control" required>
    </div>
    <div class="form-group mb-2">
        <label>Keperluan</label>
        <input type="text" name="keperluan" class="form-control" required>
    </div>
    <div class="form-group">
 <button class="btn btn-success" type="submit"> <i class="fas fa-edit"></i> SIMPAN </button>
        <button class="btn btn-warning" type="reset"> <i class="fas fa-trash"></i>KOSONGKAN </button>
    </div>
</form>


<script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/js/all.min.js"></script>
<script src="../js/bootstrap.bundle.min.js"></script>
</body>
</html>
