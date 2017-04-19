<?php include ("config.php");
include ("auth.php");
session_start();
    $flag=$_POST['flag'];
    if($flag=="register"){
        $userName=$_POST['userName'];
        $email=$_POST['email'];
        $password=$_POST['password'];
        $conPassword=$_POST['conPassword'];
        $userPhoto=$_FILES['userPhoto']['name'];
        $tmp=$_FILES['userPhoto']['tmp_name'];


        if($password!=$conPassword){
            $_SESSION['error']="Failed register!";
            header("location:../register.php");
        }

        $user=new Users();
        $reg=$user->reg($userName,$email,$password,$userPhoto,$tmp);


    }elseif ($flag=="login"){

        $userName=$_POST['userName'];
        $password=$_POST['password'];

        $user=new Users();
        $ePassword=md5($password);
        $user->login($userName,$ePassword);




    }