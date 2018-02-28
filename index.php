    <?php get_header(); ?>

    <!-- BEGIN SLIDER -->
   
    <!-- END SLIDER -->

    <div class="main">
      <div class="container">
        <!-- BEGIN SERVICE BOX -->   
        <div class="row service-box margin-bottom-40">
         
            
          <?php if ( have_posts() ) : ?>

          <?php /* Start the Loop */ ?>

          <?php while ( have_posts() ) : the_post(); ?>
          <div  id="post-<?php the_ID(); ?>" <?php post_class(""); ?>>
             <div class="service-box-heading">
                <?php the_title(); ?>
            </div>
            <p><?php the_content( __( 'Continue reading <span class="meta-nav">&rarr;</span>', 'twentytwelve' ) ); ?></p>
          </div>
          <?php the_excerpt(); ?>  
          <?php endwhile; ?>

          <?php else : ?>

          <?php endif; // end have_posts() check ?>
       </div>
        <!-- END SERVICE BOX -->

        <!-- BEGIN BLOCKQUOTE BLOCK -->   
        
        <!-- END BLOCKQUOTE BLOCK -->

        <!-- BEGIN RECENT WORKS -->
        
      </div>
    </div>
    <!-- END PRE-FOOTER -->
    <?php get_footer(); ?>