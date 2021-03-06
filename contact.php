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
 * Template Name: contact
 * 
 */

get_header(); ?>

<div id="primary" class="content-area">
	<main id="main" class="site-main co" role="main">
		
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
		<h2>Une mission locale proche de chez vous.</h2>
        <div class="container">
        <iframe class="frame" src="https://www.google.com/maps/d/embed?mid=1-OY8zuwZ5g5rBRLsjSweFLUXr6nVWx_s"></iframe>
            </div><br>
<p>Pour tout renseignement remplisser ce formulaire,</p>
    
<p>Ou contactez nous part téléphone au : 03/27/71/48/20</p>

	</main><!-- .site-main -->
	<?php get_sidebar( 'content-bottom' ); ?>

</div><!-- .content-area -->


<?php if ( is_active_sidebar( 'sidebar-1' ) ) : ?>
<aside id="secondary" class="sidebar widget-area" role="complementary">

<div class="pre">
<a href="http://localhost/mission%20locale/wordpress/index.php/contactez-nous/"><img class="pré-inscription" src="<?= get_stylesheet_directory_uri(); ?>/img/preinscription.png" alt=""></a>
</div>

	

	<div class="contact">
	
	</div>
	
</aside><!-- .sidebar .widget-area -->
<?php endif; ?>
<?php get_footer(); ?>
