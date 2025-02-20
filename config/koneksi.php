<?php 

$conn = mysqli_connect('localhost', 'root', '', 'db_inventory_zaki');

if(!$conn){
    die("koneksi gagal". mysqli_connect_error());
}
