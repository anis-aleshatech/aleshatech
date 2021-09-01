<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
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

<div class="wrapper" id="index-wrapper">

	<div class="<?php echo esc_attr( $container ); ?>" id="content" tabindex="-1">

		<div class="row">

			<!-- Do the left sidebar check and opens the primary div -->
			<?php get_template_part( 'global-templates/left-sidebar-check' ); ?>
	
			<main class="site-main" id="main"> 
				<div class="row">
					<?php
						if ( have_posts() ) {
							// Start the Loop.
							while ( have_posts() ) {
								$layout=get_option_value('blog-layout');

								if(	$layout==3){
									$blogLayout="col-md-4";
								}else if($layout==2){
									$blogLayout="col-md-6";
								}else{
									$blogLayout="col-md-12";
								}

								?>
									
										<div class="<?php echo $blogLayout; ?> mt-2">
										<?php the_post();?>

								<?php get_template_part( 'loop-templates/content', get_post_format() );?>
								</div>
								
								<?php
							}
						} else {
							get_template_part( 'loop-templates/content', 'none' );
						}
						?>

				</div>
			</main><!-- #main -->
			<!-- The pagination component -->
			<div class="my-5 pb-5">
					<?php understrap_pagination(); ?>
			</div>

			<!-- Do the right sidebar check -->
			<?php get_template_part( 'global-templates/right-sidebar-check' ); ?>

		</div><!-- .row -->

	</div><!-- #content -->

</div><!-- #index-wrapper -->

<?php
get_footer();
