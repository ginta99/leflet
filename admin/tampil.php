<?php 
    require 'koneksi.php';
    $id_lokasi = null;
    if(!empty($_GET['id_lokasi']))
    {
        $id_lokasi = $_GET['id_lokasi'];
    }
    if($id_lokasi == null)
    {
        header("Location: data_lokasi.php");
    }
    else
    {
        // read data
        
        $query = "SELECT * FROM data_lokasi where id_lokasi = $id_lokasi";
		$res    = mysqli_query($con,$query);
		
		$data=mysqli_fetch_array($res);
		
       
    }
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title></title>
    <link rel="stylesheet" href="node_modules/bootstrap/css/bootstrap.min.css">
</head>
<img src="gambar/bener1.png"  style="width: 100%; height: 150px;" align="center">
<nav class="navbar navbar-inverse">
        <div class="container-fluid">
            <a class="navbar-brand"></a>
            <ul class="nav navbar-nav">
                <li class="active">
                </li>
            </ul>
        </div>
    </nav>
<div class=" col-md-3">
    <div class="panel panel-primary">
        <div class="panel-heading">
           <h3 class="panel-title"> <span class="glyphicon glyphicon-home" aria-hidden="true"></span> Menu</h3>
        </div>
        <div class="panel-body">
           <label><a href="Tambahkan_lokasi.php"> <span class="glyphicon glyphicon-plus" aria-hidden="true"></span> Tambahkan Lokasi</a></label>
            <br>
            <label><a href="tambahkan_halte.php"><span class="glyphicon glyphicon-plus" aria-hidden="true"></span> Tambahkan Halte</a></label>
            <br>
            <label><a href="data_lokasi.php"><span class="glyphicon glyphicon-list" aria-hidden="true"></span> Data Lokasi</a></label>
            <br>
            <label><a href="data_halte.php"><span class="glyphicon glyphicon-list" aria-hidden="true"></span> Data Halte</a></label>
            <br>
            <label><a href="admin.php"><span class="glyphicon glyphicon-off" aria-hidden="true"></span> Keluar</a></label></div>
    </div>
</div>
<div class="col-xs-9 col-sm-9 col-md-9 col-lg-9">
    <div class="panel panel-primary">
        <div class="panel-heading">
            <h3 class="panel-title"><span class="glyphicon glyphicon-search" aria-hidden="true"></span>Tampil Data Lokasi</h3>
        </div>
        <div class="panel-body">
            <div class="col-xs-11 col-sm-11 col-md-11 col-lg-11" style="margin-left: 99px;">
          <div class="form-group col-sm-12">
            <label class="col-sm-2 control-label">Nama Halte :</label>
            <div class="col-sm-10">
              <p class="form-control-status-bar"><?php echo $data['nama_lokasi'];?></p>
            </div>
        </div>
        <div class="form-group col-sm-12">
            <label class="col-sm-2 control-label">Latitude :</label>
            <div class="col-sm-10">
              <p class="form-control-status-bar"><?php echo $data['latitude'];?></p>
            </div>
        </div>
        <div class="form-group col-sm-12">
            <label class="col-sm-2 control-label">Logtitude :</label>
            <div class="col-sm-10">
              <p class="form-control-status-bar"><?php echo $data['logtitude'];?></p>
            </div>
        </div>
        <div class="form-group col-sm-12">
            <label class="col-sm-2 control-label">Keterangan alamat  :</label>
            <div class="col-sm-10">
              <p class="form-control-status-bar"><?php echo $data['keterangan'];?></p>
            </div>
        </div>
        <div class="form-group col-sm-12">
            <a class="btn btn btn-default" href="data_lokasi.php">Back</a>
        </div>
    </div>                
<nav class="navbar navbar-default navbar-fixed-bottom" role="navigation">

        <img src="gambar/footer.png"  style="width: 100%; height: 70px;" >

</nav>
</body>
</html>