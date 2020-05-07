<?php
include_once('config.php'); 
include_once('process.php');


$mysqli=new mysqli('localhost','root','','faceid') or die(mysqli_error($mysqli)); 

if(isset($_GET['save'])){
 
    $edit_id=$_GET['srno'];
    $date=$_GET['date'];
    $policediv=$_GET['policediv'];
    $province=$_GET['province'];
    $location=$_GET['location'];
  

  $result = $mysqli->query("UPDATE unidentifiedbodies  SET  policearea=' $policediv', date='$date', province='$province' WHERE srno='$edit_id'") ;

   
}


  
 if($result){ 
   echo ("<script LANGUAGE='JavaScript'>
   window.alert('Succesfully Edited');
  window.location.href='http://localhost/FaceID/police/manage_database.php';
   </script>");

       }else{
           echo ("<script LANGUAGE='JavaScript'>
           window.alert('Edit Not Succesfully! Try Again');
           window.location.href='http://localhost/FaceID/police/manage_database.php';
           </script>");
        
}


//recoed inquiry messages
if(isset($_GET['edits'])){
  //echo "hello";
  $rec_id= $_GET['edits'];
  //var_dump( $rec_id);
  //$sql = "DELETE FROM faceid WHERE srno='$del_id' "; // or die ($mysql->error());
  //$edit_id=$_GET['id'];
  $respond=$_GET['respond']; 
  
    $resresult = $mysqli->query("UPDATE inquiries  SET  respond=' $respond' WHERE id='$rec_id'") ;
 
}

if($resresult){ 
  echo ("<script LANGUAGE='JavaScript'>
  window.alert('Succesfully Recorded');
 window.location.href='http://localhost/FaceID/police/inq_req.php';
  </script>");

      }else{
          echo ("<script LANGUAGE='JavaScript'>
          window.alert('Edit Not Succesfully! Try Again');
          window.location.href='http://localhost/FaceID/police/inq_req.php';
          </script>");
       
 }
?>