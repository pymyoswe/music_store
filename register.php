<?php session_start();

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
        <?php include ("navBar.php")?>
    </div>
    <div class="body">
        <div class="registerForm">
            <?php
            if($_SESSION['error']) {
            ?><div class="errorMsg"><?php echo $_SESSION['error']; ?></div>
                <?php unset($_SESSION['error']);
            }?>
            <form action="Con/connect.php" method="post" enctype="multipart/form-data">

                <input type="hidden" name="flag" id="flag" value="register">
                <label for="userName">User Name</label><br>
                <input type="text" name="userName" id="userName" required><br>
                <label for="email">Email</label><br>
                <input type="email" name="email" id="email" required><br>
                <label for="password">Password</label><br>
                <input type="password" name="password" id="password" required><br>
                <label for="conpassword">Confirm Password</label><br>
                <input type="password" name="conPassword" id="conPassword" required><br>
                <label for="userPhoto">User Photo</label>
                <input type="file" name="userPhoto" id="userPhoto" required ><br>
                <input type="submit" name="btnResister" id="btnRegister" value="Register">
            </form>
        </div>
    </div>
    <div class="footer">
        &copy;www.musicstore.com
    </div>
</div>
</body>
</html>