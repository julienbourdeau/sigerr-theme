<?php
/*
Template Name: Home Page
*/
/**
 * The template for displaying all pages.
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

				<div class="row">
					<div class="span6">
						<h2>All my recent posts</h2>
						<?php ypfwp_display_yahoo_pipe(
									"http://pipes.yahoo.com/pipes/pipe.run?_id=be111f264562dade4584cd4185a64b73&_render=json",
									86400,
									"my-yahoo-pipe",
									20

							); ?>
					</div>

					<div class="span6">

						<h2>My projects</h2>
						<?php //the_widget(''); ?>

						<?php while ( have_posts() ) : the_post(); ?>
							<h2><?php the_title(); ?></h2>
							<?php the_content(); ?>
						<?php endwhile; // end of the loop. ?>

					</div>
				</div>

			</div><!-- #content -->
		</div><!-- #primary .site-content -->

<?php get_footer(); ?>