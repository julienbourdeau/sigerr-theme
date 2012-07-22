<?php
/**
 * @package _s
 * @since _s 1.0
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

	<header class="entry-header">
		<h1 class="entry-title"><?php the_title(); ?></h1>
	</header><!-- .entry-header -->


	<?php sigerr_content_extrabuttons() ?>


	<div class="entry-content">
		<?php the_content(); ?>
		<?php wp_link_pages( 
							array( 
								'before' => '<div class="pagination post-inside-pages"><ul>', 
								'after' => '</ul></div>',
								'link_before'  => '<li>',
								'link_after'  => '</li>'
								 ) 
							); ?>
	</div><!-- .entry-content -->

	<?php sigerr_content_extrabuttons() ?>

	<footer class="entry-meta">
		<div class="row">
			<div class="span5">

			<?php

				/* translators: used between list items, there is a space after the comma */
				$category_list = get_the_category_list( __( ', ', 'sigerr' ) );
				$tags = get_tags();

				foreach ($tags as $tag){
					$tag_link = get_tag_link($tag->term_id);
							
					$html .= "<a href='{$tag_link}' title='{$tag->name} Tag' class='{$tag->slug}'>";
					$html .= "{$tag->name}</a>";
				}

				sigerr_posted_on();
				
				echo __(" in ", 'sigerr') . $category_list ;
				
				if ( '' != $tags ) {
					echo "<br />Tags: ";
					foreach ($tags as $tag):
						$tag_link = get_tag_link($tag->term_id);
						echo " <a href='{$tag_link}' title='{$tag->name} Tag' class='{$tag->slug}' rel='tag'>";
						echo "	<span class='label label-info'> {$tag->name} </span>";
						echo "</a> ";
					endforeach;
				}

			?>

			</div>

			<div class="span3">
				<?php echo really_simple_share_publish(); ?>
			</div>
		</div>

	</footer><!-- .entry-meta -->
</article><!-- #post-<?php the_ID(); ?> -->
