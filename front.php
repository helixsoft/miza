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
                                    <h3 class="big-title-1">Not Your Average Pitch<img src="<?php echo IMAGES?>/mic.png" alt="app-development"></h3>
                                </div>
                            </div>
                            <div class="grid-50 tablet-grid-100 mobile-grid-100 about-box margin-bottom-none margin-top-17 grid-parent" >
                                <div class="grid-40 tablet-grid-100 mobile-grid-100 about-box margin-bottom-none grid-parent margin-left-43">
                                    <div class="about-box">
                                        <h3 class="small-title-text"><img src="<?php echo IMAGES?>/icon2.png" alt="app-development" class="float-left margin-right-10"><span class="small-heading-1">Vision</span></h3>
                                        <p class="small-desc-1 a">Looking ahead is the key to our performance. There is no pride in perceiving the present as our canvas. The future is our playground; it’s infinite and optimistic.</p>
                                    </div>
                                </div>
                                <div class="grid-40 tablet-grid-100 mobile-grid-100 about-box margin-bottom-none grid-parent margin-left-60">
                                    <div class="about-box">
                                        <h3 class="small-title-text"><img  src="<?php echo IMAGES?>/icon3.png" alt="ui-design" class="float-left margin-right-10"><span class="small-heading-1">Integration</span></h3>
                                        <p class="small-desc-1 b">Your brand values are our top priority. Whether we’re than a new road or tapping into your vision, we’ll turn it into a successful masterpiece.</p>
                                    </div>
                                </div>
                                <div class="grid-40 tablet-grid-100 mobile-grid-100 about-box margin-bottom-none grid-parent margin-left-43">
                                    
                                    <div class="about-box">
                                        <h3 class="small-title-text a"><img src="<?php echo IMAGES?>/icon4.png" alt="brand-identity" class="float-left margin-right-10"><span class="small-heading-1">Innovation</span></h3>
                                        <p class="small-desc-1 c">Innovation is our lifeline; it runs through us continuously without a moment’s hesitation. Watch us bring your brand, your ideas, and your aspirations to life.</p>
                                    </div>
                                </div>
                                <div class="grid-40 tablet-grid-100 mobile-grid-100 about-box margin-bottom-none grid-parent margin-left-60" >  
                                    <div class="about-box">
                                        <h3 class="small-title-text a"><img src="<?php echo IMAGES?>/icon1.png" alt="consultancy" class="float-left margin-right-10"><span class="small-heading-1">Results</span></h3>
                                        <p class="small-desc-1 d">The fruits of your success are measured by the newly found reputation you’ve earned and transformed into online and offline results. It’s your time; let’s make it happen.</p>
                                    </div>
                                </div>
                            </div>
                           <div class="grid-100 tablet-grid-100 mobile-grid-100 about-box margin-bottom-none grid-parent">
                                <div class="about-box margin-bottom-none yellow-border">
                                    <p class="big-desc-1">As a Digital Reputation Management Agency, we transform your average brand into a colossal epidemic, to turn heads both online & off. Our principles and motives are not based on the ideals of our own success, rather the victory lies within yours and every brand we have the pleasure of working alongside.</p> 
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
                                <p class="big-desc-1 white">Carefully chosen and handpicked, we are our own most prized asset. The team works closely together, performing at optimum levels to integrate creativity from all aspects of our principles. Creative, development, design, and management teams are all vital to the outcome of your brand’s new sparkling image.</p> 
                            </div>
                       </div>
                    </div>
               </section>
            </div>
            <div class="nav-waypoint">
                <section id="third-section" class="third-section content-section ha-waypoint" >
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
                                        <a href="<?php echo site_url('/lab/')?>" class="button" style="margin-top: 14px;margin-left:14px;">View LAB</a>
                                    </div>
                                </div>
                            </div>      
                        </div>
                        <div class="grid-100 tablet-grid-100 mobile-grid-100 about-box margin-bottom-none grid-parent">
                            <div class="about-box margin-bottom-none yellow-border">
                                <p class="big-desc-1 white">We offer a wide range of services, all equipped and utilized for the purpose of creating an enhanced reputation for your brand. Keep up and stay ahead of the pack, put your brand on the map, or rather create the map and become the epitome of the definitive benchmark for all others. Strive to be the best.</p> 
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
                                <h3 class="left-title a">Process</h3>
                            </div>      
                        </div>
                         <div class="grid-60 tablet-grid-100 mobile-grid-100 about-box">
                            <div class="about-box">
                                <p class="left-disc">More than the way we do things, it’s our way of life. We live and breathe by these principles and that’s what makes our process so successful. Creative yet structured, that’s who we are.</p> 
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
                                        <span>It all starts with you. We want to get to know not just your brand, but also the brains behind it. After all, your work is an extension of who you are; there’s no better way around it. Your mission, your goals, your passion, and your dreams tell us a lot about where you’d like to land, and we’re merely the creative intelligence hub that gets you there.</span>
                                    </h3>

                                </div>
                            </div>
                            <div class="ss-row ss-small">
                                <div class="ss-left">
                                    <h3>
                                        <a>Collection</a>
                                        <span>Information collection is our stepping-stone. We seek to understand your true nature and the nature of your brand, through yourself, and our independent research.</span>
                                    </h3>
                                </div>
                                <div class="ss-right">
                                    <a class="ss-circle ss-circle-4"></a>
                                </div>
                            </div>
                            <div class="ss-row ss-small">
                                <div class="ss-left">
                                    <h3>
                                        <a>Analysis</a>
                                        <span>We investigate and evaluate where you are, where you need to be, & how we’ll get you there. Deep excavation and thorough understanding is key to our examination. We dig through the good, the bad, the ugly & everything in between.</span>
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
                                        <span>What it all means. We’ve become an information hub on the subject of your brand’s past, present, and future. We’ve collected bits and bytes of essential facts and figures that will now be pieced together to form a big picture. Identifying with the facts, the team comes together, creativity is set into gear, and we’re now in motion.</span>
                                    </h3>

                                </div>
                            </div>
                            <div class="ss-row ss-small">
                                <div class="ss-left">
                                    <h3>
                                        <a>Guidelines</a>
                                        <span>Limitations and borders are set to ensure the team is always on the same page. These parameters are made up of your preferences and our expertise. Once these lines are colored in, the big picture will begin to form.</span>
                                    </h3>
                                </div>
                                <div class="ss-right">
                                    <a class="ss-circle ss-circle-6"></a>
                                </div>
                            </div>
                            <div class="ss-row ss-small">
                                <div class="ss-left">
                                    <h3>
                                        <a>Application</a>
                                        <span>The canvas is just about ready for the world to see. This part of the process allows us to put every aspect of our work into action.</span>
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
                                        <span>At this stage, the end result is coming along nicely, and we’re working together closely to ensure that only the best of the best gets filtered through. Our closing stage does not end at delivery; it goes deeper than handing over a polished product. We stick around, measure results, and provide our clients with feedback and tweaks where necessary.</span>
                                    </h3>

                                </div>
                            </div>
                            <div class="ss-row ss-small">
                                <div class="ss-left">
                                    <h3>
                                        <a>Delivery</a>
                                        <span>This is by far our favorite part of the process. Our work is our pride and it’s evident no matter what side of the table you’re sitting on, smiles are all around</span>
                                    </h3>
                                </div>
                                <div class="ss-right">
                                    <a class="ss-circle ss-circle-8"></a>
                                </div>
                            </div>
                            <div class="ss-row ss-small">
                                <div class="ss-left">
                                    <h3>
                                        <a>Measuring Results </a>
                                        <span>How our work has performed and will continue to perform is a test we’re always eager to take. Improvement is not a weakness and we’re always staying ahead.</span>
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
                                <h3 class="left-title b">Find us</h3>
                            </div>      
                        </div>
                         <div class="grid-60 tablet-grid-100 mobile-grid-100 about-box">
                            <div class="about-box">
                                <p class="left-disc">Four offices in four cities do not stop us in reaching out even further. You don’t have to be in our time zone to fit our schedule; we’re always expanding our horizons. Drop by and say hello.</p> 
                            </div>      
                        </div>
                    </div>
                </section>
                <div class="clear"></div>
                <section id="seven-section" class="address-section content-section ha-waypoint" >
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
                            <div class="address-box three"  data-lat="30.080293" data-log="31.340617">
                                <h4 class="location-name">Cairo</h4>
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