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
<section>
	<div class="container p-0 mt-5">
		<div class="row g-0">
			<div  class="col-md-12 order-md-2  d-flex " style="border-radius: 3rem;min-height: 40vh; background-size: cover; background-position: center; background-image: url('http://localhost:10014/wp-content/uploads/2022/08/Ucrania-2-2.png');">
				<div class="d-none d-md-block d-lg-block align-self-center ms-4 text-light pt-4 pe-4 pb-4 ps-4" style="background:#167d7c;border-radius: 1rem;font-style: normal;font-weight: 700;font-size: 56px;line-height: 32px;">
					<div class="rich">
						<h2 class="display-4"><strong class="text-white fw-bold rfs-20">Who we are.</strong></h2>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
<section class="mt-5 mb-5">
	<div class="container p-0 overflow-hidden my-2">
		<div class="row g-0">
			<div  class="col-lg-6 order-2 order-lg-2" style="border-radius: 3rem; min-height: 45vh; background-size: cover; background-position: center; background-image: url('http://localhost:10014/wp-content/uploads/2022/08/Bayless-in-africa-1.png');">

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
<section>
	<div class="container">
		<div class="row">
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
			<div class="col-md-6 px-3">
				<div >
					<div >
						<h2 class="about-title text-md-center"><?php the_field('vision_title'); ?></h2>

						<p class="paragraphs-about"><?php the_field('vision_text'); ?></p>
						
					</div>
				</div>
			</div><!-- /col -->
		</div>
	</div>
</section>
<section class="mt-4 mb-5">
	<div class="container">
		<div class="row">
			<div class="col-md-12 ">
				<div class="" style="">
					<img src="<?php the_field('jills_msg_image'); ?>" alt="jill message image">
				</div><!-- img -->
			</div><!-- /col -->
		</div>

		<div class="row mt-5">
			<div class="col-md-5 offset-md-1 text-center align-self-center">
				<div class=""> <img class="wp-image-78 img-fluid rounded-circle" src="http://localhost:10014/wp-content/uploads/2022/08/cares12-1.png" width="360" height="358" srcset="http://localhost:10014/wp-content/uploads/2022/08/cares12-1.png 360w, http://localhost:10014/wp-content/uploads/2022/08/cares12-1-300x298.png 300w, http://localhost:10014/wp-content/uploads/2022/08/cares12-1-150x150.png 150w" sizes="(max-width: 360px) 100vw, 360px" alt=""></div><!-- /lc-block -->
			</div><!-- /col -->
			<div class="col-md-5">
				<div class=" mt-5">
					<div  class="d-flex flex-column align-items-center">
						<h2 class="fw-bold"><?php the_field('jill_title'); ?></h2>

						<p class="my-4 paragraphs-about"><?php the_field('jills_message'); ?></p>
						<button class="btn btn-success mt-4 boton-verde">Read full message</button>
					</div>
				</div><!-- /lc-block -->
			</div><!-- /col -->
		</div>
	</div>
</section>
<?php endwhile; endif;  ?>
</div>          


<?php get_footer();
