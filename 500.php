<?php
/**
 * The template for displaying 500 pages (internal server errors)
 *
 * @link https://github.com/xwp/pwa-wp
 *
 * @package WordPress
 * @subpackage Twenty_Nineteen
 * @since 1.0.0
 */

get_header();
?>

	<section id="primary" class="content-area">
		<main id="main" class="site-main">

			<div class="error-500 internal-server-error">
				<header class="page-header">
					<h1 class="page-title"><?php esc_html_e( 'Oops! Something went wrong.', 'twentynineteen' ); ?></h1>
				</header><!-- .page-header -->

				<div class="page-content">
					<p><?php esc_html_e( 'Something prevented the page from being rendered. Please try again.', 'twentynineteen' ); ?></p>
					<?php
					if ( function_exists( 'wp_service_worker_error_details_template' ) ) {
						wp_service_worker_error_details_template();
					}
					?>
				</div><!-- .page-content -->
			</div><!-- .error-500 -->

		</main><!-- #main -->
	</section><!-- #primary -->

<?php
get_footer();