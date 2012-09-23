<?php
/*
Template Name: About Page
*/
/**
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
 *
 * @package _s
 * @since _s 1.0
 */

get_header(); ?>

		<div id="primary" class="site-content span12 full-width">
			<div id="content" role="main">

				<header class="page-header">
					<h1 class="page-title"><?php the_title(); ?></h1>
				</header><!-- .entry-header -->

				<div class="row-fluid">
					<div class="span8">
						<?php the_title(); ?>
						<?php the_content(); ?>
					</div>

					<div class="span4">

						<div id="contactsquare" class="">
							<h2 class="no-margin">Contact Me</h2>
							<a id="my-email-link" href="mailto:julien@sigerr.org">julien@sigerr.org</a>

							<div class="contact-links">
								<a id="linkedin" class="social_link" href="http://www.linkedin.com/in/julienbourdeau"></a>
								<a id="googleplus" class="social_link" href="https://plus.google.com/u/0/106765980258232747369/posts"></a>
								<a id="twitter" class="social_link" href="http://twitter.com/julienbourdeau"></a>
								<a id="tumblr" class="social_link" href="http://1670mm.tumblr.com/"></a>
								<a id="github" class="social_link" href="http://github.com/julienbourdeau/"></a>
							</div>
						</div>

					</div>
				</div>


				<div class="row-fluid">
					<div class="span12">
						<h2>My Resume</h2>
						[gview file="http://sigerr.org/cv/CV-julien-bourdeau.pdf"]
					</div>
				</div>


			</div><!-- #content -->
		</div><!-- #primary .site-content -->

<?php get_footer(); ?>
