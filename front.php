<?php
/*
Template Name: Front
*/
get_header(); ?>
<div class="nav-waypoint">
                <section id="first-section" class="first-section content-section ha-waypoint">
                    <div class="grid-container">
                        <div class="grid-100 tablet-grid-100 mobile-grid-100 about-box margin-bottom-none grid-parent" >
                            <div class="grid-50 tablet-grid-100 mobile-grid-100 about-box margin-bottom-none grid-parent">
                                <div class="about-box">
                                    <h3 class="big-title-1">Not Your  Avarage Pitch<img src="<?php echo IMAGES?>/mic.png" alt="app-development"></h3>
                                </div>
                            </div>
                            <div class="grid-50 tablet-grid-100 mobile-grid-100 about-box margin-bottom-none margin-top-17 grid-parent" >
                                <div class="grid-40 tablet-grid-100 mobile-grid-100 about-box margin-bottom-none grid-parent margin-left-43">
                                    <div class="about-box">
                                        <h3 class="small-title-text"><img src="<?php echo IMAGES?>/icon2.png" alt="app-development" class="float-left margin-right-10"><span class="small-heading-1">Lorem Ipsum</span></h3>
                                        <p class="small-desc-1">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec ac lacus tortor. Fusce scelerisque nulla ut turpis facilisis mollis. Suspendisse vel mattis diam. </p>
                                    </div>
                                </div>
                                <div class="grid-40 tablet-grid-100 mobile-grid-100 about-box margin-bottom-none grid-parent margin-left-60">
                                    <div class="about-box">
                                        <h3 class="small-title-text"><img  src="<?php echo IMAGES?>/icon3.png" alt="ui-design" class="float-left margin-right-10"><span class="small-heading-1">Lorem Ipsum</span></h3>
                                        <p class="small-desc-1">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec ac lacus tortor. Fusce scelerisque nulla ut turpis facilisis mollis. Suspendisse vel mattis diam. </p>
                                    </div>
                                </div>
                                <div class="grid-40 tablet-grid-100 mobile-grid-100 about-box margin-bottom-none grid-parent margin-left-43">
                                    
                                    <div class="about-box">
                                        <h3 class="small-title-text"><img src="<?php echo IMAGES?>/icon4.png" alt="brand-identity" class="float-left margin-right-10"><span class="small-heading-1">Lorem Ipsum</span></h3>
                                        <p class="small-desc-1">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec ac lacus tortor. Fusce scelerisque nulla ut turpis facilisis mollis. Suspendisse vel mattis diam.</p>
                                    </div>
                                </div>
                                <div class="grid-40 tablet-grid-100 mobile-grid-100 about-box margin-bottom-none grid-parent margin-left-60" >  
                                    <div class="about-box">
                                        <h3 class="small-title-text"><img src="<?php echo IMAGES?>/icon1.png" alt="consultancy" class="float-left margin-right-10"><span class="small-heading-1">Lorem Ipsum</span></h3>
                                        <p class="small-desc-1">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec ac lacus tortor. Fusce scelerisque nulla ut turpis facilisis mollis. Suspendisse vel mattis diam. </p>
                                    </div>
                                </div>
                            </div>
                           <div class="grid-100 tablet-grid-100 mobile-grid-100 about-box margin-bottom-none grid-parent">
                                <div class="about-box margin-bottom-none yellow-border">
                                    <p class="big-desc-1">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec rutrum metus ipsum, vel semper risus laoreet quis. Donec vulputate, tellus vitae interdum rutrum, arcu urna vulpu neque. Fusce vehicula elit est, eu condimentum diam pulvinar nonLorem ipsum dolor sit amet, consectetur adipiscing elit. Donec</p> 
                                </div>
                           </div>
                        </div>
                    </div>
                </section>
                <div class="clear"></div>
                <section id="second-section" class="second-section parallax-section parallax-background  parallax-section-2 ha-waypoint">
                    <div class="parallax-overlay parallax-overlay-1"></div>
                    <div class="grid-container parallax-content">
                        <div class="grid-100 tablet-grid-100 mobile-grid-100 about-box grid-parent">
                            <div class="about-box">
                                <h3 class="big-title-2"><span>The Brains<br/>Behind<br/>The Operation</span>
                                    <span class="button_area"><a href="<?php echo site_url('/blog/')?>" class="button">View Blog</a></span>
                                </h3>
                            </div>      
                        </div>
                        <div class="grid-100 tablet-grid-100 mobile-grid-100 about-box margin-bottom-none grid-parent">
                            <div class="about-box margin-bottom-none yellow-border">
                                <p class="big-desc-1 white">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec rutrum metus ipsum, vel semper risus laoreet quis. Donec vulputate, tellus vitae interdum rutrum, arcu urna vulpu neque. Fusce vehicula elit est, eu condimentum diam pulvinar nonLorem ipsum dolor sit amet, consectetur adipiscing elit. Donec</p> 
                            </div>
                       </div>
                    </div>
               </section>
            </div>
            <div class="nav-waypoint">
                <section id="third-section" class="first-section content-section ha-waypoint yellow-bottom-border big" >
                    <div class="grid-container">
                    <div class="grid-100 tablet-grid-100 mobile-grid-100 team-arrow-area grid-parent">
                        <div class="white-up"></div>
                    </div>
                       <div class="grid-100 tablet-grid-100 mobile-grid-100 team-box grid-parent">
                        <div id="ca-container" class="ca-container">
                <div class="ca-wrapper">
                    
                            <?php 
                                $args = array( 'post_type' => 'members', 'posts_per_page' => -1,'post_status'=>'publish' );
                                $loop = new WP_Query( $args );
                                while ( $loop->have_posts() ) : $loop->the_post();
                            ?>
                            <div class="ca-item">
                            <div class="team-player">
                                <img src="<?php the_field('member_pic'); ?>">
                                <div class="team-name"><?php the_title();?></div>
                                <div class="team-position"><?php the_field('member_position'); ?></div>
                                <div class="team-fly"></div>
                                <div class="team-desc"><?php the_field('member_description'); ?></div>
                            </div>
                            </div>
                            <?php 
                                endwhile;
                            ?>
                            </div>
                            </div>                          
                       </div>
                    </div>
                </section>
                <div class="clear"></div>
                <section id="service" class="second-section parallax-section parallax-background  parallax-section-2 ha-waypoint" >
                    <div class="parallax-overlay parallax-overlay-1"></div>
                    <div class="grid-container parallax-content">
                        <div class="grid-100 tablet-grid-100 mobile-grid-100 about-box grid-parent">
                            <div class="grid-45 tablet-grid-100 mobile-grid-100 about-box">
                                <div class="about-box">
                                    <h3 class="big-title-2">Bread<br/><span>And</span><img src="<?php echo IMAGES?>/icon5.png" class="margin-left-10"><br/>Butter</h3>
                                </div>
                            </div>
                            <div class="grid-55 tablet-grid-100 mobile-grid-100 about-box grid-parent">
                                <div class="about-box margin-bottom-none yellow-border">
                                    <div class="grid-50 tablet-grid-100 mobile-grid-100 sevice-box pm grid-parent">
                                        <h4 class="production">Production</h4>
                                        <nav>
                                            <li><span>Graphic Design</span></li>
                                            <li><span>Web Design</span></li>
                                            <li><span>Mobile App Design</span></li>
                                            <li><span>Branding</span></li>
                                            <li><span>Web Development</span></li>
                                            <li><span>Mobile App </span></li>
                                            <li><span>App Development</span></li>
                                        </nav>
                                    </div>
                                    <div class="grid-40 tablet-grid-100 mobile-grid-100 sevice-box pm grid-parent" style="margin-left: 56px;">
                                        <h4 class="media">Media</h4>
                                        <nav>
                                            <li><span>Community Manegment</span></li>
                                            <li><span>Content Manegment</span></li>
                                            <li><span>SEO</span></li>
                                            <li><span>SEM</span></li>
                                            <li><span>Data Mining</span></li>
                                        </nav>
                                        <a href="<?php echo site_url('/lab/')?>" class="button" style="margin-top: 24px;">View LAB</a>
                                    </div>
                                </div>
                            </div>      
                        </div>
                        <div class="grid-100 tablet-grid-100 mobile-grid-100 about-box margin-bottom-none grid-parent">
                            <div class="about-box margin-bottom-none yellow-border">
                                <p class="big-desc-1 white">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec rutrum metus ipsum, vel semper risus laoreet quis. Donec vulputate, tellus vitae interdum rutrum, arcu urna vulpu neque. Fusce vehicula elit est, eu condimentum diam pulvinar nonLorem ipsum dolor sit amet, consectetur adipiscing elit. Donec</p> 
                            </div>
                       </div>
                    </div>
               </section>
            </div>
            <div class="nav-waypoint">
                <section id="fourth-section" class="third-section content-section ha-waypoint yellow-border big" >
                    <div class="grid-container">
                        <div class="grid-40 tablet-grid-100 mobile-grid-100 about-box" >
                            <div class="about-box">
                                <h3 class="left-title">Process</h3>
                            </div>      
                        </div>
                         <div class="grid-60 tablet-grid-100 mobile-grid-100 about-box">
                            <div class="about-box">
                                <p class="left-disc">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec rutrum metus ipsum, vel semper risus laoreet quis. Donec vulputate, tellus vitae interdum rutrum, arcu urna vulpu neque</p> 
                            </div>      
                        </div>
                    </div>
                </section>
                <div class="clear"></div>
                <section id="fifth-section" class="second-section parallax-section parallax-background  parallax-section-2 ha-waypoint" >
                    <div class="parallax-overlay parallax-overlay-1"></div>
                    <div class="parallax-content">
                        <h2 class="ss-subtitle"></h2>
                        <div id="ss-container" class="ss-container">
                            <div class="ss-row ss-large">
                                <div class="ss-left">
                                    <a  class="ss-circle ss-circle-1"></a>
                                </div>
                                <div class="ss-right">
                                    <h3>
                                        <a>Discovery</a>
                                        <span>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec tempor mollis placerat. Nam at ipsum ligula. Sed eget augue ut augue eleifend elementum. Donec arcu nunc, facilisis id leo ac, pharetra vestibulum mauris. Duis et ante eget purus iaculis dignissim non ac massa. Sed aLorem ipsum dolor sit amet, consectetur adipiscing elit. Donec tempor mollis placerat. </span>
                                    </h3>

                                </div>
                            </div>
                            <div class="ss-row ss-small">
                                <div class="ss-left">
                                    <h3>
                                        <a>Information Collection</a>
                                        <span>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec tempor mollis placerat. Nam at ipsum ligula. Sed eget augue ut augue eleifend elementum.</span>
                                    </h3>
                                </div>
                                <div class="ss-right">
                                    <a class="ss-circle ss-circle-4"></a>
                                </div>
                            </div>
                            <div class="ss-row ss-small">
                                <div class="ss-left">
                                    <h3>
                                        <a>Information Collection</a>
                                        <span>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec tempor mollis placerat. Nam at ipsum ligula. Sed eget augue ut augue eleifend elementum.</span>
                                    </h3>
                                </div>
                                <div class="ss-right">
                                    <a class="ss-circle ss-circle-5"></a>
                                </div>
                            </div>
                            <div class="ss-row ss-large">
                                <div class="ss-left">
                                    <a  class="ss-circle ss-circle-2"></a>
                                </div>
                                <div class="ss-right">
                                    <h3>
                                        <a>Interpretation</a>
                                        <span>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec tempor mollis placerat. Nam at ipsum ligula. Sed eget augue ut augue eleifend elementum. Donec arcu nunc, facilisis id leo ac, pharetra vestibulum mauris. Duis et ante eget purus iaculis dignissim non ac massa. Sed aLorem ipsum dolor sit amet, consectetur adipiscing elit. Donec tempor mollis placerat. </span>
                                    </h3>

                                </div>
                            </div>
                            <div class="ss-row ss-small">
                                <div class="ss-left">
                                    <h3>
                                        <a>Information Collection</a>
                                        <span>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec tempor mollis placerat. Nam at ipsum ligula. Sed eget augue ut augue eleifend elementum.</span>
                                    </h3>
                                </div>
                                <div class="ss-right">
                                    <a class="ss-circle ss-circle-6"></a>
                                </div>
                            </div>
                            <div class="ss-row ss-small">
                                <div class="ss-left">
                                    <h3>
                                        <a>Information Collection</a>
                                        <span>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec tempor mollis placerat. Nam at ipsum ligula. Sed eget augue ut augue eleifend elementum.</span>
                                    </h3>
                                </div>
                                <div class="ss-right">
                                    <a class="ss-circle ss-circle-7"></a>
                                </div>
                            </div>
                            <div class="ss-row ss-large">
                                <div class="ss-left">
                                    <a  class="ss-circle ss-circle-3"></a>
                                </div>
                                <div class="ss-right">
                                    <h3>
                                        <a>Execution</a>
                                        <span>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec tempor mollis placerat. Nam at ipsum ligula. Sed eget augue ut augue eleifend elementum. Donec arcu nunc, facilisis id leo ac, pharetra vestibulum mauris. Duis et ante eget purus iaculis dignissim non ac massa. Sed aLorem ipsum dolor sit amet, consectetur adipiscing elit. Donec tempor mollis placerat. </span>
                                    </h3>

                                </div>
                            </div>
                            <div class="ss-row ss-small">
                                <div class="ss-left">
                                    <h3>
                                        <a>Feedback</a>
                                        <span>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec tempor mollis placerat. Nam at ipsum ligula. Sed eget augue ut augue eleifend elementum.</span>
                                    </h3>
                                </div>
                                <div class="ss-right">
                                    <a class="ss-circle ss-circle-8"></a>
                                </div>
                            </div>
                            <div class="ss-row ss-small">
                                <div class="ss-left">
                                    <h3>
                                        <a>Manegment</a>
                                        <span>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec tempor mollis placerat. Nam at ipsum ligula. Sed eget augue ut augue eleifend elementum.</span>
                                    </h3>
                                </div>
                                <div class="ss-right">
                                    <a class="ss-circle ss-circle-9"></a>
                                </div>
                            </div>
                        </div>
                        <h2 class="ss-hire"><a id="hire4" href="#address-section" class="button relative">Hire Us</a></h2>
                        
                    </div>
               </section>
            </div>
            <div class="nav-waypoint">
                <section id="six-section" class="third-section content-section ha-waypoint yellow-border big" >
                    <div class="grid-container">
                        <div class="grid-40 tablet-grid-100 mobile-grid-100 about-box" >
                            <div class="about-box">
                                <h3 class="left-title">Find us</h3>
                            </div>      
                        </div>
                         <div class="grid-60 tablet-grid-100 mobile-grid-100 about-box">
                            <div class="about-box">
                                <p class="left-disc">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec rutrum metus ipsum, vel semper risus laoreet quis. Donec vulputate, tellus vitae interdum rutrum, arcu urna vulpu neque</p> 
                            </div>      
                        </div>
                    </div>
                </section>
                <div class="clear"></div>
                <section id="seven-section" class="third-section content-section ha-waypoint" >
                    <div id="map"></div>
                </section>
               <div class="clear"></div>
               <section id="address-section" class="address-section content-section ha-waypoint"  >
                    <div class="grid-container">
                        <div class="grid-25 tablet-grid-100 mobile-grid-100 grid-parent about-box" >
                            <div class="address-box one" data-lat="25.28100" data-log="51.53991">
                                <h4 class="location-name">Doha</h4>
                                <div class="address clearfix">
                                    <p class="clearfix"><i class="icon-home"></i><span class="text">63-64 Margaret St London, England</span></p>
                                    <p class="clearfix"><i class="icon-phone"></i><span class="text">+44 (0)20 7636 4842</span></p>
                                    <p class="clearfix"><i class="icon-mail"></i><span class="text">info@stereocreative.com</span></p>
                                    <div class="contact">Contact Us</div>
                                </div>
                                <div class="border"></div>
                                <div class="orange-arrow"></div>  
                            </div>      
                        </div>
                        <div class="grid-25 tablet-grid-100 mobile-grid-100 grid-parent about-box">
                            <div class="address-box two" data-lat="43.64480" data-log="-79.3982">
                                <h4 class="location-name">Toronto</h4>
                                <div class="address clearfix">
                                    <p class="clearfix"><i class="icon-home"></i><span class="text">63-64 Margaret St London, England</span></p>
                                    <p class="clearfix"><i class="icon-phone"></i><span class="text">+44 (0)20 7636 4842</span></p>
                                    <p class="clearfix"><i class="icon-mail"></i><span class="text">info@stereocreative.com</span></p>
                                    <div class="contact">Contact Us</div>
                                </div> 
                                <div class="border"></div>
                                <div class="orange-arrow"></div> 
                            </div>
                                
                        </div>
                        <div class="grid-25 tablet-grid-100 mobile-grid-100 grid-parent about-box">
                            <div class="address-box three">
                                <h4 class="location-name" data-lat="30.080293" data-log="31.340617">Cairo</h4>
                                <div class="address clearfix">
                                    <p class="clearfix"><i class="icon-home"></i><span class="text">63-64 Margaret St London, England</span></p>
                                    <p class="clearfix"><i class="icon-phone"></i><span class="text">+44 (0)20 7636 4842</span></p>
                                    <p class="clearfix"><i class="icon-mail"></i><span class="text">info@stereocreative.com</span></p>
                                    <div class="contact">Contact Us</div>
                                </div>
                                <div class="border"></div>
                                <div class="orange-arrow"></div> 
                            </div>
                        </div>
                        <div class="grid-25 tablet-grid-100 mobile-grid-100 grid-parent about-box">
                            <div class="address-box four" data-lat="45.50678" data-log="-73.55661">
                                <h4 class="location-name">Montreal</h4>
                                <div class="address clearfix">
                                    <p class="clearfix"><i class="icon-home"></i><span class="text">63-64 Margaret St London, England</span></p>
                                    <p class="clearfix"><i class="icon-phone"></i><span class="text">+44 (0)20 7636 4842</span></p>
                                    <p class="clearfix"><i class="icon-mail"></i><span class="text">info@stereocreative.com</span></p>
                                    <div class="contact">Contact Us</div>
                               </div>
                               <div class="orange-arrow"></div>
                            </div>      
                        </div>
                    </div>
               </section>
               <div class="clear"></div>
               <section id="contact-section" class="contact-section content-section ha-waypoint"  >
                    <div class="grid-container">
                        <div class="grid-100 tablet-grid-100 mobile-grid-100 grid-parent about-box" >
                            <form>
                                <input  class="contact" type="text" placeholder="Name"></text>
                                <input  class="contact" type="text" placeholder="Email"></text>
                                <input  class="contact" type="submit" value="Send"></text>
                                <input  class="contact big" type="text" placeholder="Message"></text>
                            </form>
                        </div>
                    </div>
               </section>
            </div>
            <script type='text/javascript'>
                    /* <![CDATA[ */
                    var fangohr_dynload = {"postType":"post","startPage":"1","maxPages":"<?php echo $wp_query->max_num_pages;;?>","nextLink":"<?php echo get_vogaye_next_link(get_next_posts_link( ''));?>","startPostPage":"1","nextPostPageLink":"<?php echo $first_post?>"};
                    /* ]]> */
                    </script>
<?php get_footer();?>