<?php
/**
 * The template for displaying an offline page (You're offline)
 *
 * @link https://github.com/xwp/pwa-wp
 *
 * @package WordPress
 * @subpackage Twenty_Nineteen
 * @since 1.0.0
 */
// Prevent showing nav menus.
//add_filter( 'has_nav_menu', '__return_false' );
get_header();
?>

	<section id="primary" class="content-area">
		<main id="main" class="site-main">

			<div class="error-offline">
				<header class="page-header">
					<h1 class="page-title"><?php esc_html_e( 'Oops! It looks like you&#8217;re offline.', 'twentynineteen' ); ?></h1>
				</header><!-- .page-header -->

				<div class="page-content">
					<?php
					if ( function_exists( 'wp_service_worker_error_message_placeholder' ) ) {
						wp_service_worker_error_message_placeholder();
					}
					?>
				</div><!-- .page-content -->
			</div><!-- .error-offline -->

		</main><!-- #main -->
	</section><!-- #primary -->

<?php
get_footer();