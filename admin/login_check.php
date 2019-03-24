<?php
    session_start();
    include_once('config.php');
    $email = $_POST['email'];
    $password = $_POST['password'];
    $msg = '';
    if($email == ''){
        $msg .= 'Email Required, ';
    }
    if($password == ''){
        $msg .= "Password Required.";
    }

    if($msg == ''){
        $dbhandle = db_connect();
        $email_sql = "SELECT email,password FROM admin WHERE email='$email'";
        $email_check = mysqli_query($dbhandle,$email_sql);
        if(mysqli_num_rows($email_check)>0){
            while($row = mysqli_fetch_array($email_check)){
                $db_password = $row['password'];
                if(md5($password) == $db_password){
                    // login success
                    $_SESSION['admin_email'] = $row['email'];
                    echo "<script> window.location='dashboard.php';</script>";
                }else{
                    echo "<script> alert('Invalid Password'); window.location='index.php';</script>";
                }
            }
        }else{
            echo "<script> alert('Invalid Email'); window.location='index.php';</script>";
        }
    }else{
        echo "<script> alert('".$msg."'); window.location='index.php';</script>";
    }
?>