<?php
        session_start();
        if(!isset($_SESSION['control'])){
            header("location:/");
            exit();
        }
?><!DOCTYPE html>
<html>
<head>
    <title>Music Store</title>
    <link href="../app.css" rel="stylesheet">
</head>
<body>
<div class="container">
    <div class="header">
        <a href="/">Music Store</a>

    </div>
    <?php include ("../navBar.php")?>
    <div class="body">

        <div class="playVideo">

            <?php
            include ("PlayVideo.php");
            $id=$_GET['vid'];

            $Video=new PlayVideo();
            $playName=$Video->play($id);
            echo $playName['videoFilename'];

            ?>
            <video src="Upload/<?php echo $playName['videoFilename']?>" controls></video>
        </div>


    </div>
    <div class="footer">

        &copy;www.musicstore.com
    </div>
</div>
</body>
</html>
