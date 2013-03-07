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

				<div class="row entry-content">
					<div class="span12">
						<h2>All my recent posts</h2>

						<p>The list below display all the post I wrote, they are spread on many blogs (too many?). Some are in French, some in English. Enjoy</p>

						<?php ypfwp_display_yahoo_pipe(
									"http://pipes.yahoo.com/pipes/pipe.run?_id=be111f264562dade4584cd4185a64b73&_render=json",
									345600,
									"my-yahoo-pipe",
									20

							); ?>
					</div>

				</div>

			</div><!-- #content -->
		</div><!-- #primary .site-content -->

<?php get_footer(); ?>