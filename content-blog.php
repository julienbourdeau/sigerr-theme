<?php
/**
 * @package _s
 * @since _s 1.0
 */
?>

<div class="row-fluid blog-list">
	<article id="post-<?php the_ID(); ?>" <?php post_class(); ?> class="clearfix">

		<div class="span3 date">
			<?php printf( '<time class="entry-date" datetime="%1$s" pubdate>%2$s</time>',
					esc_attr( get_the_date( 'c' ) ),
					esc_html( get_the_date() )
				); ?>
		</div>	

		<div class="span9">

			<header class="entry-header">
				<h2 class="entry-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
			</header><!-- .entry-header -->


			<div class="entry-content">
				<div class="visible-desktop visible-tablet">
					<?php the_excerpt(); ?>
				</div>
				<div class="visible-phone">
					<?php echo substr(get_the_excerpt(), 0, 100); ?>[...]
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

			<footer class="entry-meta">
				<div class="entry-meta-left">

				<?php

					/* translators: used between list items, there is a space after the comma */
					$tags = get_the_tags();

					if ( $tags ) {
						foreach ($tags as $tag){
							$tag_link = get_tag_link($tag->term_id);
									
							$html .= "<a href='{$tag_link}' title='{$tag->name} Tag' class='{$tag->slug}'>";
							$html .= "{$tag->name}</a>";
						}
					}
					
					if ( '' != $tags ) {
						//echo "Tags: ";
						foreach ($tags as $tag):
							$tag_link = get_tag_link($tag->term_id);
							echo " <a href='{$tag_link}' title='{$tag->name} Tag' class='{$tag->slug}' rel='tag'>";
							echo "	<span class='label label-info'> {$tag->name} </span>";
							echo "</a> ";
						endforeach;
					}

				?>

				</div>

			</footer><!-- .entry-meta -->

		</div>


	</article><!-- #post-<?php the_ID(); ?> -->
</div>