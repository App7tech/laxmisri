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
        <?php $page = "categories"; ?>
        <?php include_once('includes/header.php'); ?>
        <div class="page-wrapper">
            <div class="container-fluid">
                <!-- Row -->
                <div class="row pt-4">
                    <div class="col-lg-4 col-xlg-4 col-md-4">
                        <div class="card">
                            <div class="card-block">
                                <form class="form-horizontal form-material" action="category_add.php" method="post" enctype="multipart/form-data">
                                    <div class="form-group">
                                        <label for="category_text" class="col-md-12">Category Text</label>
                                        <div class="col-md-12">
                                            <input type="text"class="form-control form-control-line" name="category_text" id="category_text" placeholder="Enter category Text ">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-12">Category featured</label>
                                        <div class="col-md-12">
                                            <select name="featured" class="form-control">
                                                <option value="yes">Yes</option>
                                                <option value="no">No</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="col-sm-12">
                                            <button class="btn btn-success">Add category</button>
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
                                        <th>Category</th>
                                        <th>Featured</th>
                                        <th>Actions</th>
                                    </thead>
                                    <tbody>
                                        <?php 
                                            include_once('config.php');
                                            $dbhandle = db_connect();
                                            $sql = "SELECT * FROM `categories` WHERE status = 1";
                                            $category = mysqli_query($dbhandle,$sql);
                                            $iterate = 1;
                                            if(mysqli_num_rows($category)>0){
                                                while($row = mysqli_fetch_array($category)){
                                                    echo '<tr>';
                                                    echo '<td>'.$iterate.'</td>';
                                                    echo '<td>'.$row['category_name'].'</td>';
                                                    echo '<td>'.$row['featured'].'</td>';
                                                    echo '<td><a href="category_edit.php?id='.$row['category_id'].'">Edit</a> | <a href="category_delete.php?id='.$row['category_id'].'">Delete</a></td>';
                                                    echo '</tr>';
                                                    $iterate++;
                                                }
                                            }else{
                                                echo '<tr>';
                                                echo '<td colspan="4">No categories Found!</td>';
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
