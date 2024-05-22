<?php 
$id = $_GET['id'];
$nama = $_POST['nama'];
$hubung = $_POST['hubung'];
$asal = $_POST['asal'];
$pekerjaan = $_POST['pekerjaan'];
$keperluan = $_POST['keperluan'];

include '../conn.php';
$sql = "UPDATE tamu SET nama='$nama', hubung='$hubung' , asal='$asal', pekerjaan='$pekerjaan', keperluan='$keperluan' WHERE id='$id'";
$query = mysqli_query($koneksi,$sql);
if ($query){
    header("Location:?url=buku");
} else {
    echo "<script>
    alert('Maaf Data Tidak Tersimpan');
    window.location.assign('?url=buku');
    </script>";
}
?>