<?php
    session_start();
    include 'config.php'; 

//View Information about the unidentified body
if (isset($_POST['view_btn'])){
    View();
}
//Delete Officials' accounts
if (isset($_POST['upload_btn'])){
    Upload();
}

function View(){
    
}

?>