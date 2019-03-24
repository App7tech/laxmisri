<?php
    include_once('config.php');
    $id = $_GET['id'];
    $dbhandle = db_connect();
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
        <?php $page = "products"; ?>
        <?php include_once('includes/header.php'); ?>
        <div class="page-wrapper">
            <div class="container-fluid">
                <!-- Row -->
                <div class="row pt-4">
                    <div class="col-lg-5 col-xlg-5 col-md-5">
                        <div class="card">
                            <div class="card-block">
                                <h3>Product Edit</h3>
                                <form class="form-horizontal form-material" action="product_add.php" method="post" enctype="multipart/form-data">
                                    <div class="form-group row">
                                        <label for="product_text" class="col-md-12">Product Name</label>
                                        <div class="col-md-12">
                                            <input type="text"class="form-control form-control-line" name="product_text" id="product_text" placeholder="Enter product Text ">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="description" class="col-md-12">Product Description</label>
                                        <div class="col-md-12">
                                            <textarea class="form-control form-control-line" name="description" id="description" cols="20" rows="3" placeholder="Enter some Description"></textarea>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-md-12">Product Images</label>
                                        <div class="col-md-12">
                                            <input type="file" name="product_img[]" id="product_img[]" class="form-control form-control-line" multiple>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <div class="col-md-6">
                                            <label for="price" >Product price</label>
                                            <input type="text" class="form-control form-control-line"  name="price" id="price">
                                        </div>
                                        <div class="col-md-6">
                                            <label for="category" >Product category</label>
                                            <select name="category" id="category" class="form-control form-control-line" >
                                                <?php 
                                                    $sql = "SELECT * FROM `categories` WHERE status = 1";
                                                    $category = mysqli_query($dbhandle,$sql);
                                                    $iterate = 1;
                                                    if(mysqli_num_rows($category)>0){
                                                        while($row = mysqli_fetch_array($category)){
                                                            
                                                ?>
                                                        <option value="<?=$row['category_id']?>"><?=$row['category_name']?></option>
                                                <?php
                                                        } //while close
                                                    } // if close
                                                ?>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group row offer_price_div">
                                       <!-- offer field will come here dynamically -->
                                    </div>
                                    <div class="form-group row">
                                        <div class="col-md-6">
                                            <label for="featured" >Show in Our Products</label>
                                            <select name="featured" id="featured" class="form-control form-control-line" >
                                                <option value="0">No</option>
                                                <option value="1">Yes</option>
                                            </select>
                                        </div>
                                        <div class="col-md-6">
                                            <label for="offer" >Show in Offer</label>
                                            <select name="offer" id="offer" class="form-control form-control-line" onchange="get_offer_price()">
                                                <option value="0">No</option>
                                                <option value="1">Yes</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <div class="col-md-12">
                                            <label for="facebook" >facebook</label>
                                            <input type="text" class="form-control form-control-line"  name="facebook" id="facebook">
                                        </div>
                                        <div class="col-md-12">
                                            <label for="twitter" >twitter</label>
                                            <input type="text" class="form-control form-control-line"  name="twitter" id="twitter">
                                        </div>
                                        <div class="col-md-12">
                                            <label for="instagram" >instagram</label>
                                            <input type="text" class="form-control form-control-line"  name="instagram" id="instagram">
                                        </div>
                                        <div class="col-md-12">
                                            <label for="linkedIn" >linkedIn</label>
                                            <input type="text" class="form-control form-control-line"  name="linkedIn" id="linkedIn">
                                        </div>
                                        <div class="col-md-12">
                                            <label for="whatsapp" >whatsapp</label>
                                            <input type="text" class="form-control form-control-line"  name="whatsapp" id="whatsapp">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <div class="col-sm-12">
                                            <button class="btn btn-success">Add product</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-7 col-xlg-7 col-md-7">
                        <div class="card">
                            <div class="card-block">
                                <?php 
                                    include_once('config.php');
                                    $dbhandle = db_connect();
                                    $sql = "SELECT * FROM `products` WHERE product_id = '$id'";
                                    $product = mysqli_query($dbhandle,$sql);
                                    $iterate = 1;
                                    $image_path = '../assets/images/products/';
                                    if(mysqli_num_rows($product)>0){
                                        while($row = mysqli_fetch_array($product)){
                                            $images = unserialize($row['images']);
                                            if(count($images)){
                                                echo '<div style="overflow-y:auto;display: inline-flex;">';
                                                foreach($images as $image){
                                                    $image_name = $image_path.$image;
                                                    echo '<div class="p-1">';
                                                        echo '<img src="'.$image_name.'" style="width: 100px;height: 100px;object-fit: contain"/><br>';
                                                        echo '<a class="badge badge-danger w-100" href="product_delete.php?id='.$row['product_id'].'">Delete</a>';
                                                    echo '</div>';
                                                }
                                                echo '</div>';
                                                
                                            }else{
                                                echo '<h3>No Images</h3>';
                                            }
                                            $iterate++;
                                        }
                                    }else{
                                        echo '<tr>';
                                        echo '<td colspan="4">No products Found!</td>';
                                        echo '</tr>';
                                    }
                                ?>
                            </div>
                            <div class="card-block">
                                <form class="form-horizontal form-material" action="product_edit.php" method="post" enctype="multipart/form-data">
                                    <div class="form-group row">
                                        <label class="col-md-12">Add Images</label>
                                        <div class="col-md-12">
                                            <input type="file" name="product_img[]" id="product_img[]" class="form-control form-control-line" multiple>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <div class="col-sm-12">
                                            <button class="btn btn-success">Add Images</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <?php include_once('includes/footer.php'); ?>
        </div>
    </div> 
    <?php include_once('includes/foot.php'); ?>
    <script src="js/products.js"></script>
</body>

</html>
