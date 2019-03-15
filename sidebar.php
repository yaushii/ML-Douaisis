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
<!-- <?php
 
 echo '<img class="agenda" src="img/test.png"></div> ';
 echo '<a href="http://localhost/mission%20locale/wordpress/index.php/events/" > Mon lien </a>';
 ?>  -->

	
	<?php dynamic_sidebar( 'sidebar-1' ); ?>
</aside><!-- .sidebar .widget-area -->
<?php endif; ?>