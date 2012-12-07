<?php
/**
 * @package _s
 * @since _s 1.0
 */
?>

<div class="row-fluid blog-list">
	<article id="post-<?php the_ID(); ?>" <?php post_class(); ?> class="clearfix">

		<div class="span3">
			<a href="<?php the_permalink(); ?>">
				<?php the_post_thumbnail('thumb'); ?>
			</a>
		</div>	

		<div class="span9">

			<header class="entry-header">
				<h2 class="entry-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
			</header><!-- .entry-header -->


			<div class="entry-content">
				<div class="">
					<strong>Question: </strong><?php echo get_post_meta( get_the_ID(), 'sigr_question', true ); ?>
				</div>
				
				<?php wp_link_pages( 
									array( 
										'before' => '<div class="pagination post-inside-pages"><ul>', 
										'after' => '</ul></div>',
										'link_before'  => '<li>',
										'link_after'  => '</li>'
										 ) 
									); ?>

			</div><!-- .entry-content -->

			<footer class="entry-meta clearfix">

				<a href="<?php the_permalink(); ?>" class="btn pull-right">Get the answers <i class="icon-chevron-right"></i></a>

			</footer><!-- .entry-meta -->

		</div>


	</article><!-- #post-<?php the_ID(); ?> -->
</div>