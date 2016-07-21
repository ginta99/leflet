<?php
   include 'database/koneksi.php';

 ?>

<!DOCTYPE html>
<html>
<head>
   <meta charset="utf-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <title></title>
   <link rel="stylesheet" href="node_modules/bootstrap/dist/css/bootstrap.min.css">
   <style type="text/css" media="screen">

   </style>
   <script type="text/javascript" src="node_modules/jquery/dist/jquery.min.js"></script>
   <script type="text/javascript" src="node_modules/bootstrap/dist/js/bootstrap.min.js"></script>
   <script type="text/javascript" src="node_modules/leaflet/leaflet.js"></script>
   <link rel="stylesheet" href="http://cdn.leafletjs.com/leaflet-0.7.3/leaflet.css" />
   <link rel="stylesheet" href="node_modules/leaflet-routing-machine/dist/leaflet-routing-machine.css" />
   <script src="http://cdn.leafletjs.com/leaflet-0.7.3/leaflet.js"></script>
   <script src="node_modules/leaflet-routing-machine/dist/leaflet-routing-machine.js"></script>
</head>
<body>
   <nav class="navbar navbar-inverse" role="navigation">
      <div class="container-fluid">
         <!-- Brand and toggle get grouped for better mobile display -->
         <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
               <span class="sr-only">Toggle navigation</span>
               <span class="icon-bar"></span>
               <span class="icon-bar"></span>
               <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="#">Aplikasi Pencarian Halte Bus Yogyakarta</a>
         </div>

         <!-- Collect the nav links, forms, and other content for toggling -->
         <div class="collapse navbar-collapse navbar-ex1-collapse">
            <ul class="nav navbar-nav navbar-right">
               <li><a href="index.php"><span class="glyphicon glyphicon-search" aria-hidden="true"></span> Pencarian Halte</a></li>
               <li><a href="rute_halte.php"><span class="glyphicon glyphicon-flag" aria-hidden="true"></span> Tujuan Halte</a></li>
              </ul>
         </div><!-- /.navbar-collapse -->
      </div>
   </nav>
   <div class="col-md-4 ">
      <div class="panel panel-default">
         <div class="panel-body">
            <form action="" method="POST" >
               <div class="form-group">
                  <label ><span class="glyphicon glyphicon-map-marker" aria-hidden="true"></span> Tujuan Halte Awal</label>
                  <select name="awal" class="form-control" required="required">
                     <option value="" selected>Cari Tujuan Awal</option>
                     <?php
                     $query = mysql_query("SELECT * FROM data_halte") or die(mysql_error());
                        while($y=mysql_fetch_array($query)) {
                        $id=$y['id_halte'];  $nama=$y['nama_halte'];
                           echo  " <option value=$id >$nama</option>";
                        }
                      ?>
                  </select>
               </div>
               <div class="form-group">
                  <label ><span class="glyphicon glyphicon-map-marker" aria-hidden="true"></span> Tujuan Halte Akhir</label>
                  <select name="akhir" class="form-control" required="required">
                     <option value="" selected>Cari Tujuan Akhir</option>
                     <?php
                       $query = mysql_query("SELECT * FROM data_halte") or die(mysql_error());
                        while($y=mysql_fetch_array($query)) {
                        $id=$y['id_halte'];  $nama=$y['nama_halte'];
                           echo  " <option value=$id >$nama</option>";
                        }
                      ?>
                  </select>
               </div>
               <button type="submit" class="btn btn-primary">Submit</button>
            </form>
         </div>
      </div>
      <?php
         if ($_POST) {
            $awal = $_POST['awal'];
            $akhir = $_POST['akhir'];
            $x1=mysql_query("SELECT * FROM data_halte where id_halte='$awal'");
            $y1=mysql_fetch_array($x1);
            $asal_lat= $y1['latitude'];
            $asal_lng= $y1['logtitude'];
            $asal_nama=$y1['nama_halte'];
            $asal_keterangan = $y1['keterangan'];
            // echo "$asal_keterangan<br>";
            echo "
                  <div class='panel panel-info'>
                     <div class='panel-heading'>
                        <h3 class='panel-title'><span class='glyphicon glyphicon-map-marker' aria-hidden='true'></span> Lokasi Halte Awal</h3>
                     </div>
                     <div class='panel-body'>
                      $asal_nama<br>
                      Mengunakan Bus trans :  $asal_keterangan
                     </div>
                  </div>
            ";

            $x2=mysql_query("SELECT * FROM data_halte where id_halte='$akhir'");
            $y1=mysql_fetch_array($x2);
            $tujuan_lat= $y1['latitude'];
            $tujuan_lng= $y1['logtitude'];
            $asal_nama=$y1['nama_halte'];
            $tujuan_keterangan = $y1['keterangan'];
            // echo "$tujuan_keterangan";
            echo "
                  <div class='panel panel-info'>
                     <div class='panel-heading'>
                        <h3 class='panel-title'><span class='glyphicon glyphicon-map-marker' aria-hidden='true'></span> Lokasi Halte Akhir</h3>
                     </div>
                     <div class='panel-body'>
                        $asal_nama<br>
                       Pindah Bus trans :  $tujuan_keterangan
                     </div>
                  </div>
            ";
         }
      ?>

      <script type="text/javascript">
         var asal_lat="<?php echo $asal_lat; ?>";
         var asal_lng="<?php echo $asal_lng; ?>";
         var tujuan_lat="<?php echo $tujuan_lat; ?>";
         var tujuan_lng="<?php echo $tujuan_lng; ?>";
         console.log(asal_lat);
         console.log(asal_lng);
         console.log(tujuan_lat);
         console.log(tujuan_lng);
      </script>
   </div>
   <div class="col-md-8">
      <div class="panel panel-default">
         <div class="panel-body">
            <div id="map" class="map" style="height: 660px;"></div>
         </div>
      </div>
   </div>
</body>

<script src="http://cdn.leafletjs.com/leaflet-0.7.3/leaflet.js"></script>
    <script src="node_modules/leaflet-routing-machine/dist/leaflet-routing-machine.js"></script>
    <script>
        var map = L.map('map');
        

        L.tileLayer('http://{s}.tile.osm.org/{z}/{x}/{y}.png', {
            attribution: '© OpenStreetMap contributors'
        }).addTo(map);

        L.Routing.control({
            waypoints: [
                L.latLng(asal_lat , asal_lng),
                L.latLng(tujuan_lat , tujuan_lng)
            ],
            routeWhileDragging: true
        }).addTo(map);
        L.Routing.errorControl(control).addTo(map);
    </script>
</html>
