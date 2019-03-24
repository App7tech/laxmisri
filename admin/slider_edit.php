<?php
    include_once('config.php');
    $id = $_GET['id'];
    $dbhandle = db_connect();
    $sql = "SELECT * FROM sliders WHERE id='$id'";
    $slider = mysqli_query($dbhandle,$sql);
    if(mysqli_num_rows($slider)>0){
        $row = mysqli_fetch_array($slider);
        $slider_text = $row['slider_text'];
        $slider_image = $row['slider_image'];
        $slider_src = '../assets/images/home_sliders/'.$slider_image;
    }else{
        echo "<script>alert('Slider not Found!'); window.location='sliders.php';</script>";
    }

    if(isset($_POST['update_slider'])){
        $edit_slider_text = $_POST['slider_text'];
        $edit_slider_image = $_FILES['slider_img']['name'];
        if($edit_slider_image != ''){
            // upload new image
            $slider_temp = $_FILES['slider_img']['tmp_name'];
            $slider_db_name = time().'_'.$edit_slider_image;
            $path = "../assets/images/home_sliders/".$slider_db_name;
            if(move_uploaded_file($slider_temp,$path)){
                $dbhandle = db_connect();
                $sql = "UPDATE `sliders` SET `slider_text`='$edit_slider_text', `slider_image`='$slider_db_name' WHERE id='$id'";
                $slider = mysqli_query($dbhandle,$sql);
                if($slider){
                    unlink($slider_src);
                    echo "<script>alert('Slider Updated Successfully'); window.location='sliders.php'</script>";
                }else{
                    echo "<script>alert('Failed to Update Slider'); window.location='sliders.php'</script>";
                }
            }else{
                echo "<script>alert('Slider Update Failed!'); window.location='sliders.php'</script>";
            }
        }else{
            // set db image
            $dbhandle = db_connect();
            $sql = "UPDATE `sliders` SET `slider_text`='$edit_slider_text' WHERE id='$id'";
            $slider = mysqli_query($dbhandle,$sql);
            if($slider){
                echo "<script>alert('Slider Updated Successfully'); window.location='sliders.php'</script>";
            }else{
                echo "<script>alert('Failed to Update Slider'); window.location='sliders.php'</script>";
            }
        }
    }
?>

<!DOCTYPE html>
<html lang="en">

<head>
<?php include_once('includes/head.php'); ?>
</head>

<body class="fix-header fix-sidebar card-no-border">
    <div class="preloader">
        <svg class="circular" viewBox="25 25 50 50">
            <circle class="path" cx="50" cy="50" r="20" fill="none" stroke-width="2" stroke-miterlimit="10" /> </svg>
    </div>
    <div id="main-wrapper">
        <?php $page = "sliders"; ?>
        <?php include_once('includes/header.php'); ?>
        <div class="page-wrapper">
            <div class="container-fluid">
                <!-- Row -->
                <div class="row pt-4">
                    <div class="col-lg-4 col-xlg-4 col-md-4">
                        <div class="card">
                            <div class="card-block">
                                <h3>Edit Slider</h3>
                                <form class="form-horizontal form-material" action="slider_edit.php?id=<?=$id?>" method="post" enctype="multipart/form-data">
                                    <div class="form-group">
                                        <label for="slider_text" class="col-md-12">Slider Text</label>
                                        <div class="col-md-12">
                                            <input type="text"class="form-control form-control-line" name="slider_text" id="slider_text" value="<?=$slider_text?>" placeholder="Enter Slider Text ">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-12">Previous image
                                        <img src="<?=$slider_src?>" height="100px"/></label>
                                        <br>
                                        <br>
                                        <label class="col-md-12">Edit Slider Image</label>
                                        <div class="col-md-12">
                                            <input type="file" name="slider_img" id="slider_img" class="form-control form-control-line">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="col-sm-12">
                                            <button class="btn btn-success" name="update_slider">Update Slider</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-8 col-xlg-8 col-md-8">
                        <div class="card">
                            <div class="card-block">
                                <table class="table table-responsive" style="height:400px;overflow:auto">
                                    <thead>
                                        <th>Sno</th>
                                        <th>Text</th>
                                        <th>Image</th>
                                        <th>Actions</th>
                                    </thead>
                                    <tbody>
                                        <?php 
                                            include_once('config.php');
                                            $dbhandle = db_connect();
                                            $sql = "SELECT * FROM `sliders` WHERE status = 1";
                                            $slider = mysqli_query($dbhandle,$sql);
                                            $iterate = 1;
                                            $image_path = '../assets/images/home_sliders/';
                                            if(mysqli_num_rows($slider)>0){
                                                while($row = mysqli_fetch_array($slider)){
                                                    $img_src = $image_path.$row['slider_image'];
                                                    echo '<tr>';
                                                    echo '<td>'.$iterate.'</td>';
                                                    echo '<td>'.$row['slider_text'].'</td>';
                                                    echo '<td><img src="'.$img_src.'" height="100"/></td>';
                                                    echo '<td><a href="slider_edit.php?id='.$row['id'].'">Edit</a> | <a href="slider_delete.php?id='.$row['id'].'">Delete</a></td>';
                                                    echo '</tr>';
                                                    $iterate++;
                                                }
                                            }else{
                                                echo '<tr>';
                                                echo '<td colspan="4">No Sliders Found!</td>';
                                                echo '</tr>';
                                            }
                                        ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <?php include_once('includes/footer.php'); ?>
        </div>
    </div> 
    <?php include_once('includes/foot.php'); ?>
</body>

</html>
