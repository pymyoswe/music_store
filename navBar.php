<div class="navBar">
    <div class="nav">

        <?php
            session_start();
            if($_SESSION['control']){

              include ("Con/config.php");
                $ses=$_SESSION['control'];
                $users=new Users();
                $usersByname=$users->userByName($ses);
                ?>
                <li>
                    <a href="#" ><img src="../../Con/UserPhoto/<?php echo $usersByname['userPhoto']?>">
                        <?php echo $usersByname['userName']?></a>
                    <ul class="sub">
                        <li><a href="../../logOut.php">Logout</a></li>
                    </ul>
                </li>

                <?php if($_SESSION['role']=="admin"){
                    ?>

                    <li><a href="../../dashboard.php">Dashboard</a></li>
                    <li><a href="../../userManager.php">User Manger</a> </li>

               <?php
                }
            ?>


        <?php
            }else{
                ?>
                <li><a href="login.php">Login</a></li>
                <li><a href="register.php">Register</a></li>
                <?php
            }

            ?>
    </div>
</div>
