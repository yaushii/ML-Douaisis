<?php
/**
 * The template for displaying pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages and that
 * other "pages" on your WordPress site will use a different template.
 *
 * @package WordPress
 * @subpackage Twenty_Sixteen
 * @since Twenty Sixteen 1.0
 * 
 * Template Name: accueil
 * 
 */

get_header(); ?>

<div id="primary" class="content-area">
	<main id="main" class="site-main" role="main">
		
		<?php
		// Start the loop.
		while ( have_posts() ) :
			the_post();

			// Include the page content template.
			get_template_part( 'template-parts/content', 'page' );

			// If comments are open or we have at least one comment, load up the comment template.
			if ( comments_open() || get_comments_number() ) {
				comments_template();
			}
			
			// End of the loop.
		endwhile;
		?>
         
		<div class="slider">
		 <?php echo do_shortcode('[smartslider3 slider=2]');?>
		 </div>
<div class="tube">
		<?php echo do_shortcode('[embedyt]https://www.youtube.com/embed?listType=playlist&amp;list=UUtNgrMoHBVebLZggQH37mMQ&amp;v=DAYSyJQFQHQ&amp;layout=gallery[/embedyt]'); ?>
</div>
		<a href="http://http://localhost/mission locale/wordpress/index.php/sondage/"><img class="sondage" src="<?= get_stylesheet_directory_uri(); ?>/img/avis.png" alt=""></a>
	</main><!-- .site-main -->
	<?php get_sidebar( 'content-bottom' ); ?>

</div><!-- .content-area -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>
