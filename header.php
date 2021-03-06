<?php
/**
 * The Header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="main">
 *
 * @package _s
 * @since _s 1.0
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>" />
<meta name="viewport" content="width=device-width" />
<title><?php
	/*
	 * Print the <title> tag based on what is being viewed.
	 */
	global $page, $paged;

	wp_title( '|', true, 'right' );

	// Add a page number if necessary:
	if ( $paged >= 2 || $page >= 2 )
		echo ' | ' . sprintf( __( 'Page %s', 'sigerr' ), max( $paged, $page ) );

	?></title>
<link rel="profile" href="http://gmpg.org/xfn/11" />
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
<!--[if lt IE 9]>
<script src="<?php echo get_template_directory_uri(); ?>/js/html5.js" type="text/javascript"></script>
<![endif]-->

<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="hfeed site">
	<?php do_action( 'before' ); ?>
	<header id="masthead" class="site-header" role="banner">
		<div class="container">

			<div class="row">
				<div class="span12">
					<h1 class="site-title"><a href="<?php echo home_url( '/' ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
				</div>
			</div>

			<div class="row">
				<div class="span12">
					<nav role="navigation" class="site-navigation main-navigation">
						<h1 class="assistive-text"><?php _e( 'Menu', 'sigerr' ); ?></h1>
						<div class="assistive-text skip-link"><a href="#content" title="<?php esc_attr_e( 'Skip to content', 'sigerr' ); ?>"><?php _e( 'Skip to content', 'sigerr' ); ?></a></div>

						<?php wp_nav_menu( 
											array( 	'theme_location' 	=> 'primary',
													'menu_class'		=> 'nav nav-pills',
													'container_class' => 'menu-access-container hidden-phone',
												 )
										 ); ?>
					</nav>
				</div>
			</div>

		</div>
	</header><!-- #masthead .site-header -->

	<div id="main" class="">
		<div class="container">
			<div class="row">