<!DOCTYPE html>
<html>
    <head>
		<?php include_once('includes/head.php'); ?>
	</head>
    <body>   
        <!-- wrapper div start -->
		<?php include_once('includes/header.php'); ?>
           
        <div class="b-product_single_breadcrumbs pt-3 pb-3">
            <div class="container" style="width:85% !important">
              <div class="row clearfix">
                <div class="col-xl-8 col-lg-8 col-md-8 col-sm-12 col-xs-12">
                    <div class="b-breadcrumbs">
                        <a href="index.php">Home</a>
                        <?php
                            $product_id = 0; 
                            if(isset($_GET['product'])){
                                $product_id = $_GET['product']; 
                            }
                            $dbhandle = db_connect();
                            $sql = "SELECT * FROM `products` WHERE product_id = $product_id AND status=1";
                            $product = mysqli_query($dbhandle,$sql);
                            $iterate = 1;
                            if(mysqli_num_rows($product)>0){
                                $row = mysqli_fetch_array($product);
                                $name = $row['name'];
                                $description = $row['description'];
                                $price = $row['price'];
                                $offer_price = $row['offer_price'];
                                $category_id = $row['category_id'];
                                $social_links = unserialize($row['social_links']);
                                $images = unserialize($row['images']);
                                $offer = $row['offer'];
                                $category_sql = "SELECT * FROM `categories` WHERE category_id = $category_id ";
                                $category = mysqli_query($dbhandle,$category_sql);
                                if(mysqli_num_rows($category)>0){
                                    $category_row = mysqli_fetch_array($category);
                                    $category_name = $category_row['category_name'];
                                }
                            }else{
                                echo '<script>alert("No Product Found!"); window.location="index.php";</script>';
                            }
                        ?>
                        <a href="products.php?category=<?=$category_id?>" class="text-capitalize"><?=$category_name;?></a>
                        <span class="text-capitalize"><?=$name;?></span>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12 col-xs-12">
                </div>
              </div>
            </div>
          </div>
          <div class="b-product_single pb-5">
            <div class="container">
              <div class="row clearfix">
                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-xs-12">
                  <div class="row clearfix b-product-display">
                    <div class="col-xl-9 col-lg-9 col-md-9 col-sm-12 b-display-single">
                      <div class="b-product-carousel owl-carousel" id="bSingleProductCarousel" data-slider-id="bSingleProductCarousel">
                        <?php
                            $image_path = 'assets/images/';
                            if(count($images)<=0){
                                $image = $image_path.'noImage.jpg';
                                echo'
                                <div class="b-produt-item">
                                    <img src="'.$image.'" alt="" class="img-fluid" data-zoomed="'.$image.'">
                                </div>
                                ';
                            }else{
                                foreach($images as $image){
                                    $image1 = $image_path.'products/'.$image;
                                    echo'
                                    <div class="b-produt-item">
                                        <img src="'.$image1.'" alt="" class="img-fluid" data-zoomed="'.$image1.'">
                                    </div>
                                    ';
                                }
                            }
                        ?>
                      </div>

                      <div class="b-show-product-gallery-wrap">
                        <a href="javaScript:void(0)">
                          <i class="icon-magnifier-add icons"></i>
                        </a>
                      </div> <!-- /b-show-product-gallery-wrap-->
                    </div>
                    <div class="col-xl-3 col-lg-3 col-md-3 col-sm-12">
                      <div class="b-display-list-wrapper">
                        <div class="owl-thumbs b-display-item-list" id="bSingleProduct" data-slider-id="bSingleProductCarousel">
                            <?php
                                $image_path = 'assets/images/';
                                if(count($images)<=0){
                                    $image = $image_path.'noImage.jpg';
                                    echo'
                                    <div class="owl-thumb-item b-display-item">
                                        <img src="'.$image.'" alt="" class="img-fluid">
                                    </div>
                                    ';
                                }else{
                                    foreach($images as $image){
                                        $image1 = $image_path.'products/'.$image;
                                        echo'
                                        <div class="owl-thumb-item b-display-item">
                                            <img src="'.$image1.'" alt="" class="img-fluid">
                                        </div>
                                        ';
                                    }
                                }
                            ?>
                        </div><!-- /b-display-item-list -->

                        <div class="b-slider-action">
                          <button class="slick-prev"><i class="fa fa-angle-up"></i></button>
                          <button class="slick-next"><i class="fa fa-angle-down"></i></button>
                        </div> <!-- /b-slider-action-->
                      </div><!-- /b-display-item-list-wrapper -->
                    </div>
                  </div>
                </div>
                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-xs-12">
                  <div class="b-product_single_summary">
                    <h1 class="text-capitalize"><?=$name?></h1>
                    <p class="b-price">
                        <span class="b-amount">
                        <?php
                            $offer_text = '';
                            if($offer == 1) {
                                echo '<span class="b-symbol"><i>D.NO: </span>'.$offer_price.'<small> <s>'.$price.'</s></i></small> ';
                                $offer_text = '<span class="badge badge-primary">Offer Product</span>';
                            } else{
                                echo '<span class="b-symbol"><i>D.NO: </span>'.$price.'</i>';
                            }
                        ?>
                        </span>
                    </p>
                    <p><?=$offer_text?></p>
                    <div class="b-product_description">
                      <p><?=$description?></p>
                    </div>
                    
                    <div class="b-product_single_option">
                      <ul class="pl-0 list-unstyled text-capitalize">
                        <li><b>Category</b>: <a href="#"><?=$category_name?></a></li>
                        <li>
                          <b>Share</b>:
                          <span class="b-share_product">
                            <a href="<?=$social_links['facebook']?>" target="_blank" class="fab fa-facebook-f"></a>
                            <a href="<?=$social_links['twitter']?>" target="_blank" class="fab fa-twitter"></a>
                            <a href="<?=$social_links['instagram']?>" target="_blank" class="fab fa-instagram"></a>
                            <a href="<?=$social_links['linkedin']?>" target="_blank" class="fab fa-linkedin"></a>
                            <a href="<?=$social_links['whatsapp']?>" target="_blank" class="fab fa-whatsapp"></a>
                          </span>
                        </li>
                      </ul>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
 
          <section id="b-products">
              <div class="b-section_title">
                 <h4 class="text-center text-uppercase">
                  RELATED PRODUCTS
                  <span class="b-title_separator"><span></span></span>
                 </h4>
              </div>
              <div class="b-products b-product_grid b-product_grid_four mb-4">
                  <div class="container">
                      <div class="clearfix owl-carousel owl-theme" id="b-related_products">
              <?php 
              $msg = '';
							$sql = "SELECT * FROM `products` WHERE category_id='$category_id' AND product_id!='$product_id' limit 8";
							$product = mysqli_query($dbhandle,$sql);
							$iterate = 1;
							$image_path = 'assets/images/';
							if(mysqli_num_rows($product)>0){
								while($row = mysqli_fetch_array($product)){
									$links = unserialize($row['social_links']);
									$product_images = unserialize($row['images']);
									if(count($product_images)<=0){
										$image = $image_path.'noImage.jpg';
									}else{
										$image = $image_path.'products/'.$product_images[0];
									}
						?>
                          <div>
                               <div class="b-product_grid_single">
                                 <div class="b-product_grid_header custom-prod-page-image">
                                     <a href="product-view.php?product=<?=$row['product_id']?>">
                                       <img data-src="<?=$image?>" src="<?=$image?>" class="img-fluid img-switch d-block m-auto" alt="" style="">
                                     </a>
                                 </div>
                                 <div class="b-product_grid_info">
                                    <h3 class="product-title">
                                        <a href="product-view.php?product=<?=$row['product_id']?>"><?=$row['name']?></a>
                                    </h3>
                                    <div class="clearfix">
                                      <div class="b-product_grid_toggle float-left">
										<span class="b-price">D.NO: <?=$row['price']?></span>
										<span class="b-add_cart">
											<a href="product-view.php?product=<?=$row['product_id']?>">D.NO: <?=$row['price']?></a>
										</span>
                                      </div>
                                      <div class="b-product_options float-right">
                                        <ul class="pl-0 mb-0 list-unstyled">
											<li>
												<a href="<?=$links['facebook']?>" target="_blank"><span data-toggle="tooltip" title="" data-original-title="Facebook">
												<i class="fab fa-facebook-f"></i></span></a>
											</li>
											<li>
												<a href="<?=$links['twitter']?>" target="_blank"><span data-toggle="tooltip" title="" data-original-title="Twitter">
												<i class="fab fa-twitter"></i></span></a>
											</li>
											<li>
												<a href="<?=$links['linkedin']?>" target="_blank"><span data-toggle="tooltip" title="" data-original-title="Linkedin">
												<i class="fab fa-linkedin-in"></i></span></a>
											</li>
											<li>
												<a href="<?=$links['instagram']?>" target="_blank"><span data-toggle="tooltip" title="" data-original-title="Instagram">
												<i class="fab fa-instagram"></i></span></a>
											</li>
											<li>
												<a href="<?=$links['whatsapp']?>" target="_blank"><span data-toggle="tooltip" title="" data-original-title="Whatsapp">
												<i class="fab fa-whatsapp"></i></span></a>
											</li>
                                        </ul>
                                     </div>
                                    </div>
                                 </div>
                               </div>
						  </div>
						<?php
								} //while close
              } //if close
              else{
                $msg = "<p class='text-center'>No Related Products</p>";
              }
						?>
                      </div>
                  </div>
              </div>
              <?php echo $msg; ?>
          </section>

            <!-- footer start -->
            <?php include_once('includes/footer.php'); ?>
            <!-- footer end -->
        </div>
        <!-- wrapper div end -->
            
        <!-- Modal -->
        <div class="modal fade product_view" id="b-qucik_view" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
            <div class="modal-content"> 
                <button type="button" class="btn btn-close btn-secondary" data-dismiss="modal">
                    <i class="icon-close icons"></i>
                </button>
                <div class="modal-body p-0">
                    <div class="row">
                        <div class="col-md-6 product_img">
                            <div class="owl-carousel owl-theme" id="b-product_pop_slider">
                                <div><img src="assets/images/accessories-01.jpg" class="img-fluid d-block m-auto"></div>
                                <div><img src="assets/images/accessories-02.jpg" class="img-fluid d-block m-auto"></div>
                            </div>
                        </div>
                        <div class="col-md-6 product_content pr-5 pt-4">
                            <div class="b-product_single_summary">
                                <h1>Jhecked Bag</h1>
                                <p class="b-price">
                                <span class="b-amount">
                                <span class="b-symbol">£</span>79.00</span>
                                </p>
                                <div class="b-produt_description">
                                <p>Adipiscing vehicula amet in natoque lobortis mus velit dis vestibulum ullamcorper senectus conubia suspendisse vestibulum nam condimentum aliquet ipsum justo eu vestibulum sagittis.A vel vehicula a mi varius porta.</p>
                                </div>
                                <div class="b-product_attr">
                                <div class="b-product_attr_single">
                                    <ul class="pl-0 list-unstyled clearfix">
                                    <li><span class="b-product_attr_title pt-1">Color:</span></li> 
                                    <li><a href="#"><span data-toggle="tooltip" title="" data-original-title="Black" class="b-color_attr b-black"></span></a></li>
                                    <li><a href="#"><span data-toggle="tooltip" title="" data-original-title="Red" class="b-color_attr b-red"></span></a></li>
                                    <li><a href="#"><span data-toggle="tooltip" title="" data-original-title="Yellow" class="b-color_attr b-yellow"></span></a></li>
                                    </ul>
                                </div>
                                <div class="b-product_attr_single">
                                    <ul class="pl-0 list-unstyled clearfix">
                                    <li><span class="b-product_attr_title">Size:</span></li>
                                    <li><a href="#"><span class="b-size_attr">L</span></a></li>
                                    <li><a href="#"><span class="b-size_attr">XL</span></a></li>
                                    <li><a href="#"><span class="b-size_attr">XXL</span></a></li>
                                    </ul>
                                </div>
                                </div>
                                <div class="b-product_single_action clearfix">
                                <div class="b-quantity pull-left">
                                    <input type="button" value="-" class="b-minus">
                                    <input type="text" step="1" min="1" max="" name="b-quantity" value="1" title="Qty" class="input-text qty text" size="4" pattern="[0-9]*" inputmode="numeric">
                                    <input type="button" value="+" class="b-plus">
                                </div>
                                <button class="text-uppercase pull-left btn">add to cart</button>
                                </div> 
                                <div class="b-product_single_option">
                                <ul class="pl-0 list-unstyled"> 
                                    <li><b class="text-uppercase">Sku</b>: N/A</li>
                                    <li><b>Category</b>: <a href="#">Man</a></li>
                                    <li>
                                    <b>Share</b>: 
                                    <span class="b-share_product">
                                        <a href="#" class="fa fa-facebook"></a>
                                        <a href="#" class="fa fa-twitter"></a>
                                        <a href="#" class="fa fa-instagram"></a>
                                        <a href="#" class="fa fa-envelope"></a>
                                        <a href="#" class="fa fa-google-plus"></a>
                                        <a href="#" class="fa fa-pint"></a>
                                    </span>
                                    </li>
                                </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            </div>
        </div> 
        <?php include_once('includes/foot.php'); ?>

    </body>
</html>