<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package asd
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">
	<link href="https://fonts.googleapis.com/css?family=Bree+Serif" rel="stylesheet">


	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'asd' ); ?></a>

	<header id="masthead" class="site-header">
		<div class="three columns">
			<div class="site-branding">
			<h1 class='site title'><img src="<?php echo home_url(); ?>/wp-content/uploads/2018/06/hader-logo-white.png" alt="RAINMAKER">
			</h1>
		</div><!-- .site-branding -->
	</div>

	<div class="nine columns">
		<nav id="site-navigation" class="main-navigation">
			<div class="float-right">
				<button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false"><?php esc_html_e( 'Primary Menu', 'asd' ); ?></button>
				<?php
				wp_nav_menu( array(
					'theme_location' => 'menu-1',
					'menu_id'        => 'primary-menu',
				) );
				?>
			</div>
		</nav><!-- #site-navigation -->
	</div>
	</header><!-- #masthead -->


	<div id="content" class="site-content">
