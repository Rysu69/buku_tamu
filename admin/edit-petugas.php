<?php 
$id = $_GET['id'];
include '../conn.php';
$sql = "select*from petugas where id='$id'";
    $query = mysqli_query($koneksi, $sql);
    $data = mysqli_fetch_array($query);
?>
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
<body></body>
<h5>Halaman Edit Petugas.</h5>
<a href="?url=petugas" class="btn btn-primary"><i class="fa fa-arrow-left"></i> KEMBALI </a>
<hr>
<form action="?url=proses-edit-petugas&id=<?= $id; ?>" method="post">
    <div class="form-group mb-2">
        <label>Username</label>
        <input value="<?= $data['username'] ?>" type="text" name="username" class="form-control" required>
    </div>
    <div class="form-group mb-2">
        <label>password</label>
        <input value="<?= $data['password'] ?>" type="text" name="password" class="form-control" required>
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
