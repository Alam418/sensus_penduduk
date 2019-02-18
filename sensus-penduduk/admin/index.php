<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Sensus Penduduk</title>

    <link href="../css/bootstrap.min.css" rel="stylesheet">
  </head>
  <body>
<?php
require_once('../config.php');
 
$query = "SELECT * FROM regions";
$urlcrud = "index.php?page=crud/";
?>
<div class="row">
     <div class="col-lg-12">
     <a href="<?= $urlcrud.'create' ?>" class="btn btn-success btn-sm"><span class="glyphicon glyphicon-plus"></span> Tambah</a>
     <table class="table table-hover table-bordered" style="margin-top: 10px">
        <tr class="success">
            <th width="50px">No</th>
            <th>id</th>
            <th>Nama</th>
            <th style="text-align: center;">Actions</th>
        </tr>
     <?php
     if($data=mysqli_query($koneksi,$query)){
        $a=1;
        while($obj=mysqli_fetch_object($data)){
     ?>
        <tr>
            <td><?= $a ?></td>
            <td><?= $obj->id ?></td>
            <td><?= $obj->name ?></td>
            <td style="text-align: center;">
                <a onclick="return confirm('Apakah yakin data akan di hapus?')" href="<?= $urlcrud.'hapus&id='.$obj->id ?>" class="btn btn-danger btn-sm"><span class="glyphicon glyphicon-trash"></span></a>
                <a href="<?= $urlcrud.'edit&id='.$obj->id ?>" class="btn btn-success btn-sm"><span class="glyphicon glyphicon-edit"></span></a>
            </td>
        </tr>
        <?php
        $a++;
        }
     }
     ?>
  </div>
</div>
<script src="../js/jquery.min.js"></script>
    <script src="../js/bootstrap.min.js"></script>
  </body>
</html>