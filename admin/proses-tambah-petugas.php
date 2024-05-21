<?php 

$username = $_POST['username'];
$password = $_POST['password'];

include'../conn.php';
$sql = "INSERT INTO petugas(username,password) VALUES('$username','$password')";
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