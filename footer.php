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
                                    <form>
                                          <input  class="suscribe" type="text" placeholder="Your email here"></text>
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
</body>
</html>