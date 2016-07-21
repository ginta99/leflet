<?php 
    if ( !empty($_POST)) {
        require 'koneksi.php';
        // validation errors
       
        $namaError     = null;
        $lintangError       = null;
        $bujurError    = null;
        $keteranganError    = null;

        // post values
      
        $nama = $_POST['nama_lokasi'];
        $lintang    = $_POST['lintang'];
        $bujur = $_POST['bujur'];
        $keterangan = $_POST['keterangan'];
        
        // validate input
        $valid = true;
        if(empty($nama)) {
            $namaError = 'Please enter nama';
            $valid = false;
        }
        
        if(empty($lintang)) {
            $lintangError = 'Please enter lintang';
            $valid = false;
        }
        
        if(empty($bujur)) {
            $bujurError = 'Please select bujur';
            $valid = false;
        }
         if(empty($keterangan)) {
            $keteranganError = 'Please select keterangan';
            $valid = false;
        }
        
        // insert data
        if ($valid) {
            
            mysqli_query($con,"INSERT INTO data_lokasi Values('','$nama','$lintang','$bujur','$keterangan')");
			header("Location: data_lokasi.php");
			
			
        }
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
			<h3 class="panel-title"><span class="glyphicon glyphicon-plus" aria-hidden="true"></span> Tambambahkan Data Lokasi</h3>
		</div>
		<div class="panel-body">
			<div class="col-xs-11 col-sm-11 col-md-11 col-lg-11">
				<form action="" method="POST" role="form" style="margin-left: 70px;">
				<div class="form-group">
					<label> <span class="glyphicon glyphicon-home" aria-hidden="true"></span> Nama Halte</label>
					<input type="text" class="form-control" required="required" id="" name="nama_lokasi" placeholder="Input Nama lokasi">
				</div>
					<div class="form-group">
					<label><span class="glyphicon glyphicon-map-marker" aria-hidden="true"></span> Latitude</label>
					<input type="text" class="form-control" id="" name="lintang" placeholder="Input Latitude">
				</div>
				<div class="form-group">
					<label> <span class="glyphicon glyphicon-map-marker" aria-hidden="true"></span> Logtitude</label>
					<input type="text" class="form-control" id="" name="bujur" placeholder="Input Logtitude">
				</div>
				<div class="form-group">
					<label><span class="glyphicon glyphicon-bed" aria-hidden="true"></span> Keterangan alamat</label>
					<textarea name="keterangan" id="input" class="form-control" rows="3" required="required"></textarea>
				</div>
					<button type="submit" class="btn btn-primary"value="submit"> <span class="glyphicon glyphicon-floppy-disk" aria-hidden="true"></span> Submit</button>
				</form>
			</div>
		</div>
	</div>
</div> <!-- end panel col content data lokasi -->

<nav class="navbar navbar-default navbar-fixed-bottom" role="navigation">
		<img src="gambar/footer.png"  style="width: 100%; height: 60px;" >
</nav>

</body>
</html>