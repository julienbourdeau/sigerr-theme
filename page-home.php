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

				<div class="row-fluid entry-content">

					<div class="span12">

						<?php while ( have_posts() ) : the_post(); ?>
						
							<?php the_content(); ?>
						
						<?php endwhile; // end of the loop. ?>

					</div>

				</div>

				<div class="row-fluid">
					
					<div class="span7">

						<h2>Lastest posts from my blogs</h2>

						<?php 
							wprss_display_feed_items( $args = array(
								'links_before' 	=> '<ul class="post-list">',
								'links_after' 	=> '</ul>',
								'link_before' 	=> '<li class="clearfix">',
								'link_after' 	=> '</li>',
							)); 
						?>
						
					</div>

					<div class="span4 offset1">
						
						<?php echo do_shortcode('[twitter-widget username="julienbourdeau" before_widget="<div class=\'widget_twitter\'>" after_widget="</div>" before_title="<h3>" after_title="</h3>" errmsg="Uh oh!" hiderss="true" hidereplies="true" targetBlank="true" showXavisysLink="0" items="3" showts="60" showintents="false" showfollow="false"]Lastest from Twitter[/twitter-widget]'); ?> 

					</div>
				</div>


			</div><!-- #content -->
		</div><!-- #primary .site-content -->

<?php get_footer(); ?>