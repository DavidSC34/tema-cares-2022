<?php
/**
 * Template Name:  Home Page WBC Cares
 *

 */
// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

get_header();
?>


<section class="mb-5">
    <div class="vh-100" style="background:url('<?php the_field('hero_image'); ?>')  center / cover no-repeat;">
            <div class="container ">
                <div class="row vh-100 flex-column justify-content-between">
                    <div class="col-md-6 d-md-flex justify-content-end">
                        <div class="text-wrap" style="width: 6rem;"><h1 class="text-uppercase hero-title"><?php the_field('hero_title'); ?></h1></div>
                      
                    </div>
                    <div class="col-md-6 pb-3">
                        <div class="bg-help  d-flex flex-column justify-content-center align-items-center">
                          <p class="title-help"><?php the_field('hero_text_help'); ?></p>
                          <p class="subtitle-help px-1"><?php the_field('subtitle_hero_help'); ?></p>
                          <hr>
                          <a href="" class="btn-fuscia-100 btn-text-donar"><?php the_field('hero_button_text'); ?></a>
                        </div>
                    </div>
                </div>
            </div>
        
  
    </div>
    
</section>

<section class="my-5">
  <div class="container">
      <div class="row">
            <div class="col-md-6 text-center mb-3">
              <h2 class="section-why-title text-center"><?php the_field('why_title'); ?></h2>
              <p class="why-description"><?php the_field('why_description'); ?></p>           
              <div class="my-5">
                <a class="btn-aqua txt-btn-verde"><?php the_field('button_text'); ?></a>
              </div>
            </div>
            <div class="col-md-6 ">
              <img class="img-fluid" src="<?php the_field('why_image'); ?>" alt="why image">
            </div>
      </div>
  </div>
    
</section>
<section class="my-5" id="secc-home-news">
   
    <h2 class="news-title text-center"><?php the_field('lastest_news_title'); ?></h2>
    <div class="container">
          <div class="row row-cols-1 row-cols-md-2 row-cols-xl-3 g-4 mt-4 mb-4 ">
           
                      <?php 
                                   $args = array(  
                                    'post_type' => 'post',
                                    'post_status' => 'publish',
                                    'posts_per_page' => 2,
                                    'order' => 'ASC', 
                                );
                                $wp_query = new WP_Query( $args );
                                if( $wp_query->have_posts() ) : while( $wp_query->have_posts() ) : $wp_query->the_post();
                                  $post_categories = get_the_terms( get_the_ID(), 'category' );
                                  $categoria = $post_categories[0]->slug;
                                ?>             
                                <div class="col">
                                    
                                        <div class="card ">
                                            <a href="<?php the_permalink(); ?>">
                                                <img src="<?php the_post_thumbnail_url('full') ?>" class="card-img" alt="imagen">
                                              
                                                <div class="card-img-overlay d-flex flex-column justify-content-between">
                                                    
                                                    <div class="cat-storie align-self-end mt-2 me-2 text-capitalize <?php echo ($categoria ==='photos' ? 'invisible':'aa'); ?>">
                                                            <span class="me-2">
                                                            <?php echo ($categoria ==='news' ? '<i class="bi bi-newspaper"></i>':'<i class="bi bi-play-circle"></i>'); ?>
                                                              
                                                            </span>
                                                        <?php echo $categoria; ?>
                                                    </div>
                                                    <div class="bg-title-storie p-1 <?php echo ($categoria ==='photos' ? 'invisible':'aa'); ?>">
                                                        <h5 class="title-storie"><?php the_title(); ?></h5>

                                                    </div>
                                                        
                                                   
                                              
                                                </div>
                                            </a>
                                        </div>
                                       
                                </div> 
                               
                                <?php endwhile; endif; wp_reset_query(); ?>
                                <div class="col d-none d-md-block d-lg-block">
                                    <div class="d-flex flex-column justify-content-center align-items-center" style="border-radius: 10px;min-height: 38vh; background-size: cover; background-position: center; background-image: url('<?php echo get_template_directory_uri(); ?>/imgs/home/home-new-link.png');">
                                      <a href="#" class="btn-aqua txt-btn-verde">Learn more</a>
                                    </div>
                                </div>
                                <div class="col d-sm-block d-md-none text-center my-5">
                                    <a href="#" class="btn-aqua txt-btn-verde">Learn more</a>
                                </div>
          </div>
    </div>
</section>
<!-- section community -->
<section class="my-5" id="community-section">
  
    <h2 class="news-title  text-center"> <?php  the_field( "community_section_title" ); ?>  </h2>
    <div class="container">
          <div class="row row-cols-1 row-cols-md-2 row-cols-xl-3 g-4 mt-4 mb-4 ">
           
                      <?php 
                                   $args = array(  
                                    'post_type' => 'ambassador',
                                    'post_status' => 'publish',
                                    'posts_per_page' => 3,
                                    'order' => 'ASC', 
                                );
                                $wp_query = new WP_Query( $args );
                                if( $wp_query->have_posts() ) : while( $wp_query->have_posts() ) : $wp_query->the_post();
                                  
                                ?>             
                                <div class="col">
                                        <div class="card border-0 text-center" >
                                       

                                            <img src="<?php the_post_thumbnail_url('full') ?>" class="rounded-circle" alt="image community" >
                                         
                                            
                                            <div class="card-body ">
                                                    <h5 class="title-card"><?php the_title(); ?></h5>
                                                    <p class="subtitle-card"><?php the_field('charge'); ?></p>
                                                    <p><span class="me-2"><i class="bi bi-twitter"></i></span><span><i class="bi bi-linkedin"></i></span></p>
                                                  
                                            </div>
                                        </div>      
                                </div> 
                               
                                <?php endwhile; endif;  wp_reset_query(); ?>
                                <div class="col d-md-block d-lg-none text-center">
                                    <a href="#" class="btn-aqua txt-btn-verde"><?php the_field('button_text'); ?></a>
                                </div>
          </div>
    </div>
</section>
<section class="my-5">
  <h2 class="home-share-title text-center"><?php the_field('our_message_title'); ?></h2>
  <div class="container">
      <div class="row">
                  <div class="col-md-6 ">
                        <div class="row text-center text-md-start my-5">
                            <div class="col-md-8 d-md-flex">
                                <div class="p-3">
                                  <img class="img-fluid" src="<?php echo get_template_directory_uri(); ?>/imgs/home/twitter-icon.png" alt="twitter icon">
                                </div>
                                <div class="p-3">
                                  <p class="home-title-social">Follow us on Twitter!</p>
                                  <p class="home-desc-social mb-5"><?php the_field('twitter_description'); ?> </p>
                                  <a class="btn-verde home-btn-social" href="<?php the_field('twitter_link'); ?>">Follow us</a>
                                </div>
                            </div>
                            
                        </div>
                        <div class="row text-center text-md-start my-5">
                            <div class="col-md-8 d-md-flex">
                                <div class="p-3">
                                  <img class="img-fluid" src="<?php echo get_template_directory_uri(); ?>/imgs/home/instagram-icon.png" alt="instagra, icon">
                                </div>
                                <div class="p-3">
                                  <p class="home-title-social">Follow us on Instagram!</p>
                                  <p class="home-desc-social mb-5"><?php the_field('facebook_description'); ?> </p>
                                  <a class="btn-verde home-btn-social" href="<?php the_field('facebook_link'); ?>">Follow us</a>
                                </div>
                            </div>
                            
                        </div>
                        
                  </div>
                  <div  class="col-md-6 d-flex flex-column justify-content-center align-items-center" style="border-radius: 10px;min-height: 50vh; background-size: cover; background-position: center; background-image: url('<?php echo get_template_directory_uri(); ?>/imgs/home/share-section.png');">
                 
                  <div class="bg-afp-div pt-2 pe-4 pb-2 ps-4 mb-3" >                    
                            <p class="txt-share"> <?php the_field('campaign_title'); ?></p>
                      </div>
                                          
                      
                        <div class="my-3">
                          <a href=" <?php the_field('campaign_link'); ?>" class="btn-verde btn-txt">Download</a>
                        </div>
                  </div>
    </div>
            
  </div>
</section>


 
<?php get_footer();
