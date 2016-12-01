<?php
/**
 * The template for displaying the about page.
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


			<section class="about-content">

				<div class="about-content-top">
					<figure class="julia">
						<?php
						while ( have_posts() ) : the_post();

							the_content();

						endwhile; // End of the loop.
						?>
					</figure>
					<div class="about-content-top-text">
						<h4>Hi, I'm Julia.</h4>
						<p>I build websites using WordPress, a popular Content Management Systems (CMS), and focus on appearance, functionality, responsiveness and Search Engine Optimization</p>
						<p>Whether you’re looking to get your business online for the first time or perhaps you want a re-design, I’ve got the technical and design skills to take your online presence to the next level!</p>
						<div class="skills">
							<div class="technical-skills">
								<h6>Technical Skills:</h6>
								<ul>
									<li>HTML5</li>
									<li>CSS3</li>
									<li>JavaScript</li>
									<li>jQuery</li>
									<li>PHP</li>
									<li>Git & GitHub</li>
									<li>WordPress</li>
									<li>Responsive Design</li>
									<li>Google Analytics & SEO</li>
								</ul>
							</div>
							<div class="design-skills">
								<h6>Design Skills:</h6>
								<ul>
									<li>Adobe Photoshop, Illustrator & InDesign</li>
									<li>User Experience (UX)</li>
									<li>User Interface (UI)</li>
									<li>Video & Photo Editing</li>
									<li>Writing, Editing & Proofreading</li>
								</ul>
							</div>
						</div>
					</div>

					<div class="fun-facts-text">
						<h4>Fun Facts About Me</h4>
						<ul class="fun-facts">
							<li>I taught my Chocolate Labrador, Blue, to fetch beer from the fridge. Seriously...here's the <a href="https://www.youtube.com/watch?v=oPcobFRdbYQ" target="_blank">video</a>!</li>
							<li>I lived in Russia for a year – yes, it was cold, but an incredible experience.</li>
							<li>I am the proud owner of a Chuck Norris coffee mug.</li>
							<li>I deployed to Afghanistan...twice.</li>
						</ul>
					</div>
				</div>

				<div class="about-content-bottom">

				</div>

			</section><!-- .about-content -->

		</main><!-- #main -->
	</div><!-- #primary -->

<?php

get_footer();