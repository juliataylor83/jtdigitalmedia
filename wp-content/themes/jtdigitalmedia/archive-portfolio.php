<?php
/**
 * The template for displaying the archive portfolio page.
 *
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package JTDigitalMedia
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">


		<?php
			$post_id = 1858; //post id is id for newly created page with set featured image
			$queried_post = get_post($post_id);
			$src = wp_get_attachment_image_src(get_post_thumbnail_id($queried_post->ID), '') ;
			$thumb_id = get_post_thumbnail_id($post_id);
			?> <!--  This bit added to include featured image on archives page -->
			
			<div class="featured-image">
				<div class="featured-image-title">
					Portfolio
				</div>
				<img src="<?php echo $src[0]; ?>" class="img-responsive" />
			</div>

		<?php 
			global $query_string;
			query_posts( $query_string.'&order=ASC' );
			while ( have_posts() ) : the_post(); 
				$image_1 = get_field("image_1");
	    		$size = "full";
	    		$services = get_field('services');
				$link = get_field('site_link');
			?>

			<section class="portfolio-content">
				
				<aside class="portfolio-content-text">
					<h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
					<h5>Services: <?php echo $services; ?></h5>

					<?php the_excerpt(); ?>

					<h5><a href="<?php the_permalink(); ?>" class="button">View Project</a></h5>
				</aside>

				<div class="portfolio-content-images">
					<a href="<?php the_permalink(); ?>">
					<?php if($image_1) {
						echo wp_get_attachment_image( $image_1, $size );
					} ?>
					</a>
				</div>

			</section><!-- .portfolio-content -->

		<?php endwhile; // end of the loop ?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php

get_footer();