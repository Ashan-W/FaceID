<html>
<body>

<?php

$con = mysqli_connect("localhost","root","","faceid");

if (!$con)

  {

  die('Could not connect: ' . mysqli_error());

  }

$fname = $_POST['fname'];
$phone = $_POST['phone'];
$email = $_POST['email'];
$message = $_POST['message'];
$cimage = $_POST['cimage'];

$sql="INSERT INTO contactform (fname,phone,email,messages,cimage)

VALUES

('$fname','$phone','$email','$message','$cimage')";

echo $sql; 

if (!mysqli_query($con, $sql))

  {

  die('Error: ' . mysqli_error($con));

  }

echo "1 record added";


 

mysqli_close($con)

?>


</body>

</html>