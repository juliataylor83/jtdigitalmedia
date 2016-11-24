<?php
/**
 * The template for displaying the services page.
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


			<section class="services-content">
				
				<div id="services-content-text">
					<p>Tired of your out-dated, non-responive, un-searchable website? Or perhaps you're starting a new business and it's time to launce your online presence? If so, you've come to the right place!</p>
					<p>My websites include the newest visual design trends to ensure excellent User Experience (UX) and User Interface (UI). Plus, they are responsive (mobile- and tablet-ready) and utilize the lastest in Search Engine Optimization (SEO) best practices.</p>
					<p>I build websites using WordPress, a popular Content Management Systems (CMS), which will give you the ability to manage your own content and updates - no need to pay extra every time you want to make a change to your site! I'll make sure you are set up for success with clean code and solid design, and then I'll train you to manage your own content.</p>
				</div>

				<div id="services-content-services">
					<div class="custom-development-services">
						<figure class="services-icon1">
							<img src="http://jtdigitalmedia2:8888/wp-content/uploads/2016/11/custom-icon2.png" width="128" height="128" class="alignnone size-full wp-image-95" />
						</figure>
						<div class="services-text1">
							<h3>Custom Development & Design</h3>
							<p>Using the popular WordPress content management system, my websites are custom built, so you're guaranteed to get a one-of-a-kind product.</p>
							<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam ut ante ante. Integer sit amet interdum nibh. Phasellus aliquam mollis finibus. Nullam bibendum dignissim risus, vitae interdum risus cursus non.</p>
						</div>
					</div>

					<div class="design-wordpress-services">
						<figure class="services-icon2">
							<img src="http://jtdigitalmedia2:8888/wp-content/uploads/2016/11/design-icon2.png" width="128" height="128" class="alignnone size-full wp-image-93" />
						</figure>
						<div class="services-text2">
							<h3>Design to WordPress Website</h3>
							<p>Already have a design in mind? Not sure how to make it into a functioning website? Not to worry, I can take your design and make it a reality.</p>
							<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam ut ante ante. Integer sit amet interdum nibh. Phasellus aliquam mollis finibus. Nullam bibendum dignissim risus, vitae interdum risus cursus non.</p>
						</div>
					</div>

					<div class="website-update-services">
						<figure class="services-icon3">
							<img src="http://jtdigitalmedia2:8888/wp-content/uploads/2016/11/website-icon2.png" width="128" height="128" class="alignnone size-full wp-image-94" />
						</figure>
						<div class="services-text3">
							<h3>Website Update / Site Migration</h3>
							<p>Perhaps you already have a functioning website, but you want an update or re-design.  Maybe you want to migrate your existing website to WordPress to enable easy updates yourself.</p>
							<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam ut ante ante. Integer sit amet interdum nibh. Phasellus aliquam mollis finibus. Nullam bibendum dignissim risus, vitae interdum risus cursus non.</p>
						</div>
					</div>
				</div>

				<div id="services-content-maintenance">
					<h1>Maintenance & Support Packages</h1>
					<p>This is a little diddy about my maintenance and support packages. Importand because security and updates oh my! Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam ut ante ante. Integer sit amet interdum nibh. Phasellus aliquam mollis finibus. Nullam bibendum dignissim risus, vitae interdum risus cursus non.</p>
					<p>If you'd like more information on the maintenance and support packages, head on over to the <a href="/contact">CONTACT</a> page and get in touch.</p>
				</div>

				<div id="services-content-working">
					<h1>What's it like working with me?</h1>
					<div class="working-with-me">
						<div id="working-define">
							<h3>Define</h3>
							<i class="fa fa-list-alt fa-4x" aria-hidden="true"></i>
							<ul class="working-define-text">
								<li>Skype session to discuss vision & requirements</li>
								<li>Review technical specifications</li>
								<li>Determine timeline</li>
							</ul>
						</div>
						<div id="working-design">
							<h3>Design</h3>
							<i class="fa fa-magic fa-4x" aria-hidden="true"></i>
							<ul class="working-design-text">
								<li>Colors & fonts & layouts...oh my!</li>
								<li>Wireframing and photoshopping</li>
								<li>Review, amend & approve</li>
							</ul>
						</div>
						<div id="working-develop">
							<h3>Develop</h3>
							<i class="fa fa-code fa-4x" aria-hidden="true"></i>
							<ul class="working-develop-text">
								<li>Code: HTML, CSS, PHP, JaveScript, etc.</li>
								<li>Responsive Design</li>
								<li>Review, amend & approve</li>
							</ul>
						</div>
						<div id="working-deploy">
							<h3>Deploy</h3>
							<i class="fa fa-rocket fa-4x" aria-hidden="true"></i>
							<ul class="working-deploy-text">
								<li>Test, test, optimize & test</li>
								<li>GO LIVE</li>
								<li>Post-launch: 1 month support & training on how to manage your shiny new website</li>
							</ul>
						</div>
					</div>
				</div>

				<?php
				while ( have_posts() ) : the_post();

					the_content();

				endwhile; // End of the loop.
				?>

			</section><!-- .services-content -->


		</main><!-- #main -->
	</div><!-- #primary -->

<?php

get_footer();