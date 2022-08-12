<?php
/**
 * Template Name:  Join Page WBC Cares
 *

 */
// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

get_header();
?>

<section>
    <div class="py-6">
        <div class="container ">
            <h1 class="stories-title">Contact us</h1>
            <!-- <p class="paragraph"><?php the_field('subtitle'); ?></p>             -->
        </div>
    </div>
</section>


<section class="my-5">
  <div class="container">
      <div class="row">
            <div class="col-md-6 text-center mb-3">
            
            	
        <?php echo apply_shortcodes( '[contact-form-7 id="604" title="Contact form 1"]' ); ?>

            </div>
            <div class="col-md-6 ">
              <img class="img-fluid" src="<?php echo get_template_directory_uri(); ?>/imgs/home/share-section.png');" alt="join image">
            </div>
      </div>
  </div>
    
</section>


<section class="my-5">
  <h2 class="home-share-title text-center">SHARE OUR MESSAGE</h2>
  <div class="container">
      <div class="row">
                  
            <div  class="col-md-12 d-flex flex-column justify-content-center align-items-center" style="border-radius: 10px;min-height: 50vh; background-size: cover; background-position: center; background-image: url('<?php echo get_template_directory_uri(); ?>/imgs/home/share-section.png');">
            
                <div class="bg-afp-div pt-2 pe-4 pb-2 ps-4 mb-3" >                    
                        <p class="txt-share"> WBC Cares Anti-Bullying Campaign</p>
                </div> 
                <div class="my-3">
                    <a href="#" class="btn-verde btn-txt">Download</a>
                </div>
            </div>
      </div>
            
  </div>
</section>


 
<?php get_footer();
