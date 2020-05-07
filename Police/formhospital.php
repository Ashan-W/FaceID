<html>
<body>

<?php

$con = mysqli_connect("localhost","root","","faceid");

if (!$con)

  {

  die('Could not connect: ' . mysqli_error());

  }

$srno = $_POST['srno'];
$date = $_POST['date'];
$policearea = $_POST['policearea'];
$province = $_POST['province'];
$district = $_POST['district'];
//$other = $_POST['other'];
//$other2 = $_POST['other2'];
$dna = $_POST['dna'];
$fingerprint = $_POST['fingerprint'];
$dental = $_POST['dental'];
$facialphotograph = $_POST['facialphotograph'];
$clothes = $_POST['clothes'];
$ornaments = $_POST['ornaments'];
$tattoos = $_POST['tattoos'];
$specialremarks = $_POST['specialremarks'];
$specialinfo = $_POST['special_info'];


$sql="INSERT INTO unidentifiedbodies (srno,date,policearea,province,district,dna,fingerprint,dental,facialphotograph,clothes,ornaments,tattoos,specialremarks,Special_infp)

VALUES

('$srno','$date','$policearea','$province','$district', '$dna','$fingerprint','$dental','$facialphotograph','$clothes','$ornaments','$tattoos','$specialremarks','$specialinfo')";

//echo ($sql);

if (!mysqli_query($con, $sql))

  {

  die('Error: ' . mysqli_error($con));

  }

echo "1 record added";
echo ("<script LANGUAGE='JavaScript'>
    window.alert('Succesfully Added');
    window.location.href='http://localhost/police/formhospital.html';
    </script>");
 

mysqli_close($con)

?>

</body>

</html>