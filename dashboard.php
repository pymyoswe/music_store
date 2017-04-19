<?php
session_start();
include ("Con/auth.php");


?>
<!DOCTYPE html>
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
    <?php include ("navBar.php")?>
    <div class="body">


        <div class="videoUpload">

        <form action="upLoadvideo.php" method="post" enctype="multipart/form-data">

            <label for="videoName">Video Name</label><br>
            <input type="text" name="videoName" id="videoName"><br>
            <label for="videoFile">Select Video</label><br>
            <input type="file" name="videoFile" id="videoFile"><br>
            <input type="submit" name="btnUpload" id="btnUpload" value="Upload">




        </form>
        </div>

        <div class="videoList">
            <table border="1">
                <?php
                include ("../../Con/config.php");

                $User=new Users();
                $showVideo=$User->showVideolist();



                foreach ($showVideo as $row){


                    ?>
                    <tr align="left">
                        <td><?php echo $row['videoName']?></td>
                        <td><video src="../../Upload/<?php echo $row['videoFilename']?>" width="90px" controls></video></td>

                    </tr>
                    <?php
                }

                ?>

            </table>

        </div>
    </div>
    <div class="footer">
        &copy;www.musicstore.com
    </div>
</div>
</body>
</html>