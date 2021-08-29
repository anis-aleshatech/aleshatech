<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after
 *
 * @package UnderStrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

$container = get_theme_mod( 'understrap_container_type' );
?>

<?php get_template_part( 'sidebar-templates/sidebar', 'footerfull' ); ?>

<?php get_template_part("/global-templates/before-footer");
?>
<footer class="footer">
                <div class="footer__top">
                  <div class="container">
                    <div class="row">
                      <div class="col-sm-12 col-md-6 col-lg-3 col-xl-4 footer__widget footer__widget-about">
                        <div class="footer__widget-content">
						<?php 
                   			      if ( is_active_sidebar( "footer-sidebar-1" ) ) {
                   			     dynamic_sidebar( "footer-sidebar-1" );
                   			 }
                   		?>
                        </div>
                      </div><!-- /.col-xl-4 -->
                      <div class="col-6 col-sm-6 col-md-6 col-lg-2 col-xl-2 footer__widget footer__widget-nav">
                            <div class="footer__widget-content">
                                <h6 class="footer__widget-title"> <?php echo esc_html('Quick Links', 'aleshatech'); ?></h6>
                                 <div class="footer__widget-content">
                                          <nav>
                                            
                                              <?php 
                                                  wp_nav_menu(
                                                    array(
                                                      'theme_location'  => 'footer_menu',
                                                      'menu_class'      => 'list-unstyled',
                                                
                                                    )
                                                );
                                              ?>
                                          </nav>
                                  </div><!-- /.footer-widget-content -->
                                
                            
                            </div>
                      </div><!-- /.col-xl-2 -->
                      <div class="col-6 col-sm-6 col-md-6 col-lg-2 col-xl-2 footer__widget footer__widget-nav">
                                  
                          <div class="footer__widget-content">
                          <?php 
                                            if ( is_active_sidebar( "footer-sidebar-3" ) ) {
                                          dynamic_sidebar( "footer-sidebar-3" );
                                      }
                                    ?>
                                      </div>
                                    </div><!-- /.col-xl-2 -->
                                    <div class="col-sm-12 col-md-6 col-lg-3 col-xl-4 footer__widget footer__widget-newsletter">
                                    <?php 
                                            if ( is_active_sidebar( "footer-sidebar-4" ) ) {
                                          dynamic_sidebar( "footer-sidebar-4" );
                                      }
                                    ?>
                      </div><!-- /.col-xl-4 -->
                    </div><!-- /.row -->
                  </div><!-- /.container -->
                </div><!-- /.footer-top -->
                <div class="footer-bottom">
                  <div class="container">
                    <div class="row align-items-center">
                      <div class="col-sm-12 ">
                       
                        <div class="footer-bottom__copyright">
                                <span class="copyright-text"><?php echo get_option_value('copyright', '© 2021 Alesha Tech Ltd. All Rights Reserved. ') ?> <i class="fa fa-heart text-danger"></i>
                            </span>
                            </div>
                      </div><!-- /.col-lg-12 -->
                    </div><!-- /.row -->
                  </div><!-- /.container -->
                </div><!-- /.Footer-bottom -->
              </footer>
</div><!-- #page -->

<?php wp_footer(); ?>
<script>
  AOS.init();
</script>
</body>

</html>

