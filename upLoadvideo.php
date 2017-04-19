<?php include ("Con/config.php");
    $vName=$_POST['videoName'];
    $vFileName=$_FILES['videoFile']['name'];
    $vTmpName=$_FILES['videoFile']['tmp_name'];

    //echo  $vFileName,$vTmpName;

    move_uploaded_file($vTmpName,"Upload/$vFileName");


    $user=new Users();{
    $newVideo=$user->newVideo($vName,$vFileName);

}



