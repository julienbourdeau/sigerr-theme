<?php
/**
 * @package _s
 * @since _s 1.0
 */
?>

<div class="row-fluid blog-list">
	<article id="post-<?php the_ID(); ?>" <?php post_class(); ?> class="clearfix">

		<header class="entry-header">
			<h1 class="entry-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h1>
		</header><!-- .entry-header -->

		<div class="entry-content">

			<div class="row">
				<div class="span12 answers-title">
					<div class="black-border visible-desktop"></div>
					<h2 class="text-centered">The Question</h2>
				</div>
			</div>

			<div class="row">
				<div class="span3">
					<a href="<?php the_permalink(); ?>">
						<?php the_post_thumbnail('large-thumb'); ?>
					</a>
				</div>	

				<div class="span9">

					<h3><?php echo get_post_meta( get_the_ID(), 'sigr_question', true ); ?></h3>

					<div>
						<?php echo get_post_meta( get_the_ID(), 'sigr_question_details', true ); ?>
					</div>
					
					<?php wp_link_pages( 
										array( 
											'before' => '<div class="pagination post-inside-pages"><ul>', 
											'after' => '</ul></div>',
											'link_before'  => '<li>',
											'link_after'  => '</li>'
											 ) 
										); ?>
				</div>
			</div>

			<div class="row" style="margin-top: 28px;">
				<div class="span12 answers-title">
					<div class="black-border visible-desktop"></div>
					<h2 class="text-centered">The Answer</h2>
				</div>
			</div>

			<div class="row">
				<div class="span12">

					<h3 class="entry-title"><a href="<?php the_permalink(); ?>"><?php echo get_post_meta( get_the_ID(), 'sigr_answer', true ); ?></a></h3>

					<?php the_content(); ?>

				</div>
			</div>

		</div><!-- .entry-content -->

			<footer class="entry-meta clearfix">

			</footer><!-- .entry-meta -->



	</article><!-- #post-<?php the_ID(); ?> -->
</div>