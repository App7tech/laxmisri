<!-- Mobile Menu Start -->
<div class="b-main_menu-wrapper hidden-lg-up">
    <ul class="mobile-top"> 
        <li class="search">
            <div class="search-holder-mobile">
                <input type="text" name="search-mobile" value="" placeholder="Search" class="form-control">
                <a class="fa fa-search"></a>
            </div>
        </li>
    </ul>
    <ul class="categories"> 
        <li class="has-sub dropdown-wrapper from-bottom">
            <a href="index.php"><span class="top">Home</span></a>
        </li>
        <li class="has-sub dropdown-wrapper from-bottom">
            <a href="index.html"><span class="top">Shop</span></a>
        </li>
        <li>
            <a href="about.php"><span class="top">About us</span></a>
        </li>
        <li>
            <a href="contact.php"><span class="top">Contact us</span></a>
        </li>
    </ul> 
</div> 
<!-- Mobile Menu End -->

<div class="b-wrapper b-green">
    <!-- Desktop Menu Start -->
    <header id="b-header">
        <div class="b-header b-header_main">
            <div class="container">
                <div class="clearfix row">
                    <div class="col-xl-4 col-lg-4 col-mb-4 col-sm-6 col-xs-6">
                        <div class="b-logo text-left">
                        <a href="index.php" class="d-inline-block"><img src="assets/images/web-logo.png" class="img-fluid d-block" alt=""></a>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-4 col-mb-4 col-sm-12 col-xs-12 hidden-sm-down p-static hidden-md-down">
                        <div class="b-header_nav b-header_nav_center">
                            <div class="b-menu_top_bar_container">
                                <div class="b-main_menu menu-stay-left">
                                    <ul class="categories pl-0 mb-0 list-unstyled">
                                        <!-- Mega menu -->
                                        <!-- Top level items -->
                                        <li class=" b-has_sub b-dropdown_wrapper from-bottom p-static">
                                            <a href="index.php" class="p-relative description">
                                            <span class="top">Home</span></a>
                                        </li>
                                        <!-- Top level items -->
                                        <li class=" b-has_sub b-dropdown_wrapper from-bottom p-static">
                                            <a class="p-relative description ">
                                            <span class="top">Shop</span><i class="menu-tag sale">SALE</i><i class="fa fa-angle-down"></i></a>
                                            <!-- Sub Menu items -->
                                            <div class="b-dropdown_content sub-holder dropdown-left" style="width: 1000px;">
                                                <div class="dropdown-inner">
                                                    <div class="row">
                                                    <?php 
                                                        include_once('admin/config.php');
                                                        $dbhandle = db_connect();
                                                        $sql = "SELECT * FROM `categories` WHERE status = 1";
                                                        $category = mysqli_query($dbhandle,$sql);
                                                        $iterate = 1;
                                                        $total = mysqli_num_rows($category);
                                                        if($total>0){
                                                            while($row = mysqli_fetch_array($category)){
                                                                if($iterate <= $total){
                                                                    if($iterate == 1 || $iterate == 11 || $iterate == 21 || $iterate == 31){
                                                                        echo '
                                                                        <div class="col-xs-12 col-sm-3">
                                                                            <div class="menu-item"> 
                                                                                <div class="categories">
                                                                                    <div class="row">
                                                                                        <div class="col-sm-12 hover-menu">
                                                                                            <ul> ';
                                                                    }
                                                                    echo '<li><a href="products.php?category='.$row["category_id"].'" class="text-capitalize">'.$row['category_name'].'</a></li>';
                                                                    if($iterate == 10 || $iterate == 20 || $iterate == 30 || $iterate == 40){
                                                                        echo '              </ul>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div> ';
                                                                    }
                                                                }
                                                                $iterate++;
                                                            }
                                                        }
                                                    ?>
                                                        <!-- <div class="col-xs-12 col-sm-3">
                                                            <div class="menu-item"> 
                                                                <div class="categories">
                                                                    <div class="row">
                                                                        <div class="col-sm-12 hover-menu">
                                                                            <ul> 
                                                                                <li><a href="#">Masonry grid</a></li>
                                                                                <li><a href="shop-grid-leftbar.html">Alternative shop</a></li>
                                                                                <li><a href="shop-grid-four.html">Default style</a></li>
                                                                                <li><a href="shop-hover-02.html">Button on hover</a></li>
                                                                                <li><a href="shop-hover-03.html">Button hover alt</a></li>
                                                                                <li><a href="shop-hover-04.html">Hover info</a></li>
                                                                                <li><a href="shop-hover-05.html">Standard button</a></li>
                                                                                <li><a href="shop-hover-06.html">Quick shop products <i class="menu-tag new">NEW</i></a></li>
                                                                                <li><a href="shop-grid-list-switcher.html">Grid/List switcher <i class="menu-tag hot">HOT</i></a></li>
                                                                                <li><a href="shop-grid-list-switcher.html">Grid/List switcher <i class="menu-tag hot">HOT</i></a></li>
                                                                            </ul>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div> 
                                                        <div class="col-xs-12 col-sm-3">
                                                            <div class="menu-item">
                                                                <div class="categories">
                                                                    <div class="row">
                                                                        <div class="col-sm-12 hover-menu">
                                                                            <ul>  
                                                                                <li><a href="product-single.html">Default style</a></li>
                                                                                <li><a href="product-single-alternative.html">Alternative style</a></li>
                                                                                <li><a href="product-single-variation-image.html">Variations images</a></li>
                                                                                <li><a href="product-with-slider.html">Thumbnails bottom</a></li>
                                                                                <li><a href="compact.html">Compact <i class="menu-tag new">NEW</i></a></li>
                                                                                <li><a href="sticky-details.html">Sticky details</a></li>
                                                                                <li><a href="extra-content.html">Extra content <i class="menu-tag hot">HOT</i></a></li>
                                                                                <li><a href="thumbnails-left.html">Thumbnails left</a></li>
                                                                                <li><a href="product-with-background.html">Product with background</a></li>
                                                                            </ul>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div> 
                                                        <div class="col-xs-12 col-sm-3">
                                                            <div class="menu-item">
                                                                <h4 class="column-title"><b>PRODUCT FEATURES</b></h4> 
                                                                <div class="categories">
                                                                    <div class="row">
                                                                        <div class="col-sm-12 hover-menu">
                                                                            <ul>  
                                                                                <li><a href="360-product-viewer.html">360° product viewer</a></li>
                                                                                <li><a href="zoom-image.html">Zoom image</a></li>
                                                                                <li><a href="with-video.html">With video</a></li>
                                                                                <li><a href="large-image.html">Large Image</a></li>
                                                                                <li><a href="infanite-scroll.html">Infinit scrolling <i class="menu-tag new">NEW</i></a></li>
                                                                                <li><a href="variable-product.html">Variable Product</a></li>
                                                                                <li><a href="groped-product.html">Grouped Product</a></li>
                                                                                <li><a href="external-product.html">External Product</a></li>
                                                                                <li><a href="sidebar-right.html">Sidebar right</a></li>
                                                                            </ul>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>  
                                                        <div class="col-xs-12 col-sm-3">
                                                            <div class="menu-item">
                                                                <h4 class="column-title"><b>SHOP PAGES</b></h4> 
                                                                <div class="categories">
                                                                    <div class="row">
                                                                        <div class="col-sm-12 hover-menu">
                                                                            <ul>  
                                                                                <li><a href="shop-grid-two.html">2 Columns</a></li>
                                                                                <li><a href="shop-grid-three.html">3 Columns</a></li>
                                                                                <li><a href="shop-grid-four.html">4 Columns</a></li>
                                                                                <li><a href="shop-grid-six.html">6 Columns</a></li>
                                                                                <li><a href="shop-grid-leftbar.html">Sidebar Left</a></li>
                                                                                <li><a href="shop-grid-rightbar.html">Sidebar Right</a></li>
                                                                                <li><a href="shop-grid-six.html">Full width</a></li>
                                                                                <li><a href="#">Category banner</a></li>
                                                                                <li><a href="#">RTL Shop page <i class="menu-tag new">NEW</i></a></li>
                                                                            </ul>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>   -->
                                                    </div>
                                                    <!-- row -->
                                                </div>
                                            </div>
                                        </li>
                                        <!-- Top level items --> 
                                        <li class="b-has_sub b-dropdown_wrapper from-bottom p-static">
                                            <a href="about.php" class="p-relative"><span class="top">About us</span></a>
                                        </li> 
                                        <li class="b-has_sub b-dropdown_wrapper from-bottom p-static">
                                            <a href="contact.php" class="p-relative"><span class="top">Contact us</span></a>
                                        </li>
                                    </ul>
                                </div>
                            </div> 
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-4 col-mb-4 col-sm-6 col-xs-6">
                        <div class="b-header_right"> 
                            <div class="b-search_icon">
                                <a href="javascript:;" id="b-search_toggle" class="d-inline-block">
                                <i class="icon-magnifier icons"></i>
                                </a>
                            </div>
                            <div class="hidden-lg-up">
                                <i class="icon-menu icons b-nav_icon" id="b-nav_icon"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!-- Desktop Menu End -->
<!-- div close will be there in main page as per the design -->