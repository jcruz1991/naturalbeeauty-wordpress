<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link nbtps://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package NaturalBeeauty
 */

?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
<meta name="google-site-verification" content="j_F44aUvWgDabWrxzICeVx23nhZV3oiqfUY7-OhUwDk" />
<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-116056049-1"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-116056049-1');
</script>

<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<div id="nb-page">
	<header id="nb-masthead" class="nb-site-header">
		<div class="nb-container nb-clearfix container">
			<nav id="nb-site-navigation" class="nb-main-navigation">
				<?php 
				wp_nav_menu( array( 
					'theme_location' => 'menu-1',
					'container_class' => 'nb-menu nb-clearfix' ,
					'menu_class' => 'nb-clearfix',
					'items_wrap' => '<ul id="%1$s" class="%2$s">%3$s</ul>',
				) ); 
				?>
			</nav><!-- #nb-site-navigation -->

			<div id="nb-site-branding">
				<?php 
				if ( function_exists( 'has_custom_logo' ) && has_custom_logo() ) :
					the_custom_logo();
				else : 
					if ( is_front_page() ) : ?>
						<h1 class="nb-site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
					<?php else : ?>
						<p class="nb-site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></p>
					<?php endif; ?>
					<p class="nb-site-description"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'description' ); ?></a></p>
				<?php endif; ?>
			</div><!-- .site-branding -->

			<div id="woocommerce-site-navigation" class="nb-main-navigation">
				<?php 
					wp_nav_menu( array( 
						'theme_location' => 'menu-3',
						'container_class' => 'nb-menu nb-clearfix' ,
						'menu_class' => 'nb-clearfix',
						'items_wrap' => '<ul id="%1$s" class="%2$s">%3$s</ul>',
					) ); 
				?>
			</div>
			<div class="toggle-bar">
				<span></span>
				<span></span>
				<span></span>				
			</div>
		</div>
	</header><!-- #nb-masthead -->

	<div id="nb-content" class="nb-site-content nb-clearfix">
