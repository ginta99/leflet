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
   <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
   <script type="text/javascript" src="node_modules/bootstrap/dist/js/bootstrap.min.js"></script>
   <link rel="stylesheet" href="node_modules/bootstrap/css/bootstrap.min.css">
   <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.6.1/css/font-awesome.min.css" rel="stylesheet">
    <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/leaflet/0.7.7/leaflet.css" />
    <link rel="stylesheet" href="leflet/dist/L.Control.Locate.min.css" />
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
            <form action="pencarian.php" method="POST" >
               <div class="form-group">
                  <label ><span class="glyphicon glyphicon-map-marker" aria-hidden="true"></span> Lokasi Awal</label>
                  <select name="awal" class="form-control" required="required">
                     <option value="Null" rel="null">-- Lokasi Awal --</option>
                     <?php
                     $query = mysql_query("SELECT * FROM data_lokasi") or die(mysql_error());
                        while($y=mysql_fetch_array($query)) {
                        $id=$y['id_lokasi'];  $nama=$y['nama_lokasi'] ; 
                           echo  " <option value=$id rel=$id>$nama</option>";
                        }
                      ?>
                  </select>
               </div>
               <div class="form-group">
                  <label ><span class="glyphicon glyphicon-map-marker" aria-hidden="true"></span> Tujuan Halte </label>
                  <select name="akhir" class="form-control" required="required">
                     <option value="Null" class="null">-- Lokasi Halte --</option>
                     <?php
                     $sql = "SELECT * FROM data_halte";
                     $query = mysql_query($sql);
                     ?>
                        <?php while ($row = mysql_fetch_array($query)): ?>
                        <option value="<?php echo $row['id_halte']; ?>" class="<?php echo $row['id_lokasi'] ?>"><?php echo $row['nama_halte']; ?></option>
                        <?php endwhile ?>
                  </select>
               </div>
               <button type="submit" class="btn btn-primary">Submit</button>
            </form>
         </div>
      </div>
     

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
            <div id="map" class="map" style="height: 612px;"></div>
         </div>
      </div>
   </div>
</body>

</html>

<script src="//cdnjs.cloudflare.com/ajax/libs/leaflet/0.7.7/leaflet.js"></script>
    <script src="leflet/src/L.Control.Locate.js" ></script>
    <script src="leflet/script.js"></script>
     <script type="text/javascript">
   $(document).ready(function(){
    var $cat = $('select[name=awal]'),
        $items = $('select[name=akhir]');

    $cat.change(function(){
        var $this = $(this).find(':selected'),
            rel = $this.attr('rel'),
            $set = $items.find('option.' + rel);

        if ($set.size() < 0) {
            $items.hide();
            return;
        }

        $items.show().find('option').hide();

        $set.show().first().prop('selected', true);
    });
});
</script>