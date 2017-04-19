<?php include ("Con/config.php");
 $delUserid=$_POST['chkUser'];

    if($delUserid) {
        foreach ($delUserid as $id) {


            $del = new Users();
            $delFun = $del->deleteUser($id);
            header("location:userManager.php");

        }
    }else{
        header("location:userManager.php");
    }