<?php
    session_start();
    $_SESSION["usersession"] = '';
    header("Location:index.php");
?>