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
	<div id="nb-top-footer">
		<div class="nb-container">
			<div class="nb-top-footer nb-clearfix">
				<div class="container">
					<div class="row">
						<div class="col-7 col-sm-auto order-sm-1 col-md-auto order-md-1 align-self-sm-center"></div>
						<div class="col-5 col-sm-auto order-sm-2 col-md-auto order-md-3 ml-md-auto align-self-sm-center">
							<?php 
								wp_nav_menu( array( 
									'theme_location' => 'menu-2',
								) ); 
							?>
						</div>
						<div class="col-6 col-sm-auto order-sm-3 text-sm-right col-md-auto order-md-2 align-self-sm-center xs-push-top"></div>
						<div class="col-6 col-sm-auto col-md-auto order-sm-4 text-right text-sm-center align-self-sm-center const [propertyName] = arrayToDestruct;xs-push-top">
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
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</footer><!-- #colophon -->
</div><!-- #page -->

<div id="ht-back-top" class="ht-hide"><i class="fa fa-angle-up" aria-hidden="true"></i></div>
<?php wp_footer(); ?>

</body>
</html>

