<?php

session_start();

$mysqli=new mysqli('localhost','root','','faceid') or die(mysqli_error($mysqli)); 



if(isset($_GET['delete'])){
    $del_id= $_GET['delete'];
    
   $result= $mysqli->query("DELETE FROM unidentifiedbodies WHERE srno='$del_id' ") or  die($mysqli->error);
   
if($result){
    echo ("<script LANGUAGE='JavaScript'>
    window.alert('Succesfully Deleted');
    window.location.href='http://localhost/FaceID/police/manage_database.php';
    </script>");

        }else{
            echo ("<script LANGUAGE='JavaScript'>
            window.alert('Deleted Not Succesfully! Try Again');
            window.location.href='http://localhost/FaceID/police/manage_database.php';
            </script>");
         
}

}
    

?>
 

   