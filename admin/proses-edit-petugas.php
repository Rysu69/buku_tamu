<?php 
$id = $_GET['$id'];
$username = $_POST['username'];
$password = $_POST['password'];

include '../conn.php';
$sql = "UPDATE petugas SET username='$username', password='$password' WHERE id='$id'";
$query = mysqli_query($koneksi,$sql);
if ($query){
    header("Location:?url=petugas");
} else {
    echo "<script>
    alert('Maaf Data Tidak Tersimpan');
    window.location.assign('?url=petugas');
    </script>";
}
?>