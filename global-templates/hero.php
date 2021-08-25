<?php
/**
 * Hero setup
 *
 * @package UnderStrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;


if(is_home()) { 
    $page_for_posts = get_option( 'page_for_posts' );
	$src = get_the_post_thumbnail_url( $page_for_posts, 'full' );
	}else {
			$src = get_the_post_thumbnail_url($post->ID, 'full' ) ? get_the_post_thumbnail_url($post->ID, 'full' ):  get_template_directory_uri().'/assets/images/header_banner.png';
	}
?>


<div class="container-full hero-section" style="background-image: url( '<?php echo $src; ?>' );">
	<div class="container">
        <div class="row">
            <div class="col-md-12">
                <h1 class="mb-2 text-light"><?php echo single_post_title();?></h1>
				
            </div>
        </div>
    </div>
</div>

