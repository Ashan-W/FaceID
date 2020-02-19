<?php

//Update Officials' accounts
if (isset($_POST['editRecord_btn'])){
    EditRecord();
}
//Add unidentified body details
if (isset($_POST['addet'])){
    AddDetails();
}
/*
//-----------------Edit Record------------------
function EditRecord(){
    global $link , $srno, $date, $province, $district, $policearea,$age ,$height,$weight,$dna, $fingerprint ,  $contact;

    //Taking inputs from the user
    $username = $_POST['username'];
    $name = $_POST['name'];
    $email = $_POST['email'];
    $contact = $_POST['contact'];
    $nic = $_POST['nic'];

    $sql="UPDATE officials SET Name='$name', Username='$username' , Contact='$contact' , Email='$email' WHERE NIC='$nic'";

        if($link->query($sql) === TRUE){
            header('location:ManageOfficials.php');
            echo " Account updated successfully!";
        }else{
            echo "Error: " . $sql . "<br>" .$link->error;
        }
    $link->close();
}
*/

function AddDetails(){
    global $link, $srno , $date , $province, $policearea;

    $srno = $_POST['srno'];
    $date = $_POST['date'];
    $province = $_POST['province'];
    $policearea = $_POST['policearea'];


    $sql= "INSERT INTO unidentifiedbodies (srno , date , province , policearea) 
                    VALUES ('$srno' , '$date' , '$province' , '$policearea') ";


        if($link->query($sql) === TRUE){
            header('location:ViewRecords.php');
            echo " Details added successfully!";
        }else{
            echo "Error: " . $sql . "<br>" .$link->error;
        }
    $link->close();
}
?>