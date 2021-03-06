<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @package UnderStrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

get_header();

$container = get_theme_mod( 'understrap_container_type' );
?>
<?php if ( is_front_page() && is_home() ) 
	{
	 	get_template_part( 'global-templates/hero' );  
	}else{
		get_template_part( 'global-templates/custom-hero' ); 
	} 
?>
<div class="wrapper mb-5 pb-5" id="error-404-wrapper">

	<div class="<?php echo esc_attr( $container ); ?>" id="content" tabindex="-1">

		<div class="row">

			<div class="col-md-12 content-area" id="primary">

				<main class="site-main" id="main">

					<section class="error-404 not-found">
						<?php 
							$url=get_option_value('image-404');
							if( $url){
								$url404= $url['url'] ? $url['url'] : get_template_directory_uri().'/assets/images/404.png';
							}else{
								$url404= get_template_directory_uri().'/assets/images/404.png';
							}
						
						?>
					<div class="page404 text-center">
							<img src="<?php echo $url404?>" alt="">
						</div>

						<header class="page-header text-center py-5">
						
							<h1 class="page-title"><?php echo  get_option_value('text-404', 'Oops! That page can&rsquo;t be found.'); ?></h1>

						</header><!-- .page-header -->
						
					</section><!-- .error-404 -->

				</main><!-- #main -->

			</div><!-- #primary -->

		</div><!-- .row -->

	</div><!-- #content -->

</div><!-- #error-404-wrapper -->

<?php
get_footer();
