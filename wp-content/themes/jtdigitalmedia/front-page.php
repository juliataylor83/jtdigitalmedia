<?php
/**
 * The template for displaying the front page.
 *
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package JTDigitalMedia
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

			<section class="home-page">
				<figure class="home-page-image">
					<?php while ( have_posts() ) : the_post(); ?>
						<div class='homepage-hero'>
							<?php the_content(); ?>
							<p><span class="developer">Web Developer</span> | <span class="designer">Visual Designer</span><br><span class="custom">Custom WordPress Websites</span></p>
						</div>
					<?php endwhile; // end of the loop. ?>
				</figure><!-- .container -->
			</section><!-- .home-page -->

				<section class="featured-work">
					<div class="home-page-content">
						<h1>My Portfolio</h1>
						<div class="featured-work-content">
							<p>This is where the 3 boxes will go</p>
							<p>This is where the 3 boxes will go</p>
							<p>This is where the 3 boxes will go</p>
							<p>This is where the 3 boxes will go</p>
							<div class="featured-work-content-button">
								<a class="button" href="<?php echo home_url(); ?>/portfolio">View My Portfolio</a>
							</div>
						</div>
					</div>
				</section>

				<section class="quote">
					<div class="home-page-content">
						<div class="quote-content">
							<p>"Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam ut ante ante. Integer sit amet interdum nibh. Phasellus aliquam mollis finibus. Nullam bibendum dignissim risus, vitae interdum risus cursus non."</p>
							<p>-Adam Watts, CEO & Founder, Desert Drones Imagery</p>
						</div>
					</div>
				</section>

				<section class="featured-services">
					<div class="home-page-content">
						<h1>My Services</h1>
						<div class="featured-services-content">
							<div class="custom-development">
								<img src="http://jtdigitalmedia2:8888/wp-content/uploads/2016/11/custom-icon2.png" width="128" height="128" class="alignnone size-full wp-image-95" />
								<h3>Custom Development & Design</h3>
								<p>Using the popular WordPress content management system, my websites are custom built, so you're guaranteed to get a one-of-a-kind product.</p>
							</div>

							<div class="design-wordpress">
								<img src="http://jtdigitalmedia2:8888/wp-content/uploads/2016/11/design-icon2.png" width="128" height="128" class="alignnone size-full wp-image-93" />
								<h3>Design to WordPress Website</h3>
								<p>Already have a design in mind? Not sure how to make it into a functioning website? Not to worry, I can take your design and make it a reality.</p>
							</div>

							<div class="website-update">
								<img src="http://jtdigitalmedia2:8888/wp-content/uploads/2016/11/website-icon2.png" width="128" height="128" class="alignnone size-full wp-image-94" />
								<h3>Website Update / Site Migration</h3>
								<p>Perhaps you already have a functioning website, but you want an update or re-design.  Maybe you want to migrate your existing website to WordPress to enable easy updates yourself.</p>
							</div>

							<div class="featured-services-content-button">
								<a class="button" href="<?php echo home_url(); ?>/services">View My Services</a>
							</div

						</div>
					</div>
				</section>

				<section class="contact">
					<div class="home-page-content">
						<h1>Ready to Get Started?<br>Get in touch today!</h1>
						<div class="contact-content">
							<?php echo do_shortcode("[ninja_form id=1]"); ?>
						</div>
					</div>
				</section>


		</main><!-- #main -->
	</div><!-- #primary -->

<?php

get_footer( 'home' );