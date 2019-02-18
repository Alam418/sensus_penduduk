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
if($_POST){
    try {
       $sql = "INSERT INTO regions (id,name) VALUES ('".$_POST['id']."','".$_POST['name']."')";
       if(!$koneksi->query($sql)){
          echo $koneksi->error;
          die();
        }
    } catch (Exception $e) {
      echo $e;
      die();
    }
    echo "<script>
         alert('Data berhasil di simpan');
         window.location.href='index.php?page=index';
         </script>";
}
?>
<div class="row">
     <div class="col-lg-6">
         <form action="" method="POST">
             <div class="form-group">
                 <label>Id</label>
                 <input type="text" value="" class="form-control" name="id">
             </div>
             <div class="form-group">
                 <label>Nama</label>
                 <input type="text" value="" class="form-control" name="name">
             </div>
             <input type="submit" class="btn btn-primary btn-sm" name="create" value="Create">
         </form>
      </div>
</div>
<script src="../js/jquery.min.js"></script>
    <script src="../js/bootstrap.min.js"></script>
  </body>
</html>