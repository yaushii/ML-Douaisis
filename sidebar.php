<?php
/**
 * The template for the sidebar containing the main widget area
 *
 * @package WordPress
 * @subpackage Twenty_Sixteen
 * @since Twenty Sixteen 1.0
 */
?>

<?php if ( is_active_sidebar( 'sidebar-1' ) ) : ?>
<aside id="secondary" class="sidebar widget-area" role="complementary">
<div class="pre">
<a href="http://localhost/mission locale/wordpress/index.php/contactez-nous/"><img class="pré-inscription" src="<?= get_stylesheet_directory_uri(); ?>/img/preinscription.png" alt=""></a>
</div>

	<?php dynamic_sidebar( 'sidebar-1' ); ?>

	
</aside><!-- .sidebar .widget-area -->
<?php endif; ?>