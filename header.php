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

<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<div id="nb-page">
	<header id="nb-masthead" class="nb-site-header">
		<div class="nb-container nb-clearfix container">
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

			<nav id="nb-site-navigation" class="nb-main-navigation">
				<div class="toggle-bar"><span></span></div>
				<?php 
				wp_nav_menu( array( 
					'theme_location' => 'menu-1',
					'container_class' => 'nb-menu nb-clearfix' ,
					'menu_class' => 'nb-clearfix',
					'items_wrap' => '<ul id="%1$s" class="%2$s">%3$s</ul>',
				) ); 
				?>
			</nav><!-- #nb-site-navigation -->
		</div>
	</header><!-- #nb-masthead -->

	<div id="nb-content" class="nb-site-content nb-clearfix">