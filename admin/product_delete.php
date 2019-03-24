<?php
    include_once('config.php');
    $id = $_GET['id'];
    $dbhandle = db_connect();
    $sql = "SELECT * FROM `products` WHERE product_id = '$id'";
    $product = mysqli_query($dbhandle,$sql);
    $iterate = 1;
    $image_path = '../assets/images/products/';
    if(mysqli_num_rows($product)>0){
        $row = mysqli_fetch_array($product);
        $images = unserialize($row['images']);
        foreach($images as $image){
            $image_name = $image_path.$image;
            unset($image_name);
            print_r($image_name);
        }
        $del_sql = "DELETE FROM `products` WHERE product_id = '$id'";
        // $products = mysqli_query($dbhandle,$del_sql);
        if($products){
            echo "<script>alert('Product Deleted Successfully!'); window.location='products.php';</script>";
        }else{
            // echo "<script>alert('Failed to Delete'); window.location='products.php';</script>";
        }
    }else{
        echo "<script>alert('Failed to Delete'); window.lcoation='products.php'; </script>";
    }
?>