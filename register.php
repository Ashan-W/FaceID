
<?php
	if(isset($_POST['submit'])){

        $name=$_POST['name'];
        $nic=$_POST['nic'];
        $username=$_POST['username'];
        $password=$_POST['password'];
        $conpassword=$_POST['conpassword'];
        $ph=$_POST['ph'];
        $number=$_POST['MNum'];
        $email=$_POST['email'];
        date_default_timezone_set("Asia/Colombo");
        $date_time = date("Y-m-d");
        $p=md5($password);
        $link=mysqli_connect("localhost","root","","faceid1");
        $sql = "INSERT INTO reg_users(name,nic,username,password,contact,email,date) VALUES ('$name', '$nic','$username','$p','$ph.$number','$email','$date_time')";
        
        if($password==$conpassword){
            if(mysqli_query($link,$sql)){
                ?>
                <script>
                    window.location.href='addDetails.html';
                      alert('Registerd');
                </script>
                <?php
            }else{
                ?>
                <script>
                    window.location.href='register.html';
                      alert('fail');
                </script>
                <?php
            }
        }else{
            // $_SESSION['msg']="password does not match";
            ?>
                <script>
                    window.location.href='register.html';
                      alert('password does not match');
                </script>
                <?php
        }

       
        
    }
        ?>