<?php
    include_once('config.php');
    $id = $_GET['id'];
    $dbhandle = db_connect();
    $sql = "SELECT slider_image FROM sliders WHERE id='$id'";
    $slider = mysqli_query($dbhandle,$sql);
    if(mysqli_num_rows($slider)>0){
        $row = mysqli_fetch_array($slider);
        $slider_image = $row['slider_image'];
        $slider_image_path = '../assets/images/home_sliders/'.$slider_image;
        $del_sql = "DELETE FROM sliders WHERE id='$id'";
        $slider = mysqli_query($dbhandle,$del_sql);
        if($slider){
            unlink($slider_image_path);
            echo "<script>alert('Slider Deleted Successfully!'); window.location='sliders.php'</script>";
        }else{
            echo "<script>alert('Failed to Delete'); window.location='sliders.php'</script>";
        }
    }else{
        echo "<script>alert('Failed to Delete'); window.location='sliders.php'</script>";        
    }
?>