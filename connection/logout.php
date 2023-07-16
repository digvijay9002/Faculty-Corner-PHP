<?php

session_start();
unset($_SESSION['name']);
session_destroy();

echo("<script>location.href = '../php/login.php';</script>");


//header("location:../Login.php");
exit();
