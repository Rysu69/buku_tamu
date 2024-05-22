<?php 
$id = $_GET['id'];
include '../conn.php';
$sql = "select*from tamu where id='$id'";
    $query = mysqli_query($koneksi, $sql);
    $data = mysqli_fetch_array($query);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Data Buku</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <style>
        body {
            background-color: #f8f9fa;
        }
    </style>
</head>
<body></body>
<h5>Halaman Edit Buku.</h5>
<a href="?url=buku" class="btn btn-primary"><i class="fa fa-arrow-left"></i> KEMBALI </a>
<hr>
<form action="?url=proses-edit-buku&id=<?= $id; ?>" method="post">
    <div class="form-group mb-2">
        <label>Nama</label>
        <input value="<?= $data['nama'] ?>" type="text" name="nama" class="form-control" required>
    </div>
    <div class="form-group mb-2">
        <label>Email / NoTelp</label>
        <input value="<?= $data['hubung'] ?>" type="text" name="hubung" class="form-control" required>
    </div>
    <div class="form-group mb-2">
        <label>Asal</label>
        <input value="<?= $data['asal'] ?>" type="text" name="asal" class="form-control" required>
    </div>
    <div class="form-group mb-2">
        <label>Pekerjaan</label>
        <input value="<?= $data['pekerjaan'] ?>" type="text" name="pekerjaan" class="form-control" required>
    </div>
    <div class="form-group mb-2">
        <label>Keperluan</label>
        <input value="<?= $data['keperluan'] ?>" type="text" name="keperluan" class="form-control" required>
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
