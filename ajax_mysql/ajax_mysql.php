<?php

  $con = mysqli_connect('localhost','root','');
  if (!$con) {
      die('Could not connect: ' . mysqli_error($con));
  }
  mysqli_select_db($con,"mahasiswa");

  $sql="SELECT DISTINCT tahun FROM kuliah";
  $result = mysqli_query($con,$sql);
  

?>

<html>
<head>
<script src="jquery.min.js"></script>
<script>
function showTahun(str) {
    if (str == "") {
        document.getElementById("txtHint").innerHTML = "";
        return;
    } else { 
        if (window.XMLHttpRequest) {
            // code for IE7+, Firefox, Chrome, Opera, Safari
            xmlhttp = new XMLHttpRequest();
        } else {
            // code for IE6, IE5
            xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
        }
        xmlhttp.onreadystatechange = function() {
            var my_array = JSON.parse(xmlhttp.responseText);

            if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
                var $semester = $('#semester');
                $semester.empty();

                $semester.append('<option value="">Pilih:</option>');

                for (var i = 0; i < my_array.length; i++) {
                    $semester.append('<option tahun='+str+' value=' + my_array[i]['semester'] + '>' + my_array[i]['semester'] + '</option>');
                }
            }
        };
        xmlhttp.open("GET","getuser.php?tahun="+str,true);
        xmlhttp.send();
    }
}

function showSemester(str, str2) {
    if (str == "") {
        document.getElementById("txtHint").innerHTML = "";
        return;
    } else { 
        if (window.XMLHttpRequest) {
            // code for IE7+, Firefox, Chrome, Opera, Safari
            xmlhttp = new XMLHttpRequest();
        } else {
            // code for IE6, IE5
            xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
        }
        xmlhttp.onreadystatechange = function() {
            var my_array = JSON.parse(xmlhttp.responseText);

            if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
                var $matakuliah = $('#matakuliah');
                $matakuliah.empty();

                $matakuliah.append('<option value="">Pilih:</option>');

                for (var i = 0; i < my_array.length; i++) {
                    $matakuliah.append('<option tahun='+str+' semester='+str2+' value=' + my_array[i]['matakuliah'] + '>' + my_array[i]['matakuliah'] + '</option>');
                }
            }
        };
        xmlhttp.open("GET","getuser.php?tahun="+str+"&semester="+str2,true);
        xmlhttp.send();
    }
}

function showMK(str, str2, str3) {
    if (str == "") {
        document.getElementById("txtHint").innerHTML = "";
        return;
    } else { 
        if (window.XMLHttpRequest) {
            // code for IE7+, Firefox, Chrome, Opera, Safari
            xmlhttp = new XMLHttpRequest();
        } else {
            // code for IE6, IE5
            xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
        }
        xmlhttp.onreadystatechange = function() {
            var my_array = JSON.parse(xmlhttp.responseText);

            if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {

                var data = "";

                for (var i = 0; i < my_array.length; i++) {
                    data += "Nama "+ my_array[i]['nama'] +" <br>";
                }
                document.getElementById("txtHint").innerHTML = data;
            }
        };
        xmlhttp.open("GET","getuser.php?tahun="+str+"&semester="+str2+"&matakuliah="+str3,true);
        xmlhttp.send();
    }
}
</script>
</head>
<body>

<form>
<select name="tahun" onchange="showTahun(this.value)">
  <option value="">Pilih:</option>
  <?php 

    while($r = mysqli_fetch_assoc($result)) {
      echo '<option value="'.$r['tahun'].'">'.$r['tahun'].'</option>';
    }

  ?>
  </select>

  <select id="semester" name="semester" onchange="showSemester(this.options[this.selectedIndex].getAttribute('tahun'), this.value)">
  <option value="">Pilih:</option>

  </select>

  <select id="matakuliah" name="matakuliah" onchange="showMK(this.options[this.selectedIndex].getAttribute('tahun'), this.options[this.selectedIndex].getAttribute('semester'), this.value)">
  <option value="">Pilih:</option>

  </select>
</form>
<br>
<div id="txtHint"><b>Person info will be listed here...</b></div>

</body>
</html>