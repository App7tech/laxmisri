<?php
    include_once('config.php');
    $id = $_GET['id'];
    $dbhandle = db_connect();
    $del_sql = "DELETE FROM categories WHERE category_id='$id'";
    $category = mysqli_query($dbhandle,$del_sql);
    if($category){
        echo "<script>alert('Category Deleted Successfully!'); window.location='categories.php'</script>";
    }else{
        echo "<script>alert('Failed to Delete'); window.location='categories.php'</script>";
    }
?>