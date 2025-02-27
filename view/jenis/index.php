<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
    <title>Daftar Inventory</title>
</head>

<body>
<nav class="navbar navbar-expand-lg bg-body-tertiary">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Inventory</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="http://localhost/db_inventory_zaki/view/barang/#">Barang</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="http://localhost/db_inventory_zaki/view/jenis/">Jenis</a>
        </li>
    </div>
  </div>
</nav>
    <div class="container">
    <h1>Daftar Inventory</h1>
    <a href="tambah.php" class="btn btn-primary"><i class="fa-solid fa-plus"></i>Tambah Inventory</a>
    <table class="table table-striped">
  <thead>
    <tr>
    <th >#</th>
      <th >ID Jenis</th>
      <th >Nama Jenis</th>
    </tr>
  </thead>
  <?php
            include '../../config/koneksi.php';
            $query = mysqli_query($conn,"SELECT * FROM jenis");
            $no=1;
            if(mysqli_num_rows($query)){
                while($result=mysqli_fetch_assoc($query)){
                    ?>
                    <tr>
                        <td><?php echo $no ?></td>
                        <td><?php echo $result['id_jenis']?></td>
                        <td><?php echo $result['nama_jenis']?></td>
                        <td>
                            <a href="view_edit.php?id_jenis=<?php echo $result['id_jenis']?>" class="btn btn-warning"><i class="fa-solid fa-pen-to-square"></i>Edit </a>
                            <a href="" class="btn btn-danger"><i class="fa-solid fa-trash"></i>Hapus</a>
                        </td>
                    </tr>
                <?php
                $no++;
                }
            } else{
                echo "Data kosong";
            }
            ?>

</table>
</div>
<script src =  https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js></script>
</body>
</html>