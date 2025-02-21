<?php 

$id_barang = $_GET['id_barang'];
$nama = $_POST['nama'];
$id_jenis = $_POST['id_jenis'];
$harga = $_POST['harga'];
$stok = $_POST['stok'];


include '../../config/koneksi.php';

$query = mysqli_query($conn,"UPDATE barang SET nama='$nama', harga='$harga', stok='$stok' WHERE id_barang='$id_barang'");

if($query){
    echo "<script>alert('Edit berhasil')</script>";
    echo "<script>window.location.href='index.php'</script>";
}else{
    echo "<script>alert('Edit gagal')</script>";
    echo "<script>window.location.href='tambah.php'</script>";
}