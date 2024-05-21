<?php 
$koneksi = mysqli_connect('localhost','root','','db_buku_tamu');

if(!$koneksi){
    echo "Koneksi gagal";
}