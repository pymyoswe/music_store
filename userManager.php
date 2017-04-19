<?php
session_start();

include ("Con/auth.php");

?>
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
    </div>
    <?php include("navBar.php") ?>
    <div class="body">
        <table border="2px">
            <form action="deleteUser.php" method="post">


            <tr>
                <td><b>User Name</b></td>
                <td><b>Email</b></td>
                <td><b>Account Role</b></td>
                <td><b>Created Date</b></td>
                <td><b><input type="submit" name="btnRemove" value="Remove"></b></td>

            </tr>
            <?php
              include ("../../Con/config.php");

              $User=new Users();
              $showUser=$User->show();



              foreach ($showUser as $row){


                  ?>
            <tr>
                <td><?php echo $row['userName'] ?></td>
                <td><?php echo $row['Email'] ?></td>
                <td><?php  if($row['userRole']==1){
                    echo "Admin";
                }
                else{
                    echo "Normal";
                }
                ?></td>
                <td><?php echo $row['created_date'] ?></td>
                <td><input type="checkbox" name="chkUser[]" id="chkUser" value="<?php echo $row['id'] ?>"> </td>

            </tr>
            <?php
              }

            ?>

            </form>
        </table>
    </div>
    <div class="footer">
        &copy;www.musicstore.com
    </div>
</div>
</body>
</html>