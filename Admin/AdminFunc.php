<?php
    session_start();
    include 'config.php'; 

    function isAdminLoggedIn(){
        if(isset($_SESSION['nic']) && $_SESSION['type'] == "Admin"){
            return true;
        }else{
            return false;
        }
    }
    function isJMOLoggedIn(){
        if(isset($_SESSION['nic']) && $_SESSION['type'] == "JMO"){
            return true;
        }else{
            return false;
        }
    } 

    function isUCSCLoggedIn(){
        if(isset($_SESSION['nic']) && $_SESSION['type'] == "UCSC"){
            return true;
        }else{
            return false;
        }
    }
    
    //Log out function
    if(isset($_GET['logout'])){
        session_unset(); // Removing all session variables
        session_destroy(); //Destroying the session
        header("location:../index.php");
    }
    $username = $password = $confirm_password = $nic = $name = $email = $contact = $nic_err = $pass_err = "";
    $err = 0;

    //Call the login function for officials
    if (isset($_POST['OfficialsLogin_button'])){
        OfficialsLogin();
    }

    //Call the AddUser function for officials
    if (isset($_POST['AddUser_btn'])){
        AddUser();
    }
    //Update Officials' accounts
    if (isset($_POST['update'])){
        UpdateAcc();
    }
    //Delete Officials' accounts
    if (isset($_POST['delete_btn'])){
        DeleteAcc();
    }
    //Edit article
    if (isset($_POST['editArti'])){
        UpdateArti();
    }
    //Add new article
    if (isset($_POST['AddArti'])){
        AddArti();
    }
   

    //--------------------------Officials Log in---------------------------------
    function OfficialsLogin(){
        global $link , $nic , $password , $pass_err;

        //Taking the user inputs
        $nic = $_POST['nic'];
        $password = $_POST['password'];

        $passwordNew = md5($password); //Hashing the password entered
        $sql = "SELECT * FROM officials WHERE nic='$nic' AND password='$passwordNew' LIMIT 1" ;
        $results = $link->query($sql);
        if($results->num_rows == 1){ //The account is found
            $row = $results->fetch_assoc();
            if($row['type']==0){
                $_SESSION['type'] = "JMO";
                $_SESSION['nic'] = $nic;
                $_SESSION['username'] = $username;
                $_SESSION['success'] = "You are now logged in";
                header('location:JMO/Dashboard.php');
            }else if($row['type']==1){
                $_SESSION['type'] = "Police";
                $_SESSION['nic'] = $nic;
                $_SESSION['username'] = $username;
                $_SESSION['success'] = "You are now logged in";
                header('location:Police/police.php');
            }else if($row['type']==3){
                $_SESSION['type'] = "UCSC";
                $_SESSION['nic'] = $nic;
                $_SESSION['username'] = $username;
                $_SESSION['success'] = "You are now logged in";
                header('location:UCSC/dashboard.php');
            }else{
                $_SESSION['type'] = "Admin";
                $_SESSION['nic'] = $nic;
                $_SESSION['username'] = $username;
                $_SESSION['success'] = "You are now logged in";
                header('location:Admin/Dashboard.php');
            }
            
        }else{
            $pass_err = "Wrong username/password combination.";
        }
        $link->close();
    }

        //-----------------------Adding Officials' Accounts-------------------------------------
        function AddUser(){
        global $link , $username, $password, $confirm_password, $type, $nic, $name, $email, $contact, $nic_err, $pass_err, $err;

        //Taking inputs from the user
        $username = $_POST['username'];
        $password = $_POST['password'];
        $confirm_password = $_POST['confirm_password'];
        $name = $_POST['name'];
        $email = $_POST['email'];
        $contact = $_POST['contact'];
        $nic = $_POST['nic'];
        $type = $_POST['type'];

        //Checking if the passwords match
        if($password != $confirm_password){
            $pass_err = "The two passwords entered do not match";
            $err = $err +1;
        }

        //Checking if there is another account for the nic inserted
        if($nic != ""){
            $sql = "SELECT * FROM officials WHERE nic ='$nic'LIMIT 1";
            $results = $link->query($sql);
            if($results->num_rows == 1){
                $nic_err = "An account for the NIC already exists";
                $err = $err +1;
            }
        }

        //No errors, user registration
        if($err == 0){
            $passwordNew = md5($password); //Hashing the password

            $sql= "INSERT INTO officials (name , username , password , nic, contact , email, type) 
                    VALUES ('$name' , '$username' , '$passwordNew' , '$nic' , '$contact' , '$email' , '$type') ";

            if($link->query($sql) === TRUE){
                header('location:ManageOfficials.php');
                echo " New account created successfully!";
            }else{
                echo "Error: " . $sql . "<br>" .$link->error;
            }
           
        }
        $link->close();
    }


//----------------------------------Update Account---------------------------
function UpdateAcc(){
    global $link , $username, $nic, $name, $email, $contact;

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
    
//-------------------------Delete Account------------
function DeleteAcc(){
    global $link,$nic;
    $nic = $_POST['nic'];

    $sql= "DELETE FROM officials WHERE NIC='$nic'";
    if($link->query($sql) === TRUE){
        echo " Account Deleted successfully!";
        header('location:ManageOfficials.php');
       
    }else{
        echo "Error: " . $sql . "<br>" .$link->error;
    }
$link->close();
}

//----------------------------------Update Article---------------------------
function UpdateArti(){
    global $link , $id, $article;

    //Taking inputs from the user
    $id = $_POST['id'];
    $article = $_POST['article'];

    $sql="UPDATE portal SET article='$article' WHERE id='$id'";

        if($link->query($sql) === TRUE){
            header('location:ManagePortal.php');
            echo " Aricle updated successfully!";
        }else{
            echo "Error: " . $sql . "<br>" .$link->error;
        }
    $link->close();
}

//----------------------------------Add new Article---------------------------
function AddArti(){
    global $link ,$date, $article;

    //Taking inputs from the user
    $article = $_POST['article'];
    $date = date("y-m-d");

    $sql= "INSERT INTO portal (article , date) 
                    VALUES ('$article' , '$date') ";


        if($link->query($sql) === TRUE){
            header('location:ManagePortal.php');
            echo " Aricle added successfully!";
        }else{
            echo "Error: " . $sql . "<br>" .$link->error;
        }
    $link->close();
}
    
?>