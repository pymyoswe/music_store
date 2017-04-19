<?php
session_start();
include ("auth.php");
 unset($_SESSION['control']);
 header("location:../index.php");