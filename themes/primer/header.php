<?php
/**
 * The header for our theme.
 *
 * @package RED_Starter_Theme
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
	<head>
		<meta charset="<?php bloginfo( 'charset' ); ?>">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="profile" href="http://gmpg.org/xfn/11">
		<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

	<?php wp_head(); ?>

	</head>

	<body <?php body_class(); ?>>
		<div id="page" class="hfeed site">

			<a class="skip-link screen-reader-text" href="#content"><?php esc_html( 'Skip to content' ); ?></a>
			<header id="masthead" class="site-header" role="banner">

				<div class="site-branding">
					<h1 class="site-title screen-reader-text"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>

				</div><!-- .site-branding -->

				<nav id="site-navigation" class="main-navigation" role="navigation">
					<div class="menu-line">
					<a class="email" href="mailto:someone@example.com?Subject=Hello%20again" target="_top"><i class="far fa-envelope"></i>&nbsp;&nbsp;tito.lind@declan.nam</a>
					<a class="phone" href="tel:1234567"><i class="fas fa-phone"></i>&nbsp;&nbsp;123-333-5555</a>
					</div>
					<a class="homepage-link" href= "http://localhost:3000/primer"><img class="logo-image" src=<?php echo get_template_directory_uri()."/assets/images/Desktop_Logo/Logo@2x.png" ?> /> </a>
					<button onclick="myFunction()" class="menu-toggle" aria-controls="primary-menu" aria-expanded="false"><?php esc_html( 'Primary Menu' ); ?><img class="logo-button" src=<?php echo get_template_directory_uri()."/assets/images/Mobile_Assets/menu-three-lines-button-interface-symbol.png" ?> /></button>
					<?php wp_nav_menu( array( 'theme_location' => 'primary', 'menu_id' => 'primary-menu' ) ); ?>
				</nav><!-- #site-navigation -->
			</header><!-- #masthead -->
			<script defer src="https://use.fontawesome.com/releases/v5.0.8/js/all.js"></script>

			<div id="content" class="site-content">
