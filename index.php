<!DOCTYPE html>
<html>
    <head>
        <title>Music Store</title>
        <link href="app.css" rel="stylesheet">
    </head>
    <body>
        <div class="container">
            <div class="header">
                <a href="/">Music Store</a>

                <?php include("navBar.php") ?>

            </div>
            <div class="body">
                <div class="videoNameList">
                    Video List
                    <ul>

                    <?php
                    include ("showVideoNamelist.php");
                    session_start();

                    $Video=new ShowVideo();
                    $showVideoList=$Video->showVideoNamelist();


                    foreach ($showVideoList as $row){


                        if($_SESSION['control']){


                            ?>

                            <li><a href="Play.php?vid=<?php echo $row['id']?>"><?php echo $row['videoName']?></a></li>


                            <?php
                        }else{

                           ?>
                            <li><?php echo $row['videoName']?></li>
                            <?php
                        }


                        ?>



                        <?php
                    }

                    ?>
                    </ul>

                </div>
            </div>
            <div class="footer">
                &copy;www.musicstore.com
            </div>
        </div>
    </body>
</html>