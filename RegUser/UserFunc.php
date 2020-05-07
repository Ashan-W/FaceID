<?php
    session_start();
    include 'config.php'; 

        
    $username = $password = $confirm_password = $nic = $name = $email = $contact = $nic_err = $pass_err = "";
    $err = 0;

    //Call the registration function
    if (isset($_POST['reg_button'])){
        register();
    }
    
    //Call the login function
    if (isset($_POST['login_button'])){
        login();
    }

    //-------------------------------User Registration----------------------------

    function register(){ //User Registration
        global $link , $username, $password, $confirm_password, $nic, $name, $email, $contact, $nic_err, $pass_err, $err;

        //Taking inputs from the user
        $username = $_POST['username'];
        $password = $_POST['password'];
        $confirm_password = $_POST['confirm_password'];
        $name = $_POST['name'];
        $email = $_POST['email'];
        $contact = $_POST['contact'];
        $nic = $_POST['nic'];

        //Checking if the passwords match
        if($password != $confirm_password){
            $pass_err = "The two passwords entered do not match";
            $err = $err +1;
        }

        //Checking if there is another account for the nic inserted
        if($nic != ""){
            $sql = "SELECT * FROM reg_users WHERE nic ='$nic'LIMIT 1";
            $results = $link->query($sql);
            if($results->num_rows == 1){
                echo "<script> alert('An account already exists for the NIC');</script>"; 
                $err = $err +1;
            }
        }

        //No errors, user registration
        if($err == 0){
            $date = date("y-m-d");
            
            $passwordNew = md5($password); //Hashing the password

            $sql= "INSERT INTO reg_users (name , username , password , nic, contact , email, date) 
                    VALUES ('$name' , '$username' , '$passwordNew' , '$nic' , '$contact' , '$email' , '$date') ";

            if($link->query($sql) === TRUE){
                //Logging in the user automatically
                $_SESSION['nic'] = $nic;
                $_SESSION['username'] = $username;
                $_SESSION['success'] = "You are now logged in";
                header('location:index.php');
                
                echo " New account created successfully!";
            }else{
                echo "Error: " . $sql . "<br>" .$link->error;
            }
           
        }
        $link->close();
    }

    //-----------------------------User Login-------------------------------
    function login(){
        global $link , $nic , $password , $pass_err;

        //Taking the user inputs
        $nic = $_POST['nic'];
        $password = $_POST['password'];

        $passwordNew = md5($password); //Hashing the password entered


        $sql = "SELECT * FROM reg_users WHERE nic='$nic' AND password='$passwordNew' LIMIT 1" ;
        $results = $link->query($sql);
        if($results->num_rows == 1){ //The account is found
            $row = $results->fetch_assoc();
            $_SESSION['nic'] = $nic;
            $_SESSION['username'] = $username;
            $_SESSION['success'] = "You are now logged in";
            header('location:index.php');
        }else{
            $pass_err = "Wrong username/password combination.";
        }
        $link->close();
    
    }
?>