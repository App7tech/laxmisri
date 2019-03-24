<?php
    include_once('config.php');
    $category_text = $_POST['category_text'];
    $featured = $_POST['featured'];
    $msg = '';
    if($category_text == ''){
        $msg = 'Category Required';
    }
    if($msg == ''){
        $date_time = date('Y-m-d H:i:s');
        $dbhandle = db_connect();
        $check_sql = "SELECT category_name FROM categories WHERE category_name='$category_text'";
        $check = mysqli_query($dbhandle,$check_sql);
        if(mysqli_num_rows($check)>0){
            // already exists
            echo "<script>alert('Category Already Exists'); window.location='categories.php'</script>";
        }else{
            $sql = "INSERT INTO `categories`(`category_name`, `featured`, `status`, `date_time`) VALUES ('$category_text','$featured','1','$date_time')";
            $category = mysqli_query($dbhandle,$sql);
            if($category){
                echo "<script>alert('category Added Successfully'); window.location='categories.php'</script>";
            }else{
                echo "<script>alert('Failed to add category'); window.location='categories.php'</script>";
            }
        }
    }else{
        echo "<script>alert('".$msg."'); window.location='categories.php'</script>";
    }
?>