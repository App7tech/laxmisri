<?php
    session_start();
    session_destroy();
    // redirect to login page after session destroy
    header('location:index.php');
?>