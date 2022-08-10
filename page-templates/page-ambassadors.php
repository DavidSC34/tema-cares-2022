<?php
/**
 * Template Name:  Page Ambassadors
 *

 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

get_header();
?>
<div class="py-6 ">
    <div class="container text-left">
        <h1 class="titulo-1"><?php the_title(); ?></h1>
        <p class="paragraph"><?php the_field('page_text'); ?></p>
        
  </div>
</div>

<div class="container">
    
        <div class="row row-cols-1 row-cols-md-2 row-cols-xl-3 g-4 mb-5">

            <?php 
                    $args = array(  
                        'post_type' => 'ambassador',
                        'post_status' => 'publish',
                        'posts_per_page' => 15,
                        'order' => 'ASC', 
                    );
                    $wp_query = new WP_Query( $args );
                    if( $wp_query->have_posts() ) : while( $wp_query->have_posts() ) : $wp_query->the_post();
            ?>   
                
                
                    <div class="col ">
                        <div class="card p-3 bg-white">
                            <div class="row">
                                    <div class="col-md-6 text-center">
                                        <img src="<?php the_post_thumbnail_url('full') ?>" class="img-fluid rounded-circle" alt="...">
                                    </div>
                                    <div class="col-md-6">
                                        <div class="card-body text-center">
                                            <h5 class="title-card"><?php the_title(); ?></h5>
                                            <p class="subtitle-card"><?php the_field('charge'); ?></p>
                                            <p><span class="me-2"><i class="bi bi-twitter"></i></span><span><i class="bi bi-linkedin"></i></span></p>
                                           
                                        </div>
                                    </div>
                            </div>
                           
                           
                        </div>
                    </div>
    
                <?php endwhile; endif; wp_reset_query(); ?>
        </div>
</div>          


<?php get_footer();
