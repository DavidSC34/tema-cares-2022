<?php
/**
 * Template Name:  Page About WBC Cares
 *

 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

get_header();
?>


<div class="container">
    <?php   
      if ( have_posts() ) : while ( have_posts() ) : the_post();
    ?>
<section class="section-margin">
	<div class="container p-0 mt-5">
		<div class="row g-0 ">
			<div  class="col-md-12 order-md-2  d-flex " style="border-radius: 3rem;min-height: 40vh; background-size: cover; background-position: center; background-image: url('<?php the_field('about_main_image'); ?>');">
				<div class="bg-about-main d-none d-md-block d-lg-block align-self-center ms-5">
					
						<h2 class="abount-main-title"><?php the_field('about_main_text'); ?></h2>
					
				</div>
			</div>
		</div>
	</div>
</section>
<section class="class="section-margin"">
	<div class="container p-0 overflow-hidden my-2">
		<div class="row g-0">
			<div  class="d-none d-md-block d-lg-block col-lg-6 order-2 order-lg-2" style="border-radius: 3rem; min-height: 45vh; background-size: cover; background-position: center; background-image: url('<?php the_field('story_section_image'); ?>');">

			</div>
			<div  class="d-sm-block d-md-none order-2 order-lg-2" style="border-radius: 3rem; min-height: 45vh; background-size: cover; background-position: center; background-image: url('<?php the_field('story_section_img_alt'); ?>');">

			</div>
			<div class="col-lg-6 order-1 order-lg-1 my-auto px-5 py-5">
				<div class="texto-desc">
					<div >
						<h1 class="about-title mb-4"><?php the_field('story_title'); ?></h1>
						<p class="paragraphs-about"><?php the_field('story_description'); ?></p>
						

					</div>
				</div>
			</div>
		</div>


	</div>
</section>
<section class="section-margin">
	<div class="container">
		<div class="row d-none d-md-block d-lg-block ">
			<div class="col-md-12">
				<div class="" style="">
					<img src="<?php the_field('mission_image'); ?>" alt="mission image">
				</div>
			</div><!-- /col -->
		</div>

		<div class="row mt-4">
			<div class="col-md-6 px-3">
				<div class=" ">
					<div >
						<h2 class="about-title text-md-center"><?php the_field('mission_title'); ?></h2>
						<p class="paragraphs-about text-start"><?php the_field('mission_text'); ?></p>
						
					</div>
				</div>
			</div><!-- /col -->
			<div class="col-sm-12 d-sm-block d-md-none">
					<img class="img-fluid" src="<?php the_field('mission_img_alt'); ?>" alt="mission image alt">
			</div>
			<div class="col-md-6 px-3">
				
					<div >
						<h2 class="about-title text-md-center"><?php the_field('vision_title'); ?></h2>
						<p class="paragraphs-about"><?php the_field('vision_text'); ?></p>						
					</div>
				
			</div><!-- /col -->
		</div>
	</div>
</section>
<section class="section-margin">
	<div class="container">
		<div class="row ">
			<div class="col-md-12 ">
				<div class="" style="">
					<img class="d-none d-md-block d-lg-block img-fluid" src="<?php the_field('jills_msg_image'); ?>" alt="jill message image">
					<img class="d-sm-block d-md-none img-fluid" src="<?php the_field('jills_msg_image_alt'); ?>" alt="jill message image alt">
				</div><!-- img -->
			</div><!-- /col -->
		</div>

		<div class="row mt-5">
			<div class="col-md-5 offset-md-1 text-center align-self-center">
				<div class="p-5 p-md-0"> 
					<img class="rounded-circle"src="<?php the_field('jill_image'); ?>" alt="jill image">
				</div>
			</div><!-- /col -->
			<div class="col-md-5">
				<div class=" mt-5">
					<div  class="d-flex flex-column align-items-center">
						<h2 class="about-title"><?php the_field('jill_title'); ?></h2>

						<p class="my-4 paragraphs-about"><?php the_field('jills_message'); ?></p>
						<button class="btn-aqua btn-about-text mt-4">Read full message</button>
					</div>
				</div><!-- /lc-block -->
			</div><!-- /col -->
		</div>
	</div>
</section>
<?php endwhile; endif;  ?>
</div>          


<?php get_footer();
