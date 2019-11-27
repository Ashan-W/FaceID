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
$other = $_POST['other'];
$other2 = $_POST['other2'];
$dna = $_POST['dna'];


$sql="INSERT INTO unidentifiedbodies (srno,date,policearea,province,district,other,other2,dna,)

VALUES

('$srno','$date','$policearea','$province','$district','$other','$other2','$dna',)";

 

if (!mysqli_query($con, $sql))

  {

  die('Error: ' . mysqli_error($con));

  }

echo "1 record added";

 

mysqli_close($con)

?>

</body>

</html>