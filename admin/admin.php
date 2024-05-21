<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Buku Tamu Sekolah</title>
    <link rel="stylesheet" href="../css/bootstrap.min.css">
</head>
<body>
    
    <div class="container mt-5">
        
        <h3 class="text-center mb-4">Buku Tamu Sekolah</h3>
        
        <div class="alert alert-info text-center">
            Anda Login Sebagai <b>ADMINISTRATOR</b> 
        </div>

        <div class="alert d-flex justify-content-center mb-4 alert-secondary">
            <a href="admin.php" class="btn btn-primary mx-2">Administrator</a>
            <a href="admin.php?url=petugas" class="btn btn-primary mx-2">Admin</a>
            <a href="admin.php?url=laporan" class="btn btn-primary mx-2">Tamu</a>
            <a href="admin.php?url=logout" class="btn btn-danger mx-2">Logout</a>
        </div>

        <div class="card">
            <div class="card-body">
                
                <!-- isi web  -->
                <?php 
                    $file = @$_GET['url'];
                    if(empty($file)){
                        echo"<h4>Selamat Datang di halaman Administrator.</h4>";
                        echo"Buku Tamu Sekolah digunakan untuk mempermudah dalam mencatat tamu tamu sekolah";
                    } else {
                        include $file.'.php';
                    }
                ?>

            </div>
        </div>

    </div>

    <script src="../js/bootstrap.bundle.min.js"></script>
</body>
</html>
