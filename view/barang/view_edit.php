<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
    <title>Document</title>
</head>
<body>
    <div class="container">

  <h1>Edit Barang</h1>
  <?php
  $id_barang=$_GET['id_barang'];
  include '../../config/koneksi.php';
  $query=mysqli_query($conn, "SELECT * FROM barang WHERE id_barang='$id_barang'");
  $result=mysqli_fetch_array($query);
  ?>
  
  
  <form action="proses_edit.php?id_barang=<?php echo $result['id_barang']?>" method="post">
  <br>
    <label for="exampleInputEmail1" class="form-label">Nama </label>
    <input type="text" class="form-control" value="<?php echo $result['nama']?>" class="form-text"  name="nama">
  <br>
  <label for="">ID Jenis</label>
  <input type="text" class="form-control" value="<?php echo $result['id_jenis']?> "class="form-text" id="exampleInputEmail1" name="id_jenis" >
  <br>
  <label for="">Harga</label>
  <input type="number" class="form-control" value="<?php echo $result['harga']?>"class="form-text" id="exampleInputEmail1" name="harga" >
  <br>
  <label for="">Stok</label>
  <input type="number" class="form-control" value="<?php echo $result['stok']?>"class="form-text" id="exampleInputEmail1" name="stok" >
  <br>
  <button type="submit" class="btn btn-primary">simpan</button>

</form>
</div>
</body>
</html>