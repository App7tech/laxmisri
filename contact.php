<!DOCTYPE html>
<html>
	<head>
		<?php include_once('includes/head.php'); ?>
  	</head>
    <body>   
        <!-- wrapper div start -->
	   <?php include_once('includes/header.php'); ?>
		<div class="mapouter"><div class="gmap_canvas"><iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d60923.98860367782!2d78.472009!3d17.375793!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x1038dc8dc4177e43!2sLaxmi+Sri+Art+Jewellers%2FLAXMI+SRI+COLLECTIONS!5e0!3m2!1sen!2sus!4v1553820864123!5m2!1sen!2sus" width="100%" height="600" frameborder="0" style="border:0" allowfullscreen></iframe></div></div>
            
            <!--<div class="b-map">
              <div id="b-map" class="b-map_in"></div>
              <div class="b-map_over">
                <h3>VISIT OUR NEW STORE IN NEW YORK</h3>
                <p>
                  <i class="fa fa-map-marker b-icon_large"></i>
                  20 Margaret St, London <br>
                  Great Britain, 3NM98-LK
                </p>
                <a href="#">Contact Us</a>
              </div>
            </div>-->
            <div class="b-contact b-contact_light pt-5 mt-4">
              <div class="container">
                <div class="row clearfix">
                  <div class="col-xl-6 col-lg-6 col-mb-6 col-sm-12 col-xs-12">
                    <div class="b-title b-title_line_right">
                      <h2 class="text-uppercase">get in touch with us</h2>
                    </div>
                    <div class="clearfix row">
                        <div class="col-xl-6 col-lg-6 col-mb-6 col-sm-12 col-xs-12">
                          <div class="form-group">
                            <label>Your Name <i style="color: red;">*</i> <span id="userName-info" class="info"></span></label>
                            <input required="" type="text" name="userName" id="userName">
                          </div>
                        </div>
                        <div class="col-xl-6 col-lg-6 col-mb-6 col-sm-12 col-xs-12">
                          <div class="form-group">
                            <label>Your Email <i style="color: red;">*</i>  <span id="userEmail-info" class="info"></span></label>
                            <input required="" type="email" name="userEmail" id="userEmail">
                          </div>
                        </div>
                        <div class="col-xl-12 col-lg-12 col-mb-12 col-sm-12 col-xs-12">
                          <div class="form-group">
                            <label>Subject</label>
                            <input  type="text" name="subject" id="subject">
                          </div>
                        </div>  
                        <div class="col-xl-12 col-lg-12 col-mb-12 col-sm-12 col-xs-12">
                          <div class="form-group">
                            <label>Your Message</label>
                            <textarea name="content" id="content"></textarea>
                          </div>
                        </div>  
                        <div class="col-xl-12 col-lg-12 col-mb-12 col-sm-12 col-xs-12">
                          <button  onClick="sendContact();" class="btn btn-bg text-white">SEND A MESSAGE</button>
                        </div>  
                    </div> 
                    <div class="mt-4" id="mail-status"></div>
                  </div>
                  <div class="col-xl-6 col-lg-6 col-mb-6 col-sm-12 col-xs-12">
                    <div class="b-title b-title_line_righ mt-5 mt-lg -0">
                      <h2 class="text-uppercase">information about us</h2>
                    </div>
                    <p style="text-align:justify;">We are an emerging organization gaining recognition among our clients as a quality manufacturer, supplier and exporter of Imitation Jewellery Items such
                    as Fashion Jewellery and Antique Jewellery. The products we design are innovative and add a royal touch to the interiors and the wearers. We believe in
                    offering true value for money to our clients by providing them a range that exudes elegance and extravagance.

                     Our range has a rich look & feel but is moderately priced, and is available in various options. We take care of each and every demand of the
                     clients and make sure that the products are timely delivered.</p>
                   <!-- <p>Sagittis posuere id nam quis vestibulum vestibulum a facilisi at elit hendrerit scelerisque sodales nam dis orci non aliquet enim.</p>-->
                    <div class="b-title b-title_line_right">
                      <h2 class="text-uppercase">contact us</h2>
                    </div>
                    <div class="b-block_four_info">
                      <div class="row clearfix">
                        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-xs-12">
                          <div class="clearfix mb-5">
                           <!-- <i class="icon-envelope icons pull-left mr-4 b-icon_large"></i>-->
                            <p class="pull-left mb-0">
                              Tel: +91 9949551967 <br>
                              whatsapp:+91 9701220379<br>
                              E-Mail:laxmisriart2@gmail.com 
                            </p>
                          </div>
                        </div>
                        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-xs-12">
                          <div class="clearfix mb-5">
                            <!--<i class="icon-clock icons pull-left mr-4 b-icon_large"></i>-->
                            <p class="pull-left mb-0">
                              15-8-431/1&2, Opp. Santoshi Mata Temple,
                              New Feelkhana,<br>  Begum Bazar,
                              Hyderabad-500012, INDIA. 
                             
                            </p>
                          </div>
                        </div>
                        <!--<div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-xs-12">
                          <div class="clearfix mb-5">
                            <!--<i class="icon-cursor icons pull-left mr-4 b-icon_large"></i>
                            <p class="pull-left mb-0">
                              Free standard shipping <br>
                              on all orders in New York.
                            </p>
                          </div>
                        </div>
                        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-xs-12">
                          <div class="clearfix mb-5">
                           <!-- <i class="icon-rocket icons pull-left mr-4 b-icon_large"></i>
                            <p class="pull-left mb-0">
                              Support forum provide <br>
                              for over 24h, every day
                            </p>
                          </div>
                        </div>-->
                      </div>
                    </div>
                    <div class="b-blog_social mt-0 pb-5">
                      <ul class="list-unstyled clearfix mb-0 pl-0 pr-0">
                        <li><a href="#" class="fab fa-facebook-f text-white"></a></li>
                        <li><a href="#" class="fab fa-twitter text-white"></a></li>
                        <li><a href="#" class="fab fa-instagram text-white"></a></li>
                        <li><a href="#" class="fab fa-linkedin text-white"></a></li>
                        <li><a href="#" class="fab fa-whatsapp text-white"></a></li>
                      </ul>
                    </div>
                  </div>
                </div>
              </div>
			</div> 
			
			<!-- footer start -->
			<?php include_once('includes/footer.php'); ?>
			<!-- footer end -->
			
		</div>  
		<!-- wrapper div end -->
		
		<?php include_once('includes/foot.php'); ?>

        <script src="https://maps.googleapis.com/maps/api/js"></script>
        
        <script>
            // When the window has finished loading create our google map below
            google.maps.event.addDomListener(window, 'load', init);
        
            function init() {
                // Basic options for a simple Google Map
                // For more options see: https://developers.google.com/maps/documentation/javascript/reference#MapOptions
                var mapOptions = {
                    // How zoomed in you want the map to start at (always required)
                    zoom: 11,

                    // The latitude and longitude to center the map (always required)
                    center: new google.maps.LatLng(40.6700, -73.9400), // New York

                    // How you would like to style the map. 
                    // This is where you would paste any style found on Snazzy Maps.
                    styles: [{"featureType":"administrative","elementType":"labels.text","stylers":[{"visibility":"off"}]},{"featureType":"administrative.country","elementType":"labels.text","stylers":[{"visibility":"off"}]},{"featureType":"administrative.province","elementType":"labels.text","stylers":[{"visibility":"on"}]},{"featureType":"administrative.locality","elementType":"labels.text","stylers":[{"visibility":"on"}]},{"featureType":"administrative.locality","elementType":"labels.text.fill","stylers":[{"color":"#625d55"}]},{"featureType":"administrative.locality","elementType":"labels.text.stroke","stylers":[{"weight":"0.95"}]},{"featureType":"administrative.neighborhood","elementType":"labels.text","stylers":[{"visibility":"on"}]},{"featureType":"administrative.land_parcel","elementType":"labels.text","stylers":[{"visibility":"off"}]},{"featureType":"landscape.natural.landcover","elementType":"geometry","stylers":[{"visibility":"off"}]},{"featureType":"landscape.natural.terrain","elementType":"geometry","stylers":[{"visibility":"on"}]},{"featureType":"poi","elementType":"labels.text","stylers":[{"visibility":"off"}]},{"featureType":"poi.park","elementType":"labels.text","stylers":[{"visibility":"off"}]},{"featureType":"road","elementType":"labels.icon","stylers":[{"visibility":"off"}]},{"featureType":"road.highway","elementType":"geometry.fill","stylers":[{"color":"#ffffff"},{"lightness":"0"},{"weight":"1.00"}]},{"featureType":"road.highway","elementType":"geometry.stroke","stylers":[{"color":"#f8f8f8"},{"lightness":"0"}]},{"featureType":"road.highway.controlled_access","elementType":"geometry.fill","stylers":[{"color":"#ffffff"},{"visibility":"on"},{"weight":"1"}]}]
                };

                // Get the HTML DOM element that will contain your map 
                // We are using a div with id="map" seen below in the <body>
                var mapElement = document.getElementById('b-map');

                // Create the Google Map using our element and options defined above
                var map = new google.maps.Map(mapElement, mapOptions);

                // Let's also add a marker while we're at it
                var marker = new google.maps.Marker({
                    position: new google.maps.LatLng(40.6700, -73.9400),
                    map: map,
                    title: 'Snazzy!'
                });
            } 

            function sendContact() {
              var valid;  
              valid = validateContact();
              if(valid) {
                jQuery.ajax({
                url: "contact-mail.php",
                data:'userName='+$("#userName").val()+'&userEmail='+$("#userEmail").val()+'&subject='+$("#subject").val()+'&content='+$(content).val(),
                type: "POST",
                success:function(data){
                $("#mail-status").html(data);
                },
                error:function (){}
                });
              }
            }

            function validateContact() {
              var valid = true; 
              $(".demoInputBox").css('background-color','');
              $(".info").html('');
              
              if(!$("#userName").val()) {
                $("#userName-info").html("(required)");
                $("#userName").css('background-color','#FFFFDF');
                valid = false;
              }
              if(!$("#userEmail").val()) {
                $("#userEmail-info").html("(required)");
                $("#userEmail").css('background-color','#FFFFDF');
                valid = false;
              }
              
              return valid;
            }
        </script>  
    </body>
</html>