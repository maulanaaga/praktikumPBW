<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Praktikum PBW</title>

	<!-- Bootstrap -->
	<link href="css/bootstrap.min.css" rel="stylesheet">
	
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
				<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				
			</div>
			<div id="navbar" class="navbar-collapse collapse">
				<ul class="nav navbar-nav">
					<li><a href="index.php">Beranda</a></li>
					<li><a href="add.php">Input Data</a></li>
				</ul>
			</div><!--/.nav-collapse -->
		</div>
	</nav>
	<div class="container">
		<div class="content">
			<h2>Data Karyawan &raquo; Biodata</h2>
			<hr />
			
			<table class="table table-striped table-condensed">
				<tr>
					<th width="20%">NIK</th>
					<td></td>
				</tr>
				<tr>
					<th>Nama Karyawan</th>
					<td></td>
				</tr>
				<tr>
					<th>Tempat & Tanggal Lahir</th>
					<td></td>
				</tr>
				<tr>
					<th>Alamat</th>
					<td></td>
				</tr>
				<tr>
					<th>No Telepon</th>
					<td></td>
				</tr>
				<tr>
					<th>Jabatan</th>
					<td></td>
				</tr>
				<tr>
					<th>Status</th>
					<td></td>
				</tr>
				<tr>
					<th>Username</th>
					<td></td>
				</tr>
				<tr>
					<th>Password</th>
					<td></td>
				</tr>
			</table>
			
			<a href="index.php" class="btn btn-sm btn-info"><span class="glyphicon glyphicon-refresh" aria-hidden="true"></span> Kembali</a>
			
		</div>
	</div>

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
</body>
</html>