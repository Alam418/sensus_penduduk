<?php    
 include('../config.php');

 $sql = "SELECT * FROM regions";
 $anu = $koneksi->query($sql);
   ?>
   <?php foreach($anu as $r): ?>
 <?php echo $r  ['name'] ?>
   <?php endforeach; ?>
 <?php  ?>
 