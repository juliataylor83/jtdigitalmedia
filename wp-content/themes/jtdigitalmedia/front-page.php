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
						<ul class="featured-work-content">
							<?php query_posts('posts_per_page=3&post_type=portfolio&order=ASC'); ?>
					    		<?php while ( have_posts() ) : the_post(); 
					    			$image_1 = get_field("image_1");
					    			$size = "featured-image";
					    		?>

					    		<li class="individual-featured-work">
						    			<figure class="hovereffect">
						    				<a href="<?php the_permalink(); ?>">
						    					<?php echo wp_get_attachment_image($image_1, $size); ?>
						    				</a>
						    				<div class="overlay">
						    					<h5><?php the_title(); ?></h5>
						    					<a class="info" href="<?php the_permalink(); ?>">View Project</a>
						    				</div
						    			</figure>
					  			</li>

					  			<?php endwhile; ?> 
							<?php wp_reset_query(); ?>

							<div class="featured-work-content-button">
								<a class="button" href="<?php echo home_url(); ?>/portfolio">View My Portfolio</a>
							</div>
						</ul>
					</div>
				</section>

				<section class="quote">
					<div class="home-page-content">
						<div class="quote-content">
							<p>"It was a pleasure working with Julia throughout the design and development process for my website. Not only did she take the project all the way from start to finish, but she also worked with me on content, video editing and social media strategy. Plus, she handled all the hosting and email setup, so the whole process was very easy!"</p>
							<p>-Adam Watts, Founder & Director, Desert Drones Imagery</p>
						</div>
					</div>
				</section>

				<section class="featured-services">
					<div class="home-page-content">
						<h1>My Services</h1>
						<div class="featured-services-content">
							<div class="custom-development">
								<img src="http://jtdigitalmedia.staging.wpengine.com/wp-content/uploads/2016/11/custom-icon2.png" width="128" height="128" class="alignnone size-full wp-image-95" />
								<h3>Custom Development & Design</h3>
								<p>Using the popular WordPress content management system, my websites are custom built, so you're guaranteed to get a one-of-a-kind product.</p>
							</div>

							<div class="design-wordpress">
								<img src="http://jtdigitalmedia.staging.wpengine.com/wp-content/uploads/2016/11/design-icon2.png" width="128" height="128" class="alignnone size-full wp-image-93" />
								<h3>Design to WordPress Website</h3>
								<p>Already have a design in mind? Not sure how to make it into a functioning website? Not to worry, I can take your design and make it a reality.</p>
							</div>

							<div class="website-update">
								<img src="http://jtdigitalmedia.staging.wpengine.com/wp-content/uploads/2016/11/website-icon2.png" width="128" height="128" class="alignnone size-full wp-image-94" />
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
						<h1>Ready to Get Started? Get in touch today!</h1>
						<div class="home-page-content-contact">
							<p>If you have a question or want to talk web development / visual design, fill in the form below or send me an email at <a href="mailto:julia@jt-digitalmedia.com" target="_blank">julia@jt-digitalmedia.com</a></p>
						</div>
						<div class="contact-content">
							<?php echo do_shortcode("[ninja_form id=1]"); ?>
						</div>
					</div>
				</section>


		</main><!-- #main -->
	</div><!-- #primary -->

<?php

get_footer( 'home' );