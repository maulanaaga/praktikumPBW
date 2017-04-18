<?php
include('koneksi.php');
?>

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
						<?php $filter = (isset($_GET['filter']) ? strtolower($_GET['filter']) : NULL) ?>
						<option value="Tetap" <?php if($filter == 'Tetap') { echo 'selected'; } ?>>Tetap</option>
						<option value="Kontrak" <?php if($filter == 'Kontrak') { echo 'selected'; } ?> >Kontrak</option>
                        <option value="Outsourcing"  <?php if($filter == 'Outsourcing') { echo 'selected'; } ?>>Outsourcing</option>
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
					<?php
					if($filter){
						$sql = mysqli_query($koneksi, "SELECT * FROM karyawan WHERE status='$filter' ORDER BY nik ASC") or die("gagal");
					}else{
						$sql = mysqli_query($koneksi, "SELECT * FROM karyawan ORDER BY nik ASC")  or die("gagal");
					} 
					if(mysqli_num_rows($sql) == 0){
						echo '<tr><td colspan="8">Data tidak ada di database.</td></tr>';
					}
					else{
						$no = 1;
						while ($row = mysqli_fetch_assoc($sql)) {
							echo '
							<tr>
								<td>'.$no.'</td>
								<td>'.$row['nik'].'</td>
								<td><a href="profile.php?nik='.$row['nik'].'"><span class="glyphicon glyphicon-user" aria-hidden="true"></span>'.$row['nama'].'</a></td>
								<td>'.$row['tempat_lahir'].'</td>
								<td>'.$row['tanggal_lahir'].'</td>
								<td>'.$row['no_telepon'].'</td>
								<td>'.$row['jabatan'].'</td>
								<td>';
								if($row['status'] == 'Tetap'){
									echo '<span class="label label-success">Tetap</span>';
								} 
								else if ($row['status'] == 'Kontrak') {
									echo '<span class="label label-info">Kontrak</span>';
								}  
								else if ($row['status'] == 'Outsourcing') {
									echo '<span class="label label-warning">Outsourcing</span>';
								}
							echo '
								</td>
								<td>
									<a href="edit.php?nik='.$row['nik'].'" title="Edit Data" class="btn btn-primary btn-sm"><span class="glyphicon glyphicon-edit" aria-hidden="true"></span></a>
									<a href="password.php?nik='.$row['nik'].'" title="Ganti Password" data-placement="bottom" data-togle="tooltip" class="btn btn-warning btn-sm"><span class="glyphicon glyphicon-refresh" aria-hidden="true"</span></a>
									<a href="index.php?aksi=delete&nik='.$row['nik'].'" title="Hapus Data" onclick="return confirm(\'Anda Yakin akan menghapus data '.$row['nama'].'?\')" class="btn btn-danger btn-sm"><span class="glyphicon glyphicon-trash" aria-hidden="true"</span></a>

								</td>
							</tr>
							';
							$no++;

						}
					}

					?>					
				</table>	
			</div>
		</div>
	</div>

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
	<script src="js/bootsrap.min.js"></script>

</body>
</html>