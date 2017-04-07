<<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Praktikum PBW</title>

	<!--Pemanggilan Bootstrap -->
	<link rel="stylesheet" href="css/bootstrap.min.css">

	<style>
		.content {
			margin-top: 80px;
		}
	</style>	
</head>
<body>
	<nav class="navbar navbar-inverse navbar-fixed-top">
		<div class="container">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle collapsed" data-toogle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
					<span class="sr-only">Toggle Navigation</span>	
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>					
				</button>
			</div>
			<div id="navbar" class="navbar-collapse collapse">
				<ul class="nav navbar-nav">
					<li class="active"><a href="index.php">Beranda</a></li>	
					<li><a href="add.php">Input Data</a></li>				
				</ul>
			</div>
		</div>
	</nav>
	<div class="container">
		<div class="content">
			<h2>Data Karyawan</h2>
			<hr />

			<form class="form-inline" method="get">
				<div class="form-group">
					<select name="filter" class="form-control" onchange="form.submit()">
						<option value="0">Filter Data Karyawan</option>
						<option value="Tetap">Tetap</option>
						<option value="Kontrak">Kontrak</option>
						<option value="Outsourching">Outsourching</option>
					</select>
				</div>
			</form>
			<br />
			<div class="table-responsive">
				<table class="table table-striped table-hover">
					<tr>
						<th>No</th>
						<th>Nik</th>
						<th>Nama</th>
						<th>Tempat Lahir</th>
						<th>Tanggal Lahir</th>
						<th>No Telepon</th>
						<th>Jabatan</th>
						<th>Status</th>
						<th>Tools</th>
					</tr>
				</table>	
			</div>
		</div>
	</div>

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
	<script src="js/bootsrap.min.js"></script>

</body>
</html>