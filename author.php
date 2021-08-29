<?php
/**
 * The template for displaying the author pages
 *
 * Learn more: https://codex.wordpress.org/Author_Templates
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

<div class="wrapper" id="author-wrapper">

	<div class="<?php echo esc_attr( $container ); ?>" id="content" tabindex="-1">

		<div class="row">

			<!-- Do the left sidebar check -->
			<?php get_template_part( 'global-templates/left-sidebar-check' ); ?>

			<main class="site-main" id="main">

				<header class="page-header author-header text-center">

					<?php
					if ( get_query_var( 'author_name' ) ) {
						$curauth = get_user_by( 'slug', get_query_var( 'author_name' ) );
					} else {
						$curauth = get_userdata( intval( $author ) );
					}
					?>

					
					<div class="card">
						
						<div class="card-header">
								
							<h1><?php echo esc_html__( 'About:', 'aleshatech' ) . ' ' . esc_html( $curauth->nickname ); ?></h1>
						</div>
						<div class="card-body">
							<div class="card-title  user-avatar ">
									<?php
										if ( ! empty( $curauth->ID ) ) {
											echo get_avatar( $curauth->ID );
										}
									?>
							</div>
							<div class="card-text">
									<?php if ( ! empty( $curauth->user_url ) || ! empty( $curauth->user_description ) ) : ?>
									<dl>
										<?php if ( ! empty( $curauth->user_url ) ) : ?>
											<dt><?php esc_html_e( 'Website', 'aleshatech' ); ?></dt>
											<dd>
												<a href="<?php echo esc_url( $curauth->user_url ); ?>"><?php echo esc_html( $curauth->user_url ); ?></a>
											</dd>
										<?php endif; ?>

										<?php if ( ! empty( $curauth->user_description ) ) : ?>
											<dt><?php esc_html_e( 'Profile', 'aleshatech' ); ?></dt>
											<dd><?php echo esc_html( $curauth->user_description ); ?></dd>
										<?php endif; ?>
									</dl>
									<?php endif; ?>
							</div>

							
						</div>
					</div>

				

					

					
					
				</header><!-- .page-header -->
				<!-- The Loop -->
				<h2 class="my-3"><?php echo esc_html__( 'Posts by', 'aleshatech' ) . ' ' . esc_html( $curauth->nickname ); ?>:</h2>
					<?php
					$i=0;
					if ( have_posts() ) {
						echo '<div class="my-2">';
						while ( have_posts() ) {
							the_post();
							echo '<p class="mb-1">';
								printf(
									'<a rel="bookmark" href="%1$s" title="%2$s %3$s">%3$s</a>',
									esc_url( apply_filters( 'the_permalink', get_permalink( $post ), $post ) ),
									esc_attr( __( 'Permanent Link:', 'aleshatech' ) ),
									get_the_title()
								);
								
							
							echo '</p>';
							echo '<p>';
							understrap_posted_on();
							echo '</p>';
							
						}
						echo '</div>';
					$i++;
					} else {
						get_template_part( 'loop-templates/content', 'none' );
					}
					?>
					<!-- End Loop -->

			</main><!-- #main -->

			<!-- The pagination component -->
			<div class="my-5 pb-5">
					<?php understrap_pagination(); ?>
			</div>

			<!-- Do the right sidebar check -->
			<?php get_template_part( 'global-templates/right-sidebar-check' ); ?>

		</div> <!-- .row -->

	</div><!-- #content -->

</div><!-- #author-wrapper -->

<?php
get_footer();
