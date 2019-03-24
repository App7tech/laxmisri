<?php
    // DB Connection
    function db_connect() {
        if ($_SERVER['SERVER_NAME'] === "localhost") {
            $username = "root";
            $password = "";
            $hostname = "localhost";
        } else {
            $username = "laxmi_sri";
            $password = "kR4RvKfBxh4y";
            $hostname = "localhost";
        }
        //connection to the database
        $dbhandle = mysqli_connect($hostname, $username, $password) or die(mysqli_error());
        //select a database to work with
        $selected = mysqli_select_db($dbhandle,"laxmi_sri") or die(mysqli_error()); 
        return $dbhandle;
    }

    // To Get Base Url
    function base_url() {
        if ($_SERVER['SERVER_NAME'] === "localhost") {
            $base = "http://localhost/laxmi_sri/admin";
            return $base;
        } else {
            $base = "http://laxmisri.com/";
            return $base;
        }
    }
?>