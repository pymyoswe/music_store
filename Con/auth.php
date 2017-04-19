<?php
    session_start();
    if($_SESSION['control']){
        if($_SESSION['role']=="admin"){

        }else{
            header("location: /");
        }
    }else{
        header("location:../login.php");
    }