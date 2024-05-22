<?php 

$nama = $_POST['nama'];
$hubung = $_POST['hubung'];
$asal = $_POST['asal'];
$pekerjaan = $_POST['pekerjaan'];
$keperluan = $_POST['keperluan'];

include'../conn.php';
$sql = "INSERT INTO tamu (nama,hubung,asal,pekerjaan,keperluan) VALUES('$nama','$hubung','$asal','$pekerjaan','$keperluan')";
$query = mysqli_query($koneksi,$sql);
if ($query){
    header("Location:?url=isi-buku");
} else {
    echo "<script>
    alert('Maaf Data Tidak Tersimpan');
    window.location.assign('?url=isi-buku');
    </script>";
}
?>