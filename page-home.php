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

				<?php while ( have_posts() ) : the_post(); ?>

					here goes the content

				<?php endwhile; // end of the loop. ?>

			</div><!-- #content -->
		</div><!-- #primary .site-content -->

<?php get_footer(); ?>