<!DOCTYPE html>
<html>
	<head>
		<?php include_once('includes/head.php'); ?>
	</head>
  	<body>
		<!-- wrapper div start -->
		<?php include_once('includes/header.php'); ?>
		  	<!-- Slider Start  -->
			<div  class="rev_slider_wrapper fullwidthbanner-container" data-alias="classic4export" data-source="gallery"> 
				<div id="b-home_01_slider" class="rev_slider fullwidthabanner" style="display:none;" data-version="5.4.1">
				<ul>
					<?php
						include_once('admin/config.php');
						$dbhandle = db_connect();
						$sql = "SELECT * FROM `sliders` WHERE status = 1";
						$slider = mysqli_query($dbhandle,$sql);
						$iterate = 1;
						$image_path = 'assets/images/home_sliders/';
						if(mysqli_num_rows($slider)>0){
							while($row = mysqli_fetch_array($slider)){
								$slider_id = $row['id'];
								$slider_image = $image_path.$row['slider_image'];
								$slider_text = $row['slider_text'];
					?>
					<li data-index="rs-<?=$slider_id?>" data-transition="zoomout" data-slotamount="default" data-hideafterloop="0" data-hideslideonmobile="off"  data-easein="Power4.easeInOut" data-easeout="Power4.easeInOut" data-masterspeed="2000"  data-thumb="<?=$slider_image?>"  data-rotate="0"  data-fstransition="fade" data-fsmasterspeed="1500" data-fsslotamount="7" data-saveperformance="off"  data-title="Intro" data-param1="" data-param2="" data-param3="" data-param4="" data-param5="" data-param6="" data-param7="" data-param8="" data-param9="" data-param10="" data-description=""> 
						<img src="<?=$slider_image?>"  alt=""  data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat" data-bgparallax="10" class="rev-slidebg" data-no-retina> 
						<div class="tp-caption tp-resizeme font-title rs-parallaxlevel-1" 
							data-x="['left','left','left','center']" 
							data-hoffset="['50','20','20','0']" 
							data-y="['middle','middle','middle','middle']" 
							data-voffset="['-47','-47','-47','-22']" 
							data-fontsize="['250','250','250','210']" 
							data-width="none" 
							data-height="none" 
							data-whitespace="nowrap" 
							data-type="text" 
							data-responsive_offset="on" 
							data-frames='[{"delay":650,"speed":700,"frame":"0","from":"y:-50px;opacity:0;","to":"o:1;","ease":"Power2.easeInOut"},{"delay":"wait","speed":500,"frame":"999","to":"y:-50px;opacity:0;","ease":"nothing"}]' data-textalign="['left','left','left','left']" 
							data-paddingtop="[0,0,0,0]" 
							data-paddingright="[0,0,0,0]" 
							data-paddingbottom="[0,0,0,0]" 
							data-paddingleft="[0,0,0,0]" 
							style="font-size: 250px; font-family: lora; line-height: 22px; font-weight: 400; color: rgba(255, 255, 255, 0.2); z-index: 999">
						</div>
						<div class="tp-caption tp-resizeme"  
							data-x="['left','left','left','center']" 
							data-hoffset="['50','20','20','0']" 
							data-y="['top','top','top','top']" 
							data-voffset="['350','318','318','230']" 
							data-fontsize="['73','73','73','40']" 
							data-width="none" 
							data-height="none" 
							data-whitespace="nowrap" 
							data-type="text" 
							data-responsive_offset="on" 
							data-frames='[{"delay":700,"speed":700,"frame":"0","from":"y:50px;opacity:0;","to":"o:1;","ease":"Power2.easeInOut"},{"delay":"wait","speed":500,"frame":"999","to":"y:50px;opacity:0;","ease":"nothing"}]' data-textalign="['inherit','inherit','inherit','inherit']" 
							data-paddingtop="[0,0,0,0]" 
							data-paddingright="[0,0,0,0]" 
							data-paddingbottom="[0,0,0,0]" 
							data-paddingleft="[0,0,0,0]" 
							style="font-family: Caveat; color: #fff; font-weight: bold; z-index: 999">
							<?=$slider_text;?>
						</div> 
						<div class="tp-caption tp-resizeme font-title rs-parallaxlevel-1" 
							data-x="['right','right','right','center']" 
							data-hoffset="['50','1','1','0']" 
							data-y="['middle','middle','middle','center']" 
							data-voffset="['-47','-47','-47','0']" 
							data-fontsize="['250','250','250','210']" 
							data-width="none" 
							data-height="none" 
							data-whitespace="nowrap" 
							data-type="text" 
							data-responsive_offset="on" 
							data-frames='[{"delay":650,"speed":700,"frame":"0","from":"y:-50px;opacity:0;","to":"o:1;","ease":"Power2.easeInOut"},{"delay":"wait","speed":500,"frame":"999","to":"y:-50px;opacity:0;","ease":"nothing"}]' data-textalign="['left','left','left','left']" 
							data-paddingtop="[0,0,0,0]" 
							data-paddingright="[0,0,0,0]" 
							data-paddingbottom="[0,0,0,0]" 
							data-paddingleft="[0,0,0,0]">
								
						</div> 
						<div class="tp-caption tp-resizeme"  
							data-x="['left','left','left','center']" 
							data-hoffset="['50','30','30','0']" 
							data-y="['top','top','top','top']" 
							data-voffset="['420','420','390','270']" 
							data-fontsize="['73','73','73','40']" 
							data-width="none" 
							data-height="none" 
							data-whitespace="nowrap" 
							data-type="text" 
							data-responsive_offset="on" 
							data-frames='[{"delay":700,"speed":700,"frame":"0","from":"y:50px;opacity:0;","to":"o:1;","ease":"Power2.easeInOut"},{"delay":"wait","speed":500,"frame":"999","to":"y:50px;opacity:0;","ease":"nothing"}]' data-textalign="['inherit','inherit','inherit','inherit']" 
							data-paddingtop="[0,0,0,0]" 
							data-paddingright="[0,0,0,0]" 
							data-paddingbottom="[0,0,0,0]" 
							data-paddingleft="[0,0,0,0]" >
							<a href="#" class="btn btn-full">LEARN MORE</a>
						</div>   
					</li>
					<?php
							} //while close
						} //if close
					?>
				</ul>
				<div class="tp-bannertimer" style="height: 7px; background-color: rgba(255, 255, 255, 0.25);"></div>  
				</div>
			</div>
			<!-- Slider End  -->

			<!-- showcase-1 start -->
			<section id="b-featured-cat-2">
				<div class="container">
				<div class="row clearfix b-featured_cat-2 mb-4 mt-5">
					<div class="col-xl-3 col-lg-3 col-mb-3 col-sm-12 col-xs-12">
					<div class="b-featured_cat_in mb-4">
						<div class="b-img_zoom">
						<img class="d-block m-auto img-fluid" src="assets/images/banner/home-furniture/sets.png" alt="">
						</div>
						<div class="b-cat_overlay b-cat_overlay_bg"> 
						<div class="align-middle text-center">
							<span class="hover-zoom"></span>
							<h3>Necklaces sets</h3>        
							<span>Look at entire collection</span>
						</div> 
						<a href="#">&nbsp;</a>
						</div>
					</div>
					</div>  
					<div class="col-xl-6 col-lg-6 col-mb-6 col-sm-12 col-xs-12">
					<div class="b-featured_cat_in mb-4">
						<div class="b-img_zoom">
						<img class="d-block m-auto img-fluid" src="assets/images/banner/home-furniture/bangles.png" alt="">
						</div>
						<div class="b-cat_overlay b-cat_overlay_bg"> 
						<div class="align-middle text-center float-left ml-3">
							<span class="hover-zoom"></span>
							<h3>Bangles</h3>        
							<span>Look at entire collection</span>
						</div> 
						<a href="#">&nbsp;</a>
						</div>
					</div>
					</div>  
					<div class="col-xl-3 col-lg-3 col-mb-3 col-sm-12 col-xs-12">
					<div class="b-featured_cat_in mb-4">
						<div class="b-img_zoom">
						<img class="d-block m-auto img-fluid" src="assets/images/banner/home-furniture/earrings.png" alt="">
						</div>
						<div class="b-cat_overlay b-cat_overlay_bg"> 
						<div class="align-middle text-center">
							<span class="hover-zoom"></span>
							<h3>Earrings</h3>        
							<span>Look at entire collection</span>
						</div> 
						<a href="#">&nbsp;</a>
						</div>
					</div>
					</div>  
				</div>
				</div>
			</section>
			<!-- showcase-1 end -->
		  
			<!-- showcase-2 start -->
			<section id="b-featured-cat-2">
				<div class="container">
				<div class="row clearfix b-featured_cat-2 mb-4 mt-5">
				<div class="col-xl-6 col-lg-6 col-mb-6 col-sm-12 col-xs-12">
					<div class="b-featured_cat_in mb-4">
						<div class="b-img_zoom">
						<img class="d-block m-auto img-fluid" src="assets/images/banner/home-furniture/blackbeads.png" alt="">
						</div>
						<div class="b-cat_overlay b-cat_overlay_bg"> 
						<div class="align-middle text-center float-left ml-3">
							<span class="hover-zoom"></span>
							<h3>Black Beads</h3>        
							<span>Look at entire collection</span>
						</div> 
						<a href="#">&nbsp;</a>
						</div>
					</div>
					</div> 
				
					<div class="col-xl-3 col-lg-3 col-mb-3 col-sm-12 col-xs-12">
					<div class="b-featured_cat_in mb-4">
						<div class="b-img_zoom">
						<img class="d-block m-auto img-fluid" src="assets/images/banner/home-furniture/idols.png" alt="">
						</div>
						<div class="b-cat_overlay b-cat_overlay_bg"> 
						<div class="align-middle text-center">
							<span class="hover-zoom"></span>
							<h3>Idols</h3>        
							<span>Look at entire collection</span>
						</div> 
						<a href="#">&nbsp;</a>
						</div>
					</div>
					</div>  
					
					<div class="col-xl-3 col-lg-3 col-mb-3 col-sm-12 col-xs-12">
					<div class="b-featured_cat_in mb-4">
						<div class="b-img_zoom">
						<img class="d-block m-auto img-fluid" src="assets/images/banner/home-furniture/chandballi.png" alt="">
						</div>
						<div class="b-cat_overlay b-cat_overlay_bg"> 
						<div class="align-middle text-center">
							<span class="hover-zoom"></span>
							<h3>Chandballi</h3>        
							<span>Look at entire collection</span>
						</div> 
						<a href="#">&nbsp;</a>
						</div>
					</div>
					</div>  
				</div>
				</div>
			</section>
			<!-- showcase-2 end -->
		  
			<!-- products slider start -->
			<section id="b-products"> 
				<div class="b-section_title">
					<h4 class="text-center text-uppercase">
					OUR PRODUCTS
					<span class="b-title_separator"><span></span></span>
					</h4>
				</div>
				<div class="b-products b-product_grid b-product_grid_four mb-4">
					<div class="container">
						<div class="row clearfix owl-carousel owl-theme" id="b-product_carousel">
							<?php 
                                $sql = "SELECT * FROM `products` WHERE featured='1'";
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
                            ?>
							<div class="pl-2 pr-2">
								<div class="b-product_grid_single">
									<div class="b-product_grid_header custom-prod-page-image">
										<a href="#">
										<img data-src="<?=$image?>" src="<?=$image?>" class="img-fluid img-switch d-block" alt="" style="">
										</a> 
										<div class="b-product_grid_action">
										<a href="javascript:void(0)" data-whishurl="whishlist.html" data-toggle="tooltip" data-placement="left" title="" data-original-title="Add to Whishlist">
											<i class="icon-heart icons b-add_to_whish">
											<img src="assets/images/products/product_loading.gif" class="g-loading_gif" alt="">
											</i>
										</a>
										<i data-toggle="tooltip" data-placement="left" title="" class="icon-refresh icons" data-original-title="Compare"></i>
										<a href="javascript:void(0);" data-toggle="modal" data-target="#b-qucik_view">
											<i data-toggle="tooltip" data-placement="left" title="" class="icon-magnifier-add icons" data-original-title="Quick View"></i>
										</a>
										</div>
									</div>
									<div class="b-product_grid_info">
										<h3 class="product-title">
											<a href="#"><?=$row['name']?></a>
										</h3>
										<div class="clearfix">
										<div class="b-product_grid_toggle float-left">
											<span class="b-price">Rs: <?=$row['price']?></span>
											<span class="b-add_cart">
												<i class="icon-basket icons"></i>
												<a href="#">Rs: <?=$row['price']?></a>
											</span>
										</div>
										<div class="b-product_options float-right">
											<ul class="pl-0 mb-0 list-unstyled">
												<li>
												<span data-toggle="tooltip" title="" class="b-black" data-original-title="Black"></span>
												</li>
												<li>
												<span data-toggle="tooltip" title="" class="b-blue" data-original-title="Blue"></span>
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
							?>
						</div>
					</div>
				</div>        
				</div>  
			</section>
			<!-- products slider end -->

			<!-- offer banner start -->
			<div class="b-discount_bar mb-5">
				<div class="container">
					<div class="row clearfix">
						<div class="col-xl-8 col-lg-8 col-mb-8 col-sm-12 col-xs-12">
						<h3>Get 30% Discount New Collection</h3>
						</div>
						<div class="col-xl-4 col-lg-4 col-mb-4 col-sm-12 col-xs-12">
						<ul class="b-social-icons text-left text-md-right pt-2">
							<li class="b-social_facebook"><a href="#" target="_blank" class=""><i class="fa fa-facebook"></i>Facebook</a></li>
							<li class="b-social_twitter"><a href="#" target="_blank" class=""><i class="fa fa-twitter"></i>Twitter</a></li>
							<li class="b-social_google"><a href="#" target="_blank" class=""><i class="fa fa-google-plus"></i>Google</a></li>
							<li class="b-social_email"><a href="#" target="_blank" class=""><i class="fa fa-envelope"></i>Email</a></li>
							<li class="b-social_pinterest"><a href="#" target="_blank" class=""><i class="fa fa-pinterest"></i>Pinterest</a></li>
						</ul>
						</div>
					</div>
				</div>
			</div>
			<!-- offer banner end -->
			
			<!-- featured products start -->
			<section id="b-feature_products">
				<div class="container">
				<div class="b-faq pb-4">
					<div class="b-faq_tabs">
					<ul class="clearfix text-center mb-4 b-faq_option">
						<li class="float-none d-inline-block"><span class="b-active_faq" data-val="1">ANTIQUE JEWELLERY</span></li>
						<!--<li class="float-none d-inline-block"><span data-val="2">CHAIRPLASTIC</span></li>-->
				   <!--	<li class="float-none d-inline-block"><span data-val="3">CHAIRSOFA</span></li>-->
					</ul>
					<div class="b-tab_blocks">
						<div class="b-tab_block_single b-tab_open" data-rel="1"> 
						<div class="row clearfix">
							<div class="col-xl-4 col-lg-4 col-mb-4 col-sm-12 col-xs-12">
							<div class="b-feature_prod_text text-right pt-5">
								<span class="b-subline">DESIGNERS:Laxmi sri Art Jewellers</span>
								<h2 class="b-product_name">ANTIQUE LONG SETS</h2>
								<span class="b-price">Rs 2500</span>
								<p>Vel himenaeos quam fringilla a interdum blandit adipiscing ullamcorper per consequat in ut a enim suspendisse luctus commodo varius dictumst egestas at curae ultricies nam.</p>
								<a href="#" class="btn">Read More</a>
							</div>
							</div> 
							<div class="col-xl-4 col-lg-4 col-mb-4 col-sm-12 col-xs-12">
							<img src="assets/images/products/home-furniture/feature/product1.png" class="img-fluid d-block m-auto" alt=""> 
							</div>   
							<div class="col-xl-4 col-lg-4 col-mb-4 col-sm-12 col-xs-12">
							<img src="assets/images/products/home-furniture/feature/product2.png" class="img-fluid d-block m-auto" alt=""> 
							</div>   
						</div>
						</div>
						<div class="b-tab_block_single" data-rel="2"> 
						<div class="row clearfix"> 
							<div class="col-xl-4 col-lg-4 col-mb-4 col-sm-12 col-xs-12">
							<img src="assets/images/products/home-furniture/feature/feature-03.jpg" class="img-fluid d-block m-auto" alt=""> 
							</div>   
							<div class="col-xl-4 col-lg-4 col-mb-4 col-sm-12 col-xs-12">
							<div class="b-feature_prod_text text-center pt-5">
								<span class="b-subline">DESIGNERS: VALENTINO RACHELLI</span>
								<h2 class="b-product_name">Long Sets</h2>
								<span class="b-price">Rs 2500</span>
								<p>Vel himenaeos quam fringilla a interdum blandit adipiscing ullamcorper per consequat in ut a enim suspendisse luctus commodo varius dictumst egestas at curae ultricies nam.</p>
								<a href="#" class="btn">Read More</a>
							</div>
							</div> 
							<div class="col-xl-4 col-lg-4 col-mb-4 col-sm-12 col-xs-12">
							<img src="assets/images/products/home-furniture/feature/feature-04.jpg" class="img-fluid d-block m-auto" alt=""> 
							</div>   
						</div>
						</div>
						<div class="b-tab_block_single" data-rel="3"> 
						<div class="row clearfix">
							<div class="col-xl-4 col-lg-4 col-mb-4 col-sm-12 col-xs-12">
							<img src="assets/images/products/home-furniture/feature/feature-05.jpg" class="img-fluid d-block m-auto" alt=""> 
							</div>   
							<div class="col-xl-4 col-lg-4 col-mb-4 col-sm-12 col-xs-12">
							<img src="assets/images/products/home-furniture/feature/feature-06.jpg" class="img-fluid d-block m-auto" alt=""> 
							</div>  
							<div class="col-xl-4 col-lg-4 col-mb-4 col-sm-12 col-xs-12">
							<div class="b-feature_prod_text text-left pt-5">
								<span class="b-subline">DESIGNERS: VALENTINO RACHELLI</span>
								<h2 class="b-product_name">EAMES SOFA COMPACT</h2>
								<span class="b-price">$800</span>
								<p>Vel himenaeos quam fringilla a interdum blandit adipiscing ullamcorper per consequat in ut a enim suspendisse luctus commodo varius dictumst egestas at curae ultricies nam.</p>
								<a href="#" class="btn">Read More</a>
							</div>
							</div>  
						</div>
						</div>
					</div>
					</div>
				</div>
				</div>
			</section>
			<!-- featured products end -->

			<!-- products show start -->
			<section id="b-products_cat"> 
				<div class="b-cat_bg_img">
				<div class="b-section_title text-center">
					<span>MADE THE HARD WAY</span>
					<h4 class="text-uppercase">
					FEATURED CATEGORIES
					<span class="b-title_separator"><span></span></span>
					</h4> 
				</div>
				<div class="b-featured_cat mb-5">
					<div class="container p-4" style="background-color: #fff;">
					<div class="row">
						<div class="col-xl-3 col-lg-3 col-mb-3 col-sm-6 col-xs-12">
						<div class="b-featured_cat_in">
							<a href="#">
							<img src="assets/images/category/home-furniture/category-04.jpg" class="img-fluid d-block" alt="">
							</a>
							<div class="b-cat_mask">
							<a href="#" class="category-link-overlay">Furniture</a> 
							</div>
						</div>
						</div>
						<div class="col-xl-3 col-lg-3 col-mb-3 col-sm-6 col-xs-12">
						<div class="b-featured_cat_in">
							<a href="#">
							<img src="assets/images/category/home-furniture/category-02.jpg" class="img-fluid d-block" alt="">
							</a>
							<div class="b-cat_mask">
							<a href="#" class="category-link-overlay">Accessories</a> 
							</div>
						</div> 
						</div> 
						<div class="col-xl-3 col-lg-3 col-mb-3 col-sm-6 col-xs-12">
						<div class="b-featured_cat_in">
							<a href="#">
							<img src="assets/images/category/home-furniture/category-03.jpg" class="img-fluid d-block" alt="">
							</a>
							<div class="b-cat_mask">
							<a href="#" class="category-link-overlay">Jewellery</a> 
							</div>
						</div>
						</div>  
						<div class="col-xl-3 col-lg-3 col-mb-3 col-sm-6 col-xs-12">
						<div class="b-featured_cat_in">
							<a href="#">
							<img src="assets/images/category/home-furniture/category-04.jpg" class="img-fluid d-block" alt="">
							</a>
							<div class="b-cat_mask">
							<a href="#" class="category-link-overlay">Watches</a> 
							</div>
						</div>
						</div> 
					</div>
					</div>
				</div>
				</div>  
			</section> 
			<!-- products show end -->

			<!-- newsletter start -->
			<section id="b-newslatter">
				<div class="b-newslatter b-newslatter_bg_grey">
				<div class="b-newsletter_inner"> 
						<h3 class="text-center b-font_default text-uppercase">Our Newsletter</h3>
						<p class="text-center pt-2 pb-3">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore <br>et dolore magna aliqua. Ut enim ad minim veniam</p>
						<div class="b-newsletter_form">
							<form action="#" class="clearfix">
								<div class="form-group float-left">  
									<input name="email" placeholder="Your email address" required="" type="email"> 
								</div>  
								<div class="b-form_submit float-left">    
									<button class="b-submit">Sign up</button>
								</div>    
							</form>
						</div>
					</div>
				</div>
			</section> 
			<!-- newsletter end -->

			<!-- footer start -->
			<?php include_once('includes/footer.php'); ?>
			<!-- footer end -->
		</div>
		<!-- wrapper div end -->

		<!-- Quick View Modal -->
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