<?php
/**
 * The template for displaying the contact page.
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
					<?php the_title(); ?>
				</div>
				<?php if ( has_post_thumbnail()) : the_post_thumbnail(); endif; ?>
			</div>


			<div class="contact-content">
				<div class="contact-content-text">
					<h1>Ready to Get Started? Get in touch today!</h1>
					<p>If you have a question or want to talk web development / visual design, fill in the form below or send me an email at <a href="mailto:julia@jt-digitalmedia.com" target="_blank">julia@jt-digitalmedia.com</a></p>
				</div>

				<?php
				while ( have_posts() ) : the_post();

					the_content();

				endwhile; // End of the loop.
				?>

			</div><!-- .contact-content -->

		</main><!-- #main -->
	</div><!-- #primary -->

<?php

get_footer();