<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package NaturalBeeauty
 */

?>

</div><!-- #content -->

<footer id="nb-colophon" class="nb-site-footer">
	<div class="fluid-container">
		<div class="row">
			<div class="col-sm-12 col-md-8 footer-menu text-sm-center text-md-left">
			<?php 
					wp_nav_menu( array( 
						'theme_location' => 'menu-2',
						) ); 
				?>
			</div>

			<div class="col-sm-12 col-md-4 footer-icon text-sm-center text-md-right">
				<?php 
					if ( function_exists( 'has_custom_logo' ) && has_custom_logo() ) :
						the_custom_logo();
						else : 
							if ( is_front_page() ) : ?>
								<h1 class="nb-site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
								<?php else : ?>									<p class="nb-site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></p>
								<?php endif; ?>
								<p class="nb-site-description"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'description' ); ?></a></p>
				<?php endif; ?>
			</div>
			<div class="col-md-12 col-sm-12 text-sm-center text-md-left">
				<p class="footer-copy">
   					&copy; <?php echo date("Y"); echo " "; echo bloginfo('name'); ?>
				</p>
			</div>
		</div>
	</div>
</footer><!-- #colophon -->
</div><!-- #page -->

<div id="ht-back-top" class="ht-hide"><i class="fa fa-angle-up" aria-hidden="true"></i></div>
<?php wp_footer(); ?>

</body>
</html>

