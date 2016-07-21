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
	if ( !empty($_POST))
    {
              
        // post values

        $nama  = $_POST['nama_lokasi'];
        $lintang  = $_POST['latitude'];
        $bujur    = $_POST['logtitude'];
        $keterangan= $_POST['keterangan'];
		
		// Update data
        $query = "Update data_lokasi set nama_lokasi='$nama',latitude='$lintang',logtitude='$bujur',keterangan='$keterangan' where id_lokasi='$id_lokasi'";
        mysqli_query($con,$query);
		 header("Location: data_lokasi.php");
    }
	else
	{
		
		$query = "SELECT * FROM data_lokasi where id_lokasi = $id_lokasi";
		$res    = mysqli_query($con,$query);
		
		$data=mysqli_fetch_array($res);
		
        $nama  = $data['nama_lokasi'];
        $lintang  = $data['latitude'];
        $bujur    = $data['logtitude'];
        $keterangan= $data['keterangan'];
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
			<h3 class="panel-title"><span class="glyphicon glyphicon-home" aria-hidden="true"></span> Menu</h3>
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
			<h3 class="panel-title"> <span class="glyphicon glyphicon-pencil" aria-hidden="true"></span>  Edit Data Lokasi</h3>
		</div>
		<div class="panel-body">
			<div class="col-xs-11 col-sm-11 col-md-11 col-lg-11">
		<form action="edit_lokasi.php?id_lokasi=<?php echo $id_lokasi;?>" method="POST" role="form" style="margin-left: 70px;">
			
				<div class="form-group">
					<label>Nama Halte</label>
					<input value="<?php echo !empty($nama)?$nama:'';?>" type="text" class="form-control" id="" name="nama_lokasi" placeholder="Input field">
				</div>
					<div class="form-group">
					<label>Logtitude</label>
					<input value="<?php echo !empty($lintang)?$lintang:'';?>" type="text" class="form-control" id="" name="latitude" placeholder="Input field">
				</div>
			<div class="form-group">
					<label>Latitude</label>
					<input value="<?php echo !empty($bujur)?$bujur:'';?>" type="text" class="form-control" id="" name="logtitude" placeholder="Input field">
				</div>
			<div class="form-group">
					<label>Keterangan</label>
					<textarea name="keterangan" id="inputKeterangan" class="form-control" rows="3" required="required"><?php echo $keterangan; ?></textarea>
			</div>
		
		
			<button type="submit" class="btn btn-primary"value="submit">Submit</button>
			<a class="btn btn btn-default" href="data_lokasi.php">Back</a>
		</form>
	</div>
</div>
<nav class="navbar navbar-default navbar-fixed-bottom" role="navigation">

		<img src="gambar/footer.png"  style="width: 100%; height: 60px;" >

</nav>
</body>
</html>