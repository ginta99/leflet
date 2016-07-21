<?php 
	include 'koneksi.php';
 ?>


<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title></title>
	<link rel="stylesheet" href="node_modules/bootstrap/css/bootstrap.min.css">

</head>
<body>
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
			<label><a href="Tambahkan_halte.php"><span class="glyphicon glyphicon-plus" aria-hidden="true"></span> Tambahkan Halte</a></label>
			<br>
			<label><a href="data_lokasi.php"><span class="glyphicon glyphicon-list" aria-hidden="true"></span> Data Lokasi</a></label>
			<br>
			<label><a href="data_halte.php"><span class="glyphicon glyphicon-list" aria-hidden="true"></span> Data Halte</a></label>
			<br>
			<label><a href="admin.php"><span class="glyphicon glyphicon-off" aria-hidden="true"></span> Keluar</a></label>
		</div>
	</div>
</div>
<div class="col-md-9">
	<div class="panel panel-primary">
		<div class="panel-heading">
			<h3 class="panel-title"><span class="glyphicon glyphicon-list" aria-hidden="true"></span> Data Lokasi</h3>
		</div>
		<div class="panel-body">
			<table class="table table-bordered table-hover">
				<thead>
					<tr>
						<th>Id Halte</th>
						<th>Nama Halte</th>
						<th>Latitude</th>
						<th>Logtitude</th>
						<th>Keterangan Trayek Bus</th>
						<th>Operator</th>
					
					</tr>
				</thead>
				<tbody>
					<?php
					
					//$query  = "select * from lokasi_data order by No limit 10";
					$query = "SELECT * FROM data_lokasi";
					$result = mysqli_query($con, $query);
					while($row=mysqli_fetch_array($result)){
						echo '<tr>';
						echo '<td>'. $row['id_lokasi'] . '</td>';
						echo '<td>'. $row['nama_lokasi'] . '</td>';
						echo '<td>'. $row['latitude'] . '</td>';
						echo '<td>'. $row['logtitude'] .'</td>';
						echo '<td>'. $row['keterangan'] . '</td>';
						echo '<td><a class="btn btn-xs btn-info" href="tampil.php?id_lokasi='. $row['id_lokasi'] . '"> <span class="glyphicon glyphicon-search" aria-hidden="true"></span> Read</a>
								   <a class="btn btn-xs btn-primary" href="edit_lokasi.php?id_lokasi='. $row['id_lokasi'] . '"><span class="glyphicon glyphicon-pencil" aria-hidden="true"></span> Update</a>
								   <a class="btn btn-xs btn-danger" href="hapus.php?id_lokasi='. $row['id_lokasi'] . '"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span> Delete</a>
							  </td>';
						echo '</tr>';
					}
				?>
				</tbody>
          
        	</div> 
			</table>
		</div>
	</div>
</div>
<nav class="navbar navbar-default navbar-fixed-bottom" role="navigation">

		<img src="gambar/footer.png"  style="width: 100%; height: 70px;" >

</nav>


</body>
</html>