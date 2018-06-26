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
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.1.0/css/all.css" integrity="sha384-lKuwvrZot6UHsBSfcMvOkWwlCMgc0TaWr+30HWe3a4ltaBwTZhyTEggF5tJv8tbt" crossorigin="anonymous">
	<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,400i,700,800" rel="stylesheet">


	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'asd' ); ?></a>

	<header id="masthead" class="site-header">
		<div class="three columns">
			<div class="site-branding">
			<a href="<?php echo home_url(); ?>"><h1 class='site title'>The Rainmaker Project</h1><img class="white" src="<?php echo home_url(); ?>/wp-content/uploads/2018/06/large-logo.png" alt="RAINMAKER"></a>
			<a href="<?php echo home_url(); ?>"><img class="color" src="<?php echo home_url(); ?>/wp-content/uploads/2018/06/rainmaker-logo-color.png" alt="RAINMAKER"></a>
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
