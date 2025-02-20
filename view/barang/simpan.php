<?php 

$id_barang = $_POST['id_barang'];
$nama = $_POST['nama'];
$id_jenis = $_POST['id_jenis'];
$harga = $_POST['harga'];
$stok = $_POST['stok'];


include '../../config/koneksi.php';

$query = mysqli_query($conn,"INSERT INTO barang VALUES('$id_barang','$nama','$id_jenis','$harga','$stok')");

if($query){
    echo "<script>alert('tambah berhasil')</script>";
    echo "<script>window.location.href=index.php</script>";
}else{
    echo "<script>alert('tambah gagal')</script>";
    echo "<script>window.location.href=tambah.php</script>";
}