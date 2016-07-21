
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
	<div class="container">
        <div class="row">
		<div class="col-sm-6 col-sm-offset-4">
	  			<form action="login.php" method="POST" role="form">
	  				<table border="0" align="center" style="border-color:black" width="100%">
	  	<legend>admin</legend>
	  
	  	<div class="form-group">
	  		<label for=""><span class="glyphicon glyphicon-user" aria-hidden="true"></span> Username</label> 
	  		<input type="text" name="username">
	  		<br>
	  	<label for=""><span class="glyphicon glyphicon-lock" aria-hidden="true"></span> Password</label>
	  		<input type="password" name="password">
	  	</div>
	  	<button type="submit" class="btn btn-primary">Submit</button>
	  </form>
	  		</div>
	  	</div>
	  </div>
	  <nav class="navbar navbar-default navbar-fixed-bottom" role="navigation">

		<img src="gambar/footer.png"  style="width: 100%; height: 120px;" >

</nav>
</body>
</html>