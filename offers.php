<!DOCTYPE html>
<html>
    <head>
		<?php include_once('includes/head.php'); ?>
	</head>
    <body>   
        <!-- wrapper div start -->
        <?php include_once('includes/header.php'); ?>
            <div class="container">
                <div class="row clearfix b-shop_head"> 
                <div class="col-xl-6 col-lg-6 col-mb-6 col-sm-6 col-xs-12"> 
                    <nav class="b-shop_breadcrumb">
                    <a href="index.php">Home</a>
                    <span> Offers</span>
                    </nav>
                </div>
                </div>
            </div>

            <div class="b-products b-product_grid b-product_grid_four mb-4">
                <div class="container">
                    <div class="row clearfix">
                        <?php 
                            $sql = "SELECT * FROM `products` WHERE offer = 1";
                            $product = mysqli_query($dbhandle,$sql);
                            $iterate = 1;
                            $image_path = 'assets/images/';
                            if(mysqli_num_rows($product)>0){
                                while($row = mysqli_fetch_array($product)){
                                    $product_images = unserialize($row['images']);
                                    $product_id = $row['product_id'];
                                    if(count($product_images)<=0){
                                        $image = $image_path.'noImage.jpg';
                                    }else{
                                        $image = $image_path.'products/'.$product_images[0];
                                    }
                                    $links = unserialize($row['social_links']);
                        ?>
                                    <div class="col-xl-3 col-lg-3 col-mb-3 col-sm-6 col-xs-12">
                                        <div class="b-product_grid_single">
                                            <div class="b-product_grid_header custom-prod-page-image">
                                                <a href="product-view.php?product=<?=$product_id?>">
                                                    <img data-src="<?=$image?>" src="<?=$image?>" class="img-fluid img-switch d-block" alt="" style="">
                                                </a> 
                                            </div>
                                            <div class="b-product_labels b-labels_rounded b-new">
                                                <span class="b-product_label">Offer</span>
                                            </div>
                                            <div class="b-product_grid_info">
                                                <h3 class="product-title">
                                                    <a href="product-view.php?product=<?=$product_id?>"><?=$row['name']?></a>
                                                </h3>
                                                <div class="clearfix">
                                                    <div class="b-product_grid_toggle float-left">
                                                        <span class="b-price" style="color:#000;">D.NO: <s><?=$row['offer_price']?></s> <b><?=$row['price']?></b></span>
                                                        <span class="b-add_cart">
                                                            <a href="product-view.php?product=<?=$product_id?>">D.NO: <s><?=$row['offer_price']?></s> <b><?=$row['price']?></b></a>
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
                                    if($iterate == 4){
                                        echo'</div>
                                        </div>';

                                        echo'<section id="b-newsletter">
                                                <div class="b-newsletter b-newsletter_bg mb-5">
                                                    <div class="b-newsletter_inner">
                                                        <h3 class="text-center font-italic">Connect to Basel & Co.</h3>
                                                        <h2 class="text-center">Join Our Newsletter</h2>
                                                        <p class="text-center">Hey you, sign up it only takes a second to be the first to find out about our latest news and promotions…</p>
                                                    </div>
                                                </div>
                                            </section>';

                                        echo '<div class="container">
                                        <div class="row clearfix">';
                                    }
                                    $iterate++;
                                }
                            }else{
                                echo '<h3>No Offers Found!</h3>';
                            }
                        ?>
                    </div>
                </div>

            </div>
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