<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Buku Tamu</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <style>
        body {
            background-color: #f8f9fa;
        }
        .table {
            background-color: #fff;
            border-radius: 10px;
            box-shadow: 0 0 20px rgba(0, 0, 0, 0.1);
        }
        .table thead th {
            background-color: #007bff;
            color: #fff;
            border-color: #007bff;
        }
        .table-striped tbody tr:nth-of-type(odd) {
            background-color: rgba(0, 123, 255, 0.05);
        }
        .btn-action {
            border-radius: 5px;
            transition: all 0.3s ease-in-out;
        }
        .btn-action:hover {
            transform: translateY(-2px);
        }
    </style>
</head>
<body>

<div class="container">
    <h3 class="mb-3">Halaman Buku Tamu</h3>
    <a href="?url=isi-buku" class="btn btn-primary btn-action mb-3"><i class="fas fa-plus"></i> Isi Buku Tamu</a>
    <hr>
    <div class="table-responsive">
        <table class="table table-striped">
            <thead>
                <tr>
                    <th scope="col">No</th>
                    <th scope="col">Nama</th>
                    <th scope="col">Email / NoTelp</th>
                    <th scope="col">Asal</th>
                    <th scope="col">Pekerjaan</th>
                    <th scope="col">Keperluan</th>
                    <th scope="col">Edit</th>
                    <th scope="col">Hapus</th>
                </tr>
            </thead>
            <tbody>
                <?php 
                include '../conn.php';
                $no = 1;
                $sql = "SELECT * FROM tamu ORDER BY id DESC";
                $query = mysqli_query($koneksi, $sql);
                foreach($query as $data){?>
                    <tr>
                        <td><?= $no++; ?></td>
                        <td><?= $data['nama']; ?></td>
                        <td><?= $data['hubung']; ?></td>
                        <td><?= $data['asal']; ?></td>
                        <td><?= $data['pekerjaan']; ?></td>
                        <td><?= $data['keperluan']; ?></td>
                        <td>
                            <a href="?url=edit-buku&id=<?= $data['id'] ?>" class='btn btn-warning btn-sm btn-action'><i class="fas fa-edit"></i> Edit</a>
                        </td>
                        <td>
                            <a onclick="return confirm('Apakah Anda Yakin Ingin Menghapus Data')" href="?url=hapus-isi-buku&id=<?= $data['id'] ?>" class='btn btn-danger btn-sm btn-action'><i class="fas fa-trash-alt"></i> Hapus</a>
                        </td>
                    </tr>
                <?php } ?>
            </tbody>
        </table>
    </div>
</div>

<script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/js/all.min.js"></script>
<script src="../js/bootstrap.bundle.min.js"></script>
</body>
</html>
