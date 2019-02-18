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
        $sql = "UPDATE regions SET id='".$_POST['id']."', name='".$_POST['name']."' WHERE id=".$_POST['id'];
        if ($koneksi->query($sql) === TRUE) {
           echo "<script>
           alert('Data berhasil di update');
           window.location.href='index.php?page=index';
           </script>";
        } else {
           echo "Gagal: " . $koneksi->error;
        }
        $koneksi->close(); 
        }else{
        $query = $koneksi->query("SELECT * FROM regions WHERE id=".$_GET['id']);
        if($query->num_rows > 0){
           $data = mysqli_fetch_object($query);
        }else{
           echo "data tidak tersedia";
           die();
        }
?>
<div class="row">
    <div class="col-lg-6">
         <form action="" method="POST">
         <input type="hidden" name="id" value="<?= $data->id ?>">
         <div class="form-group">
             <label>Id</label>
             <input type="text" value="<?= $data->id ?>" class="form-control" name="id">
         </div>
         <div class="form-group">
             <label>Nama</label>
             <input type="text" value="<?= $data->name ?>" class="form-control" name="name">
         </div>
         </form>
      </div>
</div>
<?php
}
mysqli_close($koneksi);
?>
  </div>
</div>
<script src="../js/jquery.min.js"></script>
    <script src="../js/bootstrap.min.js"></script>
  </body>
</html>