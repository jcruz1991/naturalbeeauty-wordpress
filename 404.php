<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package NaturalBeeauty
 */

get_header();
?>

<div id="primary" class="content-area">
	<main id="main" class="site-main">

		<section class="error-404 not-found">
			<div class="error-container">
				<header class="page-header">
					<h1>404</h1>
					<h2 class="page-title"><?php esc_html_e('Sorry, we can’t find the page you were looking for.', 'naturalbeeauty'); ?></h2>
				</header><!-- .page-header -->
				<div class="page-content">
					<p><?php esc_html_e('It looks like nothing was found at this location. Maybe try one of the links below or a search?', 'naturalbeeauty'); ?></p>
				</div><!-- .page-content -->
			</div><!-- .404-container -->

		</section><!-- .error-404 -->

	</main><!-- #main -->
</div><!-- #primary -->

<?php
get_footer();
