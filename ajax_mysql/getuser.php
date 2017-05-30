<?php
if(isset($_GET['tahun']) && isset($_GET['semester']) && isset($_GET['matakuliah'])){
    $tahun = intval($_GET['tahun']);
    $semester = $_GET['semester'];
    $matakuliah = $_GET['matakuliah'];
    $sql="SELECT DISTINCT nama FROM kuliah WHERE tahun = ".$tahun." AND semester = '".$semester."' AND matakuliah = '".$matakuliah."'";
}
else if(isset($_GET['tahun']) && isset($_GET['semester'])){
    $tahun = intval($_GET['tahun']);
    $semester = $_GET['semester'];
    $sql="SELECT DISTINCT matakuliah FROM kuliah WHERE tahun = ".$tahun." AND semester = '".$semester."'";
}
else if(isset($_GET['tahun'])){
    $tahun = intval($_GET['tahun']);
    $sql="SELECT DISTINCT semester FROM kuliah WHERE tahun = ".$tahun;
}

$con = mysqli_connect('localhost','root','');
if (!$con) {
    die('Could not connect: ' . mysqli_error($con));
}
mysqli_select_db($con,"mahasiswa");


$result = mysqli_query($con,$sql);

$rows = array();
while($r = mysqli_fetch_assoc($result)) {
    $rows[] = $r;
}
print json_encode($rows);

mysqli_close($con);
?>