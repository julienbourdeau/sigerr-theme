<?php
/**
 * The template for displaying Search Results pages.
 *
 * @package _s
 * @since _s 1.0
 */

get_header(); ?>

		<section id="primary" class="site-content span12">
			<div id="content" role="main">

			<?php if ( have_posts() ) : ?>

				<header class="page-header">
					<h1 class="page-title"><?php printf( __( 'Search Results for: %s', 'sigerr' ), '<span>' . get_search_query() . '</span>' ); ?></h1>
				</header>

				<?php sigerr_content_nav( 'nav-above' ); ?>

				<?php /* Start the Loop */ ?>
				<?php while ( have_posts() ) : the_post(); ?>

					<?php get_template_part( 'content', 'blog' ); ?>

				<?php endwhile; ?>

				<?php sigerr_content_nav( 'nav-below' ); ?>

			<?php else : ?>

				<?php get_template_part( 'no-results', 'search' ); ?>

			<?php endif; ?>

			<hr />

			<div id="" class="row">
				<div class="span8 offset2">
					<header class="entry-header">
						<h1 class="entry-title"><?php _e( 'Try again?', 'sigerr' ); ?></h1>
					</header>

					<div class="entry-content">

						<?php get_search_form(); ?>

					</div>
				</div>
			</div>


			</div><!-- #content -->
		</section><!-- #primary .site-content -->

<?php //get_sidebar(); ?>
<?php get_footer(); ?>