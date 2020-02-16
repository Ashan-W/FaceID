<?php
    session_start();

    if($_SESSION['type']!='a')
    {
        header('Location: ../html/home.html');
    }
?>