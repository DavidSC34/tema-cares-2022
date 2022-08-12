<?php
/**
 * Template Name:  Page Stories WBC Cares
 *

 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

get_header();
?>
<section>
    <div class="py-6">
        <div class="container ">
            <h1 class="stories-title"><?php the_title(); ?></h1>
            <p class="paragraph"><?php the_field('subtitle'); ?></p>            
        </div>
    </div>
</section>

<section>
            <div class="container">
            
                        <div class="row ">
                            <div class="col-xl-12">
                                <div class="stories-menu d-flex ">
                                        <button data-filter="*" class="btn btn-outline-success me-5 text-capitalize">all</button>
                                        <?php $cats = get_terms('category');
                                        foreach ($cats as $cat){
                                        ?>
                                        <button data-filter=".<?php echo $cat->slug; ?>" class="btn btn-outline-success me-5 text-capitalize"><?php echo $cat->slug; ?></button>
                                        <?php } ?>
                                    </div>
                                <hr>
                            </div>                             
                        </div>
                        
            </div> 
            <div class="container">
                        <div class="row row-cols-1 row-cols-md-2 row-cols-xl-3 g-4 mt-4 mb-4 grid">
                                <?php 
                                   $args = array(  
                                    'post_type' => 'post',
                                    'post_status' => 'publish',
                                    'posts_per_page' => 15,
                                    'order' => 'ASC', 
                                );
                                $wp_query = new WP_Query( $args );
                                if( $wp_query->have_posts() ) : while( $wp_query->have_posts() ) : $wp_query->the_post();
                                    
                                ?>             
                                <div class="col grid-item  
                                    <?php
                                 
                                    $post_categories = get_the_terms( get_the_ID(), 'category' );
                                    $categoria = $post_categories[0]->slug;
                                    foreach($post_categories as $cat){
                                        echo $cat->slug.' ';
                                     }
                                   
                                    ?>">
                                    
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
                               
                                <?php endwhile; endif; wp_reset_postdata(); ?>
                        </div>  
            </div>
              
       
</section>
<script src="https://unpkg.com/isotope-layout@3/dist/isotope.pkgd.min.js"></script>
        
<script>
document.addEventListener('DOMContentLoaded', (event) => {

    var elem = document.querySelector('.grid'); 
   var iso = new Isotope( elem, {
       // options
       itemSelector: '.grid-item',
       percentPosition: true,
        masonry: {
            columnWidth: ".grid-item"
        }
       
     });

    // let buttonNews = document.querySelector('[data-filter="news"]');
     let menuStories = document.querySelector('.stories-menu')
     console.log(menuStories);
     menuStories.addEventListener('click',(eve)=>{
        let filterValue = eve.target.getAttribute('data-filter');
        iso.arrange({ filter: filterValue });
     })

    
    
     
 });
</script>

<?php get_footer();
