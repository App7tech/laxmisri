<?php
    include_once('config.php');
    $slider_text = $_POST['slider_text'];
    $slider_image = $_FILES['slider_img']['name'];
    $msg = '';
    if($slider_image == ''){
        $msg = 'Image Required';
    }
    if($msg == ''){
        $date_time = date('Y-m-d H:i:s');
        $slider_temp = $_FILES['slider_img']['tmp_name'];
        $slider_db_name = time().'_'.$slider_image;
        $path = "../assets/images/home_sliders/".$slider_db_name;
        if(move_uploaded_file($slider_temp,$path)){
            $dbhandle = db_connect();
            $sql = "INSERT INTO `sliders`(`slider_text`, `slider_image`, `status`, `date_time`) VALUES ('$slider_text','$slider_db_name','1','$date_time')";
            $slider = mysqli_query($dbhandle,$sql);
            if($slider){
                echo "<script>alert('Slider Added Successfully'); window.location='sliders.php'</script>";
            }else{
                echo "<script>alert('Failed to add Slider'); window.location='sliders.php'</script>";
            }
        }else{
            echo "<script>alert('Slider Upload Failed!'); window.location='sliders.php'</script>";
        }
    }else{
        echo "<script>alert('".$msg."'); window.location='sliders.php'</script>";
    }
?>