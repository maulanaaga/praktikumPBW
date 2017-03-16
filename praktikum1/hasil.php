<!DOCTYPE html>
<html>
<body>

<?php

$host = "localhost";
$username= "root";
$password = "";
$database = "prakpbw";

$connect = mysqli_connect($host, $username, $password, $database) or die("Gagal Terkoneksi Ke Database");


$userName = $_POST["username"];
$nim	  = $_POST["nim"];
$password = $_POST["password"];
$jenisKelamin = $_POST["jenisKelamin"];

mysqli_query($connect, "insert into biodata (username, nim, password, jenisKelamin) values('$userName', '$nim' ,'$password', '$jenisKelamin')") or die("Gagal Masukin data");
?>

Username 		: <?php echo $_POST['username']; ?> <br>
NIM 	 		: <?php echo $_POST['nim']; ?> <br>
Password 		: <?php echo $_POST['password']; ?> <br>
Jenis Kelamin   : <?php echo $_POST['jenisKelamin']; ?> <br>

</body>
</html>