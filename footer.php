            <div class="nav-waypoint">
                  <section id="footer-section" class="footer-section content-section ha-waypoint" >
                        <div class="grid-container">
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
                                    <form id="suscribe-form" class="suscribe-form">
                                          <input  class="suscribe" name="suscribe" type="text" placeholder="Your email here"></text>
                                          <input type="submit" class="sub_submit">
                                    </form>
                              </div>
                              <div class="grid-420 tablet-grid-100 mobile-grid-100 about-box grid-parent" >
                                    <h2>Follow us on</h2>
                                    <div class="icon"><span><a href="https://www.behance.net/MizaQ" class="be" target="_blank"></a></span><span><a href="http://dribbble.com/MizaGroup" class="d" target="_blank"></a></span><span><a href="https://plus.google.com/u/0/109620931413072904275/posts" class="g" target="_blank"></a></span></div>
                                    <p>Copyright © 2014 Miza Qatar Agency </p>
                              </div>
                        </div>
                  </section>
            </div>
      </div>
<?php wp_footer();?>
      <script src="<?php echo THEMEROOT?>/js/jquery.mb.YTPlayer.js"></script>
      <script src="<?php echo THEMEROOT?>/js/jquery.parallax.min.js"></script>
      <script src="<?php echo THEMEROOT?>/js/jquery.scrollTo.min.js"></script>
      <script src="<?php echo THEMEROOT?>/js/waypoints.min.js"></script>
      <script src="<?php echo THEMEROOT?>/js/jquery.easing.1.3.js"></script>
      <script src="<?php echo THEMEROOT?>/js/jquery.custom.js"></script>
      <script src="<?php echo THEMEROOT?>/js/plugin.js"></script>
      <script src="<?php echo THEMEROOT?>/js/jquery.mixitup.min.js"></script>
      <script src="<?php echo THEMEROOT?>/js/jquery.contentcarousel.js"></script>
      <script type="text/javascript" src="//maps.google.com/maps/api/js?sensor=true&language=en"></script>
      <script type="text/javascript">
            <?php
      if ( is_page('home') ) {?>
          jQuery(document).ready(function(){
                  // left: 37, up: 38, right: 39, down: 40,
                  // spacebar: 32, pageup: 33, pagedown: 34, end: 35, home: 36
                  var keys = [37, 38, 39, 40];
                  var scrollcount=0;
                  function preventDefault(e) {
                    e = e || window.event;
                    if (e.preventDefault)
                        e.preventDefault();
                    e.returnValue = false;  
                  }

                  function keydown(e) {
                      for (var i = keys.length; i--;) {
                          if (e.keyCode === keys[i]) {
                              preventDefault(e);
                              if(e.keyCode==38){
                                    $( '#header-section' ).attr('class', 'ha-header ' + 'ha-header-hide' );
                                    setTimeout(function(){
                                          $('.small-head').addClass('small-header-show').removeClass('small-header-hide'); 
                                          disable_scroll();
                                    },500); 
                              }
                              if(e.keyCode==40){
                                     $('.small-head').addClass('small-header-hide').removeClass('small-header-show');
                                    setTimeout(function(){
                                          $( '#header-section' ).attr('class', 'ha-header ' + 'ha-header-show' );
                                          enable_scroll();
                                    },500); 
                              }
                              return;
                          }
                      }
                  }

                  function wheel(e) {
                        preventDefault(e);
                          if(e.wheelDelta/120 > 0) { 
                              $( '#header-section' ).attr('class', 'ha-header ' + 'ha-header-hide' );
                              setTimeout(function(){
                                    $('.small-head').addClass('small-header-show').removeClass('small-header-hide'); 
                                    disable_scroll();
                              },500); 
                          }
                          else{ 
                              $('.small-head').addClass('small-header-hide').removeClass('small-header-show');
                              setTimeout(function(){
                                    $( '#header-section' ).attr('class', 'ha-header ' + 'ha-header-show' );
                                    enable_scroll();
                              },500); 
                          }
                  }
     
                  function disable_scroll() {
                    if (window.addEventListener) {
                        window.addEventListener('DOMMouseScroll', wheel, false);
                    }
                    window.onmousewheel = document.onmousewheel = wheel;
                    document.onkeydown = keydown;
                  }

                  function enable_scroll() {
                      if (window.removeEventListener) {
                          window.removeEventListener('DOMMouseScroll', wheel, false);
                      }
                      window.onmousewheel = document.onmousewheel = document.onkeydown = null;  
                  }
                  if( !device.tablet() && !device.mobile() && Modernizr.csstransitions ) {
                     disable_scroll();
                  }
                  $(window).scroll(function() {
                        if($(this).scrollTop() == 0) { 
                              $( '#header-section' ).attr('class', 'ha-header ' + 'ha-header-hide' );
                              setTimeout(function(){
                                    $('.small-head').addClass('small-header-show').removeClass('small-header-hide'); 
                                    disable_scroll();
                              },500);
                        } 
                  });
                  var diff=$('.hero-title-holder').offset().top - $('#first-section').offset().top;
                  window.onscroll = function (event) {
                        var new_diff=$('.hero-title-holder').offset().top - $('#first-section').offset().top;
                        if(new_diff>0){
                              $('.hero-title-holder,.btn-holder').css('opacity',0);
                        }else{
                              var ratio=new_diff/diff;
                              $('.hero-title-holder,.btn-holder').css('opacity',ratio);
                        }
                  }
                  $('.logo a[href*=#]').click( function(event) { 
                              
                        event.preventDefault();
                        $('#ut-navigation a').removeClass('selected');
                        $('#ut-navigation a:first-child').addClass('selected');
                        $.scrollTo( $(this).attr('href') , 650, { easing: 'swing' , offset: -80 , 'axis':'y' } );             
                        
                  });
                  
                  $('#sev-nav3,#sev-nav2,#sev-nav1,#hire1,#hire2,#hire3,#hire4').click( function(event) {        
                        event.preventDefault();
                        $.scrollTo( $(this).attr('href') ,2000, { easing: 'swing' , offset: -80 , 'axis':'y' } );      
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
                        var $header = $( '#header-section' );
      
                     $( '.ha-waypoint' ).each( function(i) {
                        
                        /* needed vars */
                        var $this = $( this ),
                           animClassDown = $this.data( 'animateDown' ),
                           animClassUp = $this.data( 'animateUp' );
                        $this.waypoint(function(direction) {
                           
                           if( direction === 'down' && animClassDown ) {
                              $('.small-head').removeClass('small-header-hide').addClass('small-header-show');
                              $header.attr('class', 'ha-header ' + animClassUp );
                              $(window).scroll(function() {
                                 if($(window).scrollTop() + $(window).height() == $(document).height()) {
                                    $('#header-section').attr('class', 'ha-header ' + 'ha-header-show' ); 
                                   
                                 }else{
                                    $('#header-section').attr('class', 'ha-header ' + 'ha-header-hide' ); 
                                 }
                              });
                              $('.icon1').css('opacity',1); 
                           }
                           else if( direction === 'up' && animClassUp ){
                              $(window).scroll(function() {
                                 if($(this).scrollTop() == 0) {  
                                    $header.attr('class', 'ha-header ' + animClassDown ); 
                                 } 
                              });
                              $('.small-head').removeClass('small-header-show').addClass('small-header-hide');
                            
                              $('.icon1').stop(true, true).delay(300).animate({opacity:0},800);
                           }        
                        
                        }, { offset: '-1px' } );
                        
                     });
                  });
            <?php } ?>
      </script>
      <script type="text/javascript">
      jQuery(document).ready(function(){  
            /* placeholder fix for older browser */
            if( !Modernizr.csstransforms3d ) {
                  $('[placeholder]').focus(function() {
                        var input = $(this);
                        if (input.val() == input.attr('placeholder')) {
                              input.val('');
                              input.removeClass('placeholder');
                        }
                  }).blur(function() {
                        var input = $(this);
                        if (input.val() == '' || input.val() == input.attr('placeholder')) {
                              input.addClass('placeholder');
                              input.val(input.attr('placeholder'));
                        }
                  }).blur().parents('form').submit(function() {
                        $(this).find('[placeholder]').each(function() {
                              var input = $(this);
                              if (input.val() == input.attr('placeholder')) {
                                    input.val('');
                              }
                        })
                  });
            }
            

            /* form processing */
            $("#contact-form").submit(function(){
                  
                  $(this).find('[placeholder]').each(function() {
                        
                        var input = $(this);
                        if (input.val() == input.attr('placeholder')) {
                              input.val('');
                        }
                        
                  });
                  
                  var processor = "<?php echo get_template_directory_uri(); ?>/contact.php",
                        str = $(this).serialize();
                  
                  $("#contact-form .success-message, #contact-form .alert-message, #contact-form .error-message ").hide();
                  
                  $.ajax({
                           
                     type: "POST",
                     url: processor,
                     data: str,
                     success: function(data) {
                              
                              //console.log(data);
                              $("#contact-form").append('<span class="feedback"></span>');
                                                   
                              if(data === 'OK') {
                              
                                    $("#contact-form .success-message").fadeIn();
                                    $("#contact-form").each(function(){
                                          this.reset();
                                    });
                                
                              } else if (data === 'ERROR') {
                              
                                    $("#contact-form .error-message").fadeIn();
                              
                              } else {
                                    
                                    $("#contact-form .alert-message").fadeIn().html( data );
                                    
                              }
                           
                     }
                           
                  });
            
                  return false;
                  
            });
                  $("#suscribe-form input").keydown(function(event) {
                     if(event.keyCode == 13){
                         $("#suscribe-form").submit();
                     }
                       

                  });
                  /* form processing */
                  $("#suscribe-form").submit(function(){
                        
                        $(this).find('[placeholder]').each(function() {
                              
                              var input = $(this);
                              if (input.val() == input.attr('placeholder')) {
                                    input.val('');
                              }
                              
                        });
                        
                        var processor = "<?php echo get_template_directory_uri(); ?>/suscribe.php",
                              str = $(this).serialize();
                        //console.log(str);
                        $.ajax({
                                 
                           type: "POST",
                           url: processor,
                           data: str,
                           success: function(data) {
                                                               
                                    if(data === 'OK') {
                                          $("#suscribe-form").each(function(){
                                                this.reset();
                                          });
                                          $("#suscribe-form input").val('');
                                          $("#suscribe-form input").attr('placeholder','Thanks for Subscribing');
                                          
                                      
                                    } else if (data === 'ERROR') {
                                          $("#suscribe-form input").val('');
                                          $("#suscribe-form input").attr('placeholder','Error');
                                    
                                    } else {
                                          $("#suscribe-form input").val('');
                                          $("#suscribe-form input").attr('placeholder',data);
                                    }
                                 
                           }
                                 
                        });
                  
                        return false;
                        
                  });

             
                  $('.address-box').on("click",function(){

                        var position     = [$(this).attr("data-lat"),$(this).attr("data-log")];
                        var marker_url   = "<?php echo IMAGES?>/marker.png";
                        var marker_w     = 169;
                        var marker_h     = 206;
                        var marker_title = "Mapped WordPress Theme Demo";
                        mp_initialize_map(position, marker_url,marker_w,marker_h,marker_title);
                  });
      });
          jQuery(document).ready(function($) {
                     
                  var position     = [25.28100,51.53991];
                  var marker_url   = "<?php echo IMAGES?>/marker.png";
                  var marker_w     = 169;
                  var marker_h     = 206;
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