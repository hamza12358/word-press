 <?php
/**
 * The template for displaying the footer
 *
 * Contains footer content and the closing of the #main and #page div elements.
 *
 * @package WordPress
 * @subpackage Twenty_Twelve
 * @since Twenty Twelve 1.0
 */
?>
 <!-- BEGIN FOOTER -->
    <div class="footer" style="margin-top: -75px;width: 116.1%;margin-bottom: -44px;margin-left: -98px;    margin-bottom: -57px;">
      <div class="container">
        <div class="row" style=" margin-right:200px!important; ">
          <!-- BEGIN COPYRIGHT -->
          <div class="col-md-6 col-sm-6 padding-top-10">
            2014 © Metronic Shop UI. ALL Rights Reserved. <a href="#">Privacy Policy</a> | <a href="#">Terms of Service</a>
          </div>
          <!-- END COPYRIGHT -->
          <!-- BEGIN PAYMENTS -->
          <div class="col-md-6 col-sm-6">
            <ul class="social-footer list-unstyled list-inline pull-right">
              <li><a href="#"><i class="fa fa-facebook"></i></a></li>
              <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
              <li><a href="#"><i class="fa fa-dribbble"></i></a></li>
              <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
              <li><a href="#"><i class="fa fa-twitter"></i></a></li>
              <li><a href="#"><i class="fa fa-skype"></i></a></li>
              <li><a href="#"><i class="fa fa-github"></i></a></li>
              <li><a href="#"><i class="fa fa-youtube"></i></a></li>
              <li><a href="#"><i class="fa fa-dropbox"></i></a></li>
            </ul>  
          </div>
          <!-- END PAYMENTS -->
        </div>
      </div>
    </div>
    <!-- END FOOTER -->

    <!-- Load javascripts at bottom, this will reduce page load time -->
    <!-- BEGIN CORE PLUGINS (REQUIRED FOR ALL PAGES) -->
    <!--[if lt IE 9]>
    <script src="../../assets/global/plugins/respond.min.js"></script>
    <![endif]--> 
    <script src="<?php echo get_template_directory_uri(); ?>/assets/global/plugins/jquery-1.11.0.min.js" type="text/javascript"></script>
    <script src="<?php echo get_template_directory_uri(); ?>/assets/global/plugins/jquery-migrate-1.2.1.min.js" type="text/javascript"></script>
    <script src="<?php echo get_template_directory_uri(); ?>/assets/global/plugins/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>      
    <script src="<?php echo get_template_directory_uri(); ?>/assets/frontend/layout/scripts/back-to-top.js" type="text/javascript"></script>
    <!-- END CORE PLUGINS -->

    <!-- BEGIN PAGE LEVEL JAVASCRIPTS (REQUIRED ONLY FOR CURRENT PAGE) -->
    <script src="<?php echo get_template_directory_uri(); ?>/assets/global/plugins/fancybox/source/jquery.fancybox.pack.js" type="text/javascript"></script><!-- pop up -->
    <script src="<?php echo get_template_directory_uri(); ?>/assets/global/plugins/carousel-owl-carousel/owl-carousel/owl.carousel.min.js" type="text/javascript"></script><!-- slider for products -->

    <!-- BEGIN RevolutionSlider -->
  
    <script src="<?php echo get_template_directory_uri(); ?>/assets/global/plugins/slider-revolution-slider/rs-plugin/js/jquery.themepunch.plugins.min.js" type="text/javascript"></script>
    <script src="<?php echo get_template_directory_uri(); ?>/assets/global/plugins/slider-revolution-slider/rs-plugin/js/jquery.themepunch.revolution.min.js" type="text/javascript"></script> 
    <script src="<?php echo get_template_directory_uri(); ?>/assets/global/plugins/slider-revolution-slider/rs-plugin/js/jquery.themepunch.tools.min.js" type="text/javascript"></script> 
    <script src="<?php echo get_template_directory_uri(); ?>/assets/frontend/pages/scripts/revo-slider-init.js" type="text/javascript"></script>
    <!-- END RevolutionSlider -->

    <script src="<?php echo get_template_directory_uri(); ?>/assets/frontend/layout/scripts/layout.js" type="text/javascript"></script>
    <script type="text/javascript">
        jQuery(document).ready(function() {
            Layout.init();    
            Layout.initOWL();
            RevosliderInit.initRevoSlider();
            Layout.initTwitter();
            //Layout.initFixHeaderWithPreHeader(); /* Switch On Header Fixing (only if you have pre-header) */
            //Layout.initNavScrolling(); 
        });
    </script>
    <!-- END PAGE LEVEL JAVASCRIPTS -->
    <?php wp_footer(); ?>
</body>
<!-- END BODY -->
</html>