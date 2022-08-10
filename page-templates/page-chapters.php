<?php
/**
 * Template Name:  Page Chapters
 *

 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

get_header();
?>
<div class="py-6 ">
    <div class="container text-left">
        <h1 class="titulo-1"><?php the_title(); ?></h1>
        <!-- <p class="paragraph"><?php the_field('page_text'); ?></p> -->
        
  </div>
</div>

<div class="container">
    
        <div class="row row-cols-1 row-cols-md-3 row-cols-xl-4 g-4 mb-5">

            <?php 
                    $args = array(  
                        'post_type' => 'chapter',
                        'post_status' => 'publish',
                        'posts_per_page' => 15,
                        'order' => 'ASC', 
                    );
                    $wp_query = new WP_Query( $args );
                    if( $wp_query->have_posts() ) : while( $wp_query->have_posts() ) : $wp_query->the_post();
            ?>   
                
                
                    <div class="col ">
                        <div class="card  bg-white text-center" >
                            <div class="p-4">

                                <img src="<?php the_post_thumbnail_url('full') ?>" class="img-fluid rounded-circle" alt="image">
                            </div>
                            <div class="card-body">
                                    <p class="paragraph-2"><?php the_title(); ?></p>
                                    <p class="paragraph-chapter location-chapter"><?php the_field('location'); ?></p>
                                    <p class="paragraph-chapter contact-chapter">Contact information</p>
                                    <p class="paragraph-chapter paragraph-info"><?php the_field('email'); ?></p>
                                    <p class="paragraph-chapter paragraph-info"><?php the_field('phone'); ?></p>
                                    <div>
                                        <a href="<?php the_field('twitter'); ?>" class="social-links"><i class="bi bi-twitter"></i></a>
                                        <a href="<?php the_field('linkedin'); ?>" class="social-links"><i class="bi bi-linkedin"></i></a>
                                        <a href="<?php the_field('facebook'); ?>" class="social-links"><i class="bi bi-facebook"></i></a>
                                        <a href="<?php the_field('instagram'); ?>" class="social-links"><i class="bi bi-instagram"></i></a>
                                       
                                    </div>
                                    
                            </div>
                           
                        </div>
                    </div>
    
                <?php endwhile; endif; wp_reset_query(); ?>
        </div>
</div>          


<?php get_footer();
