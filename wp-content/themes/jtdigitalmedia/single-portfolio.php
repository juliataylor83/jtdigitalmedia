<?php
/**
 * The template for displaying single portfolio pages.
 *
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package JTDigitalMedia
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

			<div class="featured-image">
				<div class="featured-image-title">
					Portfolio
				</div>
				<?php if ( has_post_thumbnail()) : the_post_thumbnail(); endif; ?>
			</div>

		<?php while ( have_posts() ) : the_post();

			$services = get_field('services');
			$link = get_field('site_link');
			$image_1 = get_field ('image_1');
			$image_2 = get_field ('image_2');
			$image_3 = get_field ('image_3');
			$image_4 = get_field ('image_4');
			$image_5 = get_field ('image_5');
			$size = "full"; ?>

			<section class="portfolio-content">
				
				<aside class="portfolio-content-text">
					<h2><?php the_title(); ?></h2>
					<h5>Services: <?php echo $services; ?></h5>

					<?php the_content(); ?>
					
					<ul class="portfolio-content-buttons">
						<li><h5><a href="<?php echo $link; ?>" target="_blank" class="button">Visit Live Site</a></h5></li>
						<li><h5><a href="/portfolio" class="button">Back to Portfolio</a></h5></li>
					</ul>

				</aside>

				<div class="portfolio-content-images">
					<?php if($image_1) {
						echo wp_get_attachment_image( $image_1, $size );
					} ?>

					<?php if($image_2) {
						echo wp_get_attachment_image( $image_2, $size );
					} ?>

					<?php if($image_3) {
						echo wp_get_attachment_image( $image_3, $size );
					} ?>

					<?php if($image_4) {
						echo wp_get_attachment_image( $image_4, $size );
					} ?>

					<?php if($image_5) {
						echo wp_get_attachment_image( $image_5, $size );
					} ?>
				</div>

			</section><!-- .portfolio-content -->

		<?php endwhile; // end of the loop ?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php

get_footer();