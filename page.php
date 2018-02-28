<?php get_header(); ?>

   <div class="col-md-4 col-sm-4">
            <div class="service-box-heading">
              <em><i class="fa fa-location-arrow blue"></i></em>
              <span>Multipurpose Template</span>
             <?php while ( have_posts() ) : the_post(); ?>
        <?php get_template_part( 'content', 'page' ); ?>
        <?php comments_template( '', true ); ?>
      <?php endwhile; // end of the loop. ?>            </div>
            
     </div>
    <!-- END PRE-FOOTER -->
     <?php get_footer(); ?>