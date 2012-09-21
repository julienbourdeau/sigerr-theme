<?php
/**
 * The template for displaying search forms in _s
 *
 * @package _s
 * @since _s 1.0
 */
?>
	<form method="get" id="searchform" action="<?php echo esc_url( home_url( '/' ) ); ?>" role="search">
		<label for="s" class="assistive-text"><?php _e( 'Search', 'sigerr' ); ?></label>
		<input type="text" class="field span8" name="s" id="s" placeholder="<?php esc_attr_e( 'Type your query and hit Enter', 'sigerr' ); ?>" />
		<input type="submit" class="submit" name="submit" id="searchsubmit" value="<?php esc_attr_e( 'Search', 'sigerr' ); ?>" />
	</form>
