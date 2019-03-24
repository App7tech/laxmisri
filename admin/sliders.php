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
                                <form class="form-horizontal form-material" action="slider_add.php" method="post" enctype="multipart/form-data">
                                    <div class="form-group">
                                        <label for="slider_text" class="col-md-12">Slider Text</label>
                                        <div class="col-md-12">
                                            <input type="text"class="form-control form-control-line" name="slider_text" id="slider_text" placeholder="Enter Slider Text ">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-12">Slider Image</label>
                                        <div class="col-md-12">
                                            <input type="file" name="slider_img" id="slider_img" class="form-control form-control-line">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="col-sm-12">
                                            <button class="btn btn-success">Add Slider</button>
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
