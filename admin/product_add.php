<?php
    include_once('config.php');
    $product_text   = $_POST['product_text'];
    $description    = $_POST['description'];
    $price          = $_POST['price'];
    $category       = $_POST['category'];
    $featured       = $_POST['featured'];
    $offer          = $_POST['offer'];
    $facebook       = $_POST['facebook'];
    $twitter 		= $_POST['twitter'];
    $instagram 		= $_POST['instagram'];
    $linkedin 		= $_POST['linkedIn'];
	$whatsapp 		= $_POST['whatsapp'];
	
	$social_links 	= 	array('facebook'	=>	$facebook,
							'twitter'	=>	$twitter,
							'instagram'	=>	$instagram,
							'linkedin'	=>	$linkedin,
							'whatsapp'	=>	$whatsapp,
							);
	$social_links	=	serialize($social_links);

    $msg = '';
    if($product_text == ''){
        $msg .= 'Product name Required, ';
	}
	if($price == ''){
        $msg .= 'Price Required, ';
	}
	if($category == ''){
        $msg .= 'Category Required, ';
	}
	if($featured == ''){
        $msg .= 'Featured Required, ';
	}
	if($offer == '1'){
		$offer_price = $_POST['offer_price'];
		if($offer_price == ''){
			$msg .= 'Offer Price Required, ';
		}
	}

    if($msg == ''){
		$error=array();
		$images = array();
		$extension=array("jpeg","jpg","png","gif");
		foreach($_FILES["product_img"]["tmp_name"] as $key=>$tmp_name) {
			$file_name=$_FILES["product_img"]["name"][$key];
			$file_tmp=$_FILES["product_img"]["tmp_name"][$key];
			$ext=pathinfo($file_name,PATHINFO_EXTENSION);

			if(in_array($ext,$extension)) {
				$filename=basename($file_name,$ext);
				$newFileName=$filename."_".time().".".$ext;
				move_uploaded_file($file_tmp=$_FILES["product_img"]["tmp_name"][$key],"../assets/images/products/".$newFileName);
				array_push($images,"$newFileName");
			}
			else {
				array_push($error,"$file_name, ");
			}
		}
		$images = serialize($images);
		$offer_price = 0;
		if(isset($_POST['offer_price'])){
			$offer_price = $_POST['offer_price'];
		}
        $date_time = date('Y-m-d H:i:s');
		$dbhandle = db_connect();
		echo $sql = "INSERT INTO `products`(`name`, `description`, `price`, `offer_price`, `category_id`, `social_links`, `images`, `featured`, `offer`, `status`, `date_time`) VALUES ('$product_text','$description','$price','$offer_price','$category','$social_links','$images','$featured','$offer','1','$date_time')";
		$product = mysqli_query($dbhandle,$sql);
		if($product){
			// echo "<script>alert('product Added Successfully'); window.location='products.php'</script>";
		}else{
			echo "<script>alert('Failed to add product'); window.location='products.php'</script>";
		}
        
    }else{
        echo "<script>alert('".$msg."'); window.location='products.php'</script>";
    }
?>