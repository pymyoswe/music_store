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

    </div>
    <?php include ("navBar.php")?>
    <div class="body">
        <div class="loginForm">
            <?php
            if($_SESSION['errorLogin']) {
                ?><div class="errorMsglogin"><?php echo $_SESSION['errorLogin']; ?></div>
                <?php unset($_SESSION['errorLogin']);
            }?>
            <form action="Con/connect.php" method="post">
                <input type="hidden" name="flag" id="flag" value="login">

                <label for="userName">User Name</label><br>
                <input type="text" name="userName" id="userName" required><br>
               <label for="password">Password</label><br>
                <input type="password" name="password" id="password" required><br>
                <input type="submit" name="btnLogin" id="btnLogin" value="Login">
            </form>
        </div>
    </div>
    <div class="footer">
        &copy;www.musicstore.com
    </div>
</div>
</body>
</html>