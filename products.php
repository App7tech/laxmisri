<!DOCTYPE html>
<html>
    <head>
		<?php include_once('includes/head.php'); ?>
	</head>
    <body>   
        <!-- wrapper div start -->
		<?php include_once('includes/header.php'); ?>
            <!--<div class="b-page_title b-page_title_default text-center b-shop_filter">
                <div class="col-sm-12">
                <ul class="list-inline text-center">
                    <li><a href="#" class="b-active">All</a></li>
                    <li><a href="#">BAGS</a></li>
                    <li><a href="#">ACCESSORIES</a></li>
                    <li><a href="#">JEWELLERY</a></li>
                    <li><a href="#">MAN</a></li>
                    <li><a href="#">SHOES</a></li>
                    <li><a href="#">WATCHES</a></li>
                    <li><a href="#">WOMAN</a></li>
                </ul>
                </div> 
            </div> --> 
            <div class="container">
                <div class="row clearfix">
                <div class="col-xl-3 col-lg-3 col-mb-4 col-sm-12 col-xs-12">
                    <div class="b-sidebar">
                    <div class="b-filters_inner_area p-0">
                        <div class="b-sidebar_widget">
                        <h5 class="b-filter_title">PRODUCT CATEGORIES</h5>
                        <form action="#" style="max-height: 300px;overflow: auto;">
                            <ul> 
                            <?php 
                                 include_once('admin/config.php');
                                 $dbhandle = db_connect();
                                 $sql = "SELECT * FROM `categories` WHERE status = 1";
                                 $category = mysqli_query($dbhandle,$sql);
                                 $iterate = 1;
                                 $total = mysqli_num_rows($category);
                                 if($total>0){
                                    while($row = mysqli_fetch_array($category)){
                                        echo'<li class="text-capitalize"><a href="products.php?category='.$row["category_id"].'">'.$row['category_name'].'</a></li>';
                                    }
                                }
                            ?>
                            </ul> 
                        </form>
                        </div>
                        <!-- <div class="b-sidebar_widget">
                        <h5 class="b-filter_title">FILTER BY COLOR</h5>
                        <form action="#">
                            <ul class="b-color_filter">
                            <li>
                                <a href="#">
                                <span class="b-color_circle b-black"></span>
                                Black
                                </a>
                                <span class="b-count float-right">(7)</span>
                            </li>
                            <li>
                                <a href="#">
                                <span class="b-color_circle b-brown"></span>
                                Brown
                                </a>
                                <span class="b-count float-right">(7)</span>
                            </li>
                            <li>
                                <a href="#">
                                <span class="b-color_circle b-yellow"></span>
                                Yellow
                                </a>
                                <span class="b-count float-right">(6)</span>
                            </li>
                            <li>
                                <a href="#">
                                <span class="b-color_circle b-red"></span>
                                Red
                                </a>
                                <span class="b-count float-right">(5)</span>
                            </li>
                            <li>
                                <a href="#" class="b-acitve">
                                <span class="b-color_circle b-blue"></span>
                                Blue
                                </a>
                                <span class="b-count float-right">(8)</span>
                            </li> 
                            </ul> 
                        </form>
                        </div>  -->
                        <!-- <div class="b-sidebar_widget">
                        <h5 class="b-filter_title">FILTER BY SIZE</h5>
                        <form action="#">
                            <ul class="b-list_ib">
                            <li><a href="#" class="b-acitve">L <span class="b-count_number">(4)</span></a></li>
                            <li><a href="#">M <span class="b-count_number">(9)</span></a></li>
                            <li><a href="#">XL <span class="b-count_number">(7)</span></a></li>
                            <li><a href="#">S <span class="b-count_number">(3)</span></a></li>
                            <li><a href="#">XS <span class="b-count_number">(5)</span></a></li> 
                            </ul> 
                        </form>
                        </div>
                        <div class="b-sidebar_widget">
                        <h5 class="b-filter_title">PRODUCT TAGS</h5>
                        <ul class="pl-0 b-tag_list">
                            <li><a href="#">bag</a></li>
                            <li><a href="#">basic</a></li>
                            <li><a href="#">Beautiful</a></li>
                            <li><a href="#">Black</a></li>
                            <li><a href="#">Classic</a></li>
                            <li><a href="#">polo</a></li>
                            <li><a href="#">new</a></li>
                            <li><a href="#">red</a></li>
                            <li><a href="#">Shirt</a></li>
                            <li><a href="#">white</a></li>
                        </ul>
                        </div> 
                        <div class="b-sidebar_widget">
                        <h5 class="b-filter_title">Top rated products</h5>
                        <ul class="pl-0 mb-0 list-unstyled b-rated_product">
                            <li>
                            <a href="#" class="b-recent_blog_img d-inline-block">
                                <img src="assets/images/blog/home/blog_recent_01.jpg" class="img-fluid d-block" alt="">
                            </a>
                            <h3><a href="#">VENENATIS VEULUM PEUS</a></h3>
                            <span class="d-block mb-2">
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                            </span>
                            <span>£574.00</span>
                            </li>
                            <li>
                            <a href="#" class="b-recent_blog_img d-inline-block">
                                <img src="assets/images/blog/home/blog_recent_02.jpg" class="img-fluid d-block" alt="">
                            </a>
                            <h3><a href="#">HAC FAMES TEMPOR</a></h3>
                            <span class="d-block mb-2">
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                            </span>
                            <span>£545.00</span>
                            </li>
                            <li>
                            <a href="#" class="b-recent_blog_img d-inline-block">
                                <img src="assets/images/blog/home/blog_recent_03.jpg" class="img-fluid d-block" alt="">
                            </a>
                            <h3><a href="#">URNA LIGULA INCEPTOS</a></h3>
                            <span class="d-block mb-2">
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                            </span>
                            <span>£850.00</span>
                            </li>
                            <li>
                            <a href="#" class="b-recent_blog_img d-inline-block">
                                <img src="assets/images/blog/home/blog_recent_04.jpg" class="img-fluid d-block" alt="">
                            </a>
                            <h3><a href="#">DAPIBUS A AT GRAVIDA</a></h3>
                            <span class="d-block mb-2">
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                            </span>
                            <span>£125.00</span>
                            </li> 
                        </ul>
                        </div>  -->
                    </div>
                    </div>
                </div>  
                <div class="col-xl-9 col-lg-9 col-mb-8 col-sm-12 col-xs-12"> 
                    <div class="row clearfix b-shop_head"> 
                    <div class="col-xl-6 col-lg-6 col-mb-6 col-sm-6 col-xs-12"> 
                        <nav class="b-shop_breadcrumb">
                        <a href="index.php">Home</a>
                        <?php
                            $cat_id = 0; 
                            if(isset($_GET['category'])){
                                $cat_id = $_GET['category']; 
                            }
                            $dbhandle = db_connect();
                            $sql = "SELECT * FROM `categories` WHERE category_id = $cat_id";
                            $category = mysqli_query($dbhandle,$sql);
                            $iterate = 1;
                            if(mysqli_num_rows($category)>0){
                                $row = mysqli_fetch_array($category);
                                $category_name = $row['category_name'];
                            }else{
                                echo '<script>alert("No Category Found!"); window.location="index.php";</script>';
                            }
                        ?>
                        <span class="text-capitalize"> <?=$category_name;?> </span>
                        </nav>
                    </div>
                    <!-- <div class="col-xl-6 col-lg-6 col-mb-6 col-sm-6 col-xs-12 text-right">
                        <p class="b-result_count d-inline-block hidden-md-down">
                        <a href="shop-grid-leftbar.html" class="icon-grid icons b-active b-grid_button"></a>
                        <a href="shop-grid-list-switcher.html" class="icon-list icons b-list_button"></a>
                        </p>
                        <div class="b-filter_button d-inline-block">
                        <a href="javascript:;" class="b-open_filters">Filters</a>
                        </div>
                    </div>  -->
                    </div>
                    <!-- <div class="b-filters_area mt-2">
                    <div class="b-filters_inner_area">
                        <div class="row clearfix">
                        <div class="col-xl-3 col-lg-3 col-mb-3 col-sm-6 col-xs-12">
                            <h5 class="b-filter_title">Sort by</h5>
                            <form action="#">
                            <ul>
                                <li><a href="#" class="b-acitve">Default</a></li>
                                <li><a href="#">Popularity</a></li>
                                <li><a href="#">Average rating</a></li>
                                <li><a href="#">Newness</a></li>
                                <li><a href="#">Price: low to high</a></li>
                                <li><a href="#">Price: high to low</a></li>
                            </ul> 
                            </form>
                        </div>
                        <div class="col-xl-3 col-lg-3 col-mb-3 col-sm-6 col-xs-12">
                            <h5 class="b-filter_title">Price Filter</h5>
                            <form action="#">
                            <ul>
                                <li><a href="#" class="b-acitve">All</a></li>
                                <li><a href="#">£0.00 - £150.00</a></li>
                                <li><a href="#">£150.00 - £300.00</a></li>
                                <li><a href="#">£300.00 - £450.00</a></li>
                                <li><a href="#">£450.00+</a></li> 
                            </ul> 
                            </form>
                        </div>
                        <div class="col-xl-3 col-lg-3 col-mb-3 col-sm-6 col-xs-12">
                            <h5 class="b-filter_title">FILTER BY COLOR</h5>
                            <form action="#">
                            <ul class="b-color_filter">
                                <li>
                                <a href="#">
                                    <span class="b-color_circle b-black"></span>
                                    Black
                                </a>
                                <span class="b-count float-right">(7)</span>
                                </li>
                                <li>
                                <a href="#">
                                    <span class="b-color_circle b-brown"></span>
                                    Brown
                                </a>
                                <span class="b-count float-right">(7)</span>
                                </li>
                                <li>
                                <a href="#">
                                    <span class="b-color_circle b-yellow"></span>
                                    Yellow
                                </a>
                                <span class="b-count float-right">(6)</span>
                                </li>
                                <li>
                                <a href="#">
                                    <span class="b-color_circle b-red"></span>
                                    Red
                                </a>
                                <span class="b-count float-right">(5)</span>
                                </li>
                                <li>
                                <a href="#" class="b-acitve">
                                    <span class="b-color_circle b-blue"></span>
                                    Blue
                                </a>
                                <span class="b-count float-right">(8)</span>
                                </li> 
                            </ul> 
                            </form>
                        </div>
                        <div class="col-xl-3 col-lg-3 col-mb-3 col-sm-6 col-xs-12">
                            <h5 class="b-filter_title">FILTER BY SIZE</h5>
                            <form action="#">
                            <ul class="b-list_ib">
                                <li><a href="#" class="b-acitve">L <span class="b-count_number">(4)</span></a></li>
                                <li><a href="#">M <span class="b-count_number">(9)</span></a></li>
                                <li><a href="#">XL <span class="b-count_number">(7)</span></a></li>
                                <li><a href="#">S <span class="b-count_number">(3)</span></a></li>
                                <li><a href="#">XS <span class="b-count_number">(5)</span></a></li> 
                            </ul> 
                            </form>
                        </div>
                        </div>
                    </div>
                    </div>
                    <div class="basel-active-filters d-none">
                    <div class="b-shop_option">
                        <ul class="pl-0 list-unstyled">
                            <li class="d-inline-block">
                                <a href="#">
                                Min 
                                <span class="b-price_amount">
                                <span class="b-price_symbol">£</span>450.00</span>
                                </a>
                            </li>
                            <li class="d-inline-block">
                            <a href="#">
                                Max 
                                <span class="b-price_amount">
                                <span class="b-price_symbol">£</span>580.00</span>
                            </a>
                            </li>
                        </ul>
                    </div>      
                    </div>   -->
                    <div class="b-products b-product_grid b-product_grid_four mb-4"> 
                        <div class="row clearfix">
                            <?php 
                                $sql = "SELECT * FROM `products` WHERE category_id='$cat_id'";
                                $product = mysqli_query($dbhandle,$sql);
                                $iterate = 1;
                                $image_path = 'assets/images/';
                                if(mysqli_num_rows($product)>0){
                                    while($row = mysqli_fetch_array($product)){
                                        $product_images = unserialize($row['images']);
                                        if(count($product_images)<=0){
                                            $image = $image_path.'noImage.jpg';
                                        }else{
                                            $image = $image_path.'products/'.$product_images[0];
                                        }
                                        $links = unserialize($row['social_links']);
                            ?>
                                        <div class="col-xl-4 col-lg-4 col-mb-4 col-sm-6 col-xs-12">
                                            <div class="b-product_grid_single">
                                                <div class="b-product_grid_header custom-prod-page-image">
                                                    <a href="#">
                                                        <img data-src="<?=$image?>" src="<?=$image?>" class="img-fluid img-switch d-block" alt="" style="">
                                                    </a> 
                                                    <!-- <div class="b-product_grid_action">
                                                        <a href="javascript:void(0)" data-whishurl="whishlist.html" data-toggle="tooltip" data-placement="left" title="" data-original-title="Add to Whishlist">
                                                        <i class="icon-heart icons b-add_to_whish">
                                                            <img src="assets/images/products/product_loading.gif" class="g-loading_gif" alt="">
                                                        </i>
                                                        </a>
                                                        <i data-toggle="tooltip" data-placement="left" title="" class="icon-refresh icons" data-original-title="Compare"></i>
                                                        <a href="javascript:void(0);" data-toggle="modal" data-target="#b-qucik_view">
                                                            <i data-toggle="tooltip" data-placement="left" title="" class="icon-magnifier-add icons" data-original-title="Quick View"></i>
                                                        </a>
                                                    </div> -->
                                                </div>
                                                <div class="b-product_grid_info">
                                                    <h3 class="product-title">
                                                        <a href="#"><?=$row['name']?></a>
                                                    </h3>
                                                    <div class="clearfix">
                                                        <div class="b-product_grid_toggle float-left">
                                                            <span class="b-price">Rs: <?=$row['price']?></span>
                                                            <span class="b-add_cart">
                                                                <a href="#">Rs: <?=$row['price']?></a>
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
                                        $iterate++;
                                    }
                                }else{
                                    echo '<h3>No products Found!</h3>';
                                }
                            ?>
                        </div>
                        <?php if($iterate > 1){ ?>
                        <div class="b-pagination pt-2 pb-4">
                        <ul class="pl-0 text-center list-unstyled mb-0">
                            <li><a href="#" class="b-current_page">1</a></li>
                            <li><a href="#">2</a></li>
                            <li><a href="#">3</a></li>
                            <li><a href="#">4</a></li>
                            <li><a href="#">...</a></li>
                            <li><a href="#">21</a></li>
                            <li><a href="#">22</a></li>
                            <li><a href="#"><i class="icon-arrow-right icons"></i></a></li>
                        </ul>
                        </div>
                        <?php }//if close ?>
                    </div>  
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