<?php
/**
 * Template Name:  Page Affiliated Programs
 *

 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

get_header();
?>
<div class="py-6 ">
    <div class="container text-left">
        <h1 class="titulo-1"><?php the_title(); ?></h1>
        <p class="paragraph"><?php the_field('subtitle'); ?></p>
        
  </div>
</div>

<div class="container">
    
        <div class="row row-cols-1 row-cols-md-2 row-cols-xl-3 g-4">

            <?php 
                    $args = array(  
                        'post_type' => 'afiliated-program',
                        'post_status' => 'publish',
                        'posts_per_page' => -1,
                        'order' => 'ASC', 
                    );
                    $wp_query = new WP_Query( $args );
                    if( $wp_query->have_posts() ) : while( $wp_query->have_posts() ) : $wp_query->the_post();
            ?>   
                
                
                    <div class="col ">
                        <div class="card text-center">
                            <div class="card-header bg-card-afp">
                              <p class="title-card-afp"><span class="me-3"><i class="bi bi-person-circle"></i></span><?php the_title(); ?></p>
                            </div>
                            <div class="card-body">
                               
                                <p class="desc-card-afp"><?php the_field('description'); ?></p>
                                <a href="<?php the_field('affiliated_program_link'); ?>" target="_blank" class="btn btn-green-link">Go to website</a>
                            </div>
                            
                        </div>
                    </div>
    
                <?php endwhile; endif; wp_reset_query(); ?>
        </div>
        <div class="row mt-5 mb-5">

            <div  class="col-md-12 order-md-2  d-flex flex-column justify-content-center align-items-center" style="border-radius: 10px;min-height: 60vh; background-size: cover; background-position: center; background-image: url('<?php the_field('join_us_image'); ?>');">
                <div class="bg-afp-div pt-4 pe-4 pb-4 ps-4 mb-3" >                    
                       <p class="paragraph-afp text-center"><?php the_field('join_us_text'); ?></p>
                </div>
                                    
                <p class="bg-white paragraph-afp-2 pt-2 px-2"><?php the_field('join_us_description'); ?></p>
                <div class="my-3">
                    <a href="#" class="btn-fuscia btn-txt"><?php the_field('button_text_contact'); ?></a>
                </div>
            </div>
        </div>
</div>          


<?php get_footer();
