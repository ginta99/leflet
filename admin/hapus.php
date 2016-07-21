<?php
    require 'koneksi.php';
    $id_lokasi= null;
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
        
        // Delete Data
        $id_lokasi = $_POST['id_lokasi'];
       
        $query = "Delete from data_lokasi where id_lokasi=$id_lokasi";
        //$query = ""; // command haus data drop tabel
        //$query = ""; // create tabel baru yang sudah di reset
        mysqli_query($con,$query);
        header("Location: data_lokasi.php");
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
    <div class="container">
    <div class="row">
        <div class="row">
             <h3><span class="glyphicon glyphicon-trash" aria-hidden="true"></span> Hapus Data Halte</h3>
        </div>
        <form method="POST" action="hapus.php">
            <input type="hidden" name="id_lokasi" value="<?php echo $id_lokasi;?>" />
            <p class="bg-danger" style="padding: 10px;">Apa anda yakin menghapus data halte ?</p>
            <div class="form-actions">
                <button type="submit" class="btn btn-danger"><span class="glyphicon glyphicon-ok" aria-hidden="true"></span> Yes</button>
                <a class="btn btn btn-default" href="data_lokasi.php"><span class="glyphicon glyphicon-remove" aria-hidden="true"></span> No</a>
            </div>
        </form>
                
    </div> 
</div> 
<nav class="navbar navbar-default navbar-fixed-bottom" role="navigation">

        <img src="gambar/footer.png"  style="width: 100%; height: 120px;" >

</nav>
</body>
</html>
