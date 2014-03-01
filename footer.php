            <div class="nav-waypoint">
                  <section id="footer-section" class="footer-section content-section ha-waypoint" >
                        <div class="grid-container">
							<div class="black-arrow-up"></div>
                              <div class="grid-292 tablet-grid-100 mobile-grid-100 about-box grid-parent" >
                                    <nav>
                                          <?php if ( is_page('home') ) {?>
                                          <li><a id="sev-nav3" href="#service">Services</a></li>
                                          <?php } else { ?>
                                          <li><a href="<?php echo site_url('#service')?>">Services</a></li>
                                          <?php } ?>
                                          <li><a href="<?php echo site_url('/lab/')?>">LAB</a></li>
                                          <li><a href="<?php echo site_url('/blog/')?>">Blog</a></li>
                                          <?php if ( is_page('home') ) {?>
                                          <li><a id="hire3" href="#address-section">Hire US</a></li>
                                          <?php } else { ?>
                                          <li><a href="<?php echo site_url('#address-section')?>">Hire US</a></li>
                                          <?php } ?>
                                    </nav>
                              </div>
                              <div class="grid-320 tablet-grid-100 mobile-grid-100  about-box grid-parent" >
                                    <h2>Subscribe</h2>
                                    <form>
                                          <input  class="suscribe" type="text" placeholder="Your email here"></text>
                                    </form>
                              </div>
                              <div class="grid-420 tablet-grid-100 mobile-grid-100 about-box grid-parent" >
                                    <h2>Follow us on</h2>
                                    <div class="icon"><span><a href="" class="be"></a></span><span><a href="" class="d"></a></span><span><a href="" class="g"></a></span></div>
                              </div>
							  <div class="grid-100 tablet-grid-100 mobile-grid-100 footer-bottom-box grid-parent">
									<p>Copyright © 2014 Miza Qatar Agency </p>
							  </div>
                        </div>
                  </section>
            </div>
      </div>
<script src="<?php echo THEMEROOT?>/js/jquery.mb.YTPlayer.js"></script>
<script src="<?php echo THEMEROOT?>/js/jquery.parallax.min.js"></script>
<script src="<?php echo THEMEROOT?>/js/jquery.scrollTo.min.js"></script>
<script src="<?php echo THEMEROOT?>/js/waypoints.min.js"></script>
<script src="<?php echo THEMEROOT?>/js/jquery.easing.1.3.js"></script>
<script src="<?php echo THEMEROOT?>/js/jquery.custom.js"></script>
<script src="<?php echo THEMEROOT?>/js/plugin.js"></script>
<script src="<?php echo THEMEROOT?>/js/jquery.mixitup.min.js"></script>
<script type="text/javascript" src="//maps.google.com/maps/api/js?sensor=true&language=en"></script>
<script type="text/javascript">
      <?php
if ( is_page('home') ) {?>
    jQuery(document).ready(function(){
            $('.logo a[href*=#]').click( function(event) { 
                        
                  event.preventDefault();
                  $('#ut-navigation a').removeClass('selected');
                  $('#ut-navigation a:first-child').addClass('selected');
                  $.scrollTo( $(this).attr('href') , 650, { easing: 'swing' , offset: -80 , 'axis':'y' } );             
                  
            });
            
            $('#sev-nav3,#sev-nav2,#sev-nav1,#hire1,#hire2,#hire3').click( function(event) { 
                        
                  event.preventDefault();
                  $( '#header-section' ).attr('class', 'ha-header '+ 'ha-header-hide');
                  $.scrollTo( $(this).attr('href') ,2000, { easing: 'swing' , offset: 1 , 'axis':'y' } );               
                  
            });
      });
<?php } else { ?>
    // This is not a homepage
<?php } ?>
      
</script>
<script type="text/javascript">
      <?php if ( 'labs' == get_post_type() ) {?>
            jQuery(document).ready(function(){
                  $('.parallax-banner-2').css("background-position","center center");
            });
      <?php } ?>
</script>
<script type="text/javascript">
jQuery(document).ready(function(){       
            $('.address-box').on("click",function(){

                  var position     = [$(this).attr("data-lat"),$(this).attr("data-log")];
                  var marker_url   = "http://demo.onepagelove.com/mapped/wp-content/uploads/sites/3/2013/10/deluxe-logo-pin-sm.png";
                  var marker_w     = 199;
                  var marker_h     = 235;
                  var marker_title = "Mapped WordPress Theme Demo";
                  mp_initialize_map(position, marker_url,marker_w,marker_h,marker_title);
            });
});
    jQuery(document).ready(function($) {
               
            var position     = [25.28100,51.53991];
            var marker_url   = "http://demo.onepagelove.com/mapped/wp-content/uploads/sites/3/2013/10/deluxe-logo-pin-sm.png";
            var marker_w     = 199;
            var marker_h     = 235;
            var marker_title = "Mapped WordPress Theme Demo";

            window.onload = mp_initialize_map(position, marker_url,marker_w,marker_h,marker_title);

        }); 
    function mp_initialize_map (mp_position, mp_marker_url, mp_marker_w, mp_marker_h, mp_marker_title) {

      // fornisce latitudine e longitudine
      var latlng = new google.maps.LatLng(mp_position[0],mp_position[1]);
      var marker = new google.maps.MarkerImage(mp_marker_url, new google.maps.Size(mp_marker_w,mp_marker_h), new google.maps.Point(0,0) );

      // imposta le opzioni di visualizzazione
      var options = {
            zoom: 16,
            center: latlng,
            mapTypeId: google.maps.MapTypeId.ROADMAP,
            panControl: false,
            zoomControl: false,
            mapTypeControl: false,
            scaleControl: false,
            streetViewControl: false,
            overviewMapControl: false,
            scrollwheel: false
      };
           
      // crea l'oggetto mappa
      var map = new google.maps.Map(document.getElementById('map'), options);

      var marker = new google.maps.Marker({
            position: latlng,
            map: map,
            icon: marker, 
            title: mp_marker_title + " - Click for more informations"
      });

      var bew = [
            {
                  featureType: "all",
                  stylers: [
                         { saturation: -100 }
                  ]
            }
      ];

      map.setOptions({styles: bew});

      // Marker click event
      google.maps.event.addListener(marker, 'click', function() {
            $('.content-wrap').toggleClass('table , none');
      })

      // Content click event
      $('.content').click(function(){
            $('.content-wrap').toggleClass('none , table');
      })

}
</script>
</body>
</html>