<?php 

$username = $_POST['username'];
$password = $_POST['password'];

include 'conn.php';
$sql = "SELECT*FROM petugas WHERE username='$username' AND password='$password'";
$query=mysqli_query($koneksi,$sql);
if(mysqli_num_rows($query)>0){
    session_start();
    $data = mysqli_fetch_array($query);
    $_SESSION['username']=$data['username'];
    $_SESSION['password']=$data['password'];

    header('Location:admin/admin.php');
} else {
    echo "<script> alert('Maaf Anda Gagal Login, Silahkan Ulangi Lagi'); window.Location.assign('index.php'); </script>";
}
?>