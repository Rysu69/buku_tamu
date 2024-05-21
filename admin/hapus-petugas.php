<?php
$id = $_GET['id'];

include '../conn.php';
$sql = "DELETE FROM petugas WHERE id='$id'";
$query = mysqli_query($koneksi, $sql);
if($query){
    header("Location:?url=petugas");
}else{
    echo"<script>alert('Maaf Data Tidak Terhapus'); window.location.assign('?url=petugas');</script>";
}