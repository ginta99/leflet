<?php
   include '../database/koneksi.php';
   $query = mysql_query("SELECT * FROM data_lokasi") or die(mysql_error());
   $i = 1;
 ?>

<!DOCTYPE html>
<html>
<head>
   <meta charset="utf-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <title></title>
   <link rel="stylesheet" href="../node_modules/bootstrap/dist/css/bootstrap.min.css">
   <script type="text/javascript" src="../node_modules/jquery/dist/jquery.min.js"></script>
   <script type="text/javascript" src="../node_modules/bootstrap/dist/js/bootstrap.min.js"></script>
   <script type="text/javascript" src="../node_modules/leaflet/leaflet.js"></script>
</head>
<body>
   <div class="container-fluid">
      <div class="panel panel-primary">
         <div class="panel-heading">
            <h3 class="panel-title">Panel title</h3>
         </div>
         <div class="panel-body">
            <table class="table table-hover">
               <thead>
                  <tr>
                     <th>No</th>
                     <th>Nama Halte</th>
                     <th>Latitude</th>
                     <th>Longitude</th>
                     <!-- <th>Keterangan Trayek Bus</th> -->
                     <th colspan="2">Action</th>
                  </tr>
               </thead>
               <tbody>
                  <?php while ($row = mysql_fetch_array($query)): ?>
                  <tr>
                     <td><?php echo $i++; ?></td>
                     <td><?php echo $row['nama_halte']; ?></td>
                     <td><?php echo $row['latitude']; ?></td>
                     <td><?php echo $row['logtitude']; ?></td>
                     <!-- <td><?php echo $row['keterangan']; ?></td> -->
                     <td>
                        <a class="btn btn-sm btn-success" href="#" role="button">button</a>
                        <a class="btn btn-sm btn-danger" href="#" role="button">button</a>
                     </td>
                  </tr>
                  <?php endwhile ?>
               </tbody>
            </table>
         </div>
      </div>
   </div>
</body>
</html>
