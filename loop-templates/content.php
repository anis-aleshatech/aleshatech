<?php
/**
 * Post rendering content according to caller of get_template_part
 *
 * @package UnderStrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;
?>

<article <?php post_class(); ?> id="post-<?php the_ID(); ?>">
	<div class="card p-2">
		<div class="card-header rounded" >
		<a  href="<?php echo esc_url( get_permalink() )?>"><?php echo get_the_post_thumbnail( $post->ID, 'full', array('class'=>'img-fluid') ); ?></a>
		</div>
		<div class="card-body">
			
			<header class="entry-header my-2">

				<?php
				the_title(
					sprintf( '<h1 class="entry-title card-title text-dark"><a href="%s" rel="bookmark" class="text-muted">', esc_url( get_permalink() ) ),
					'</a></h1>'
				);
				?>

				<?php if ( 'post' === get_post_type() ) : ?>

					<div class="entry-meta my-3">
						<?php understrap_posted_on(); ?>
					</div><!-- .entry-meta -->

				<?php endif; ?>

			</header><!-- .entry-header -->

				<div class="entry-content">

					<?php the_excerpt(); ?>

					<?php
					wp_link_pages(
						array(
							'before' => '<div class="page-links">' . __( 'Pages:', 'aleshatech' ),
							'after'  => '</div>',
						)
					);
					?>

				</div><!-- .entry-content -->

		</div>
		
	</div>
	



</article><!-- #post-## -->
