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
 * 
 * Template Name: mobilité
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
		<div class="envie">
			<h6>Envie de :</h6>

			<ul>
				<li></li> T'engager...
				<li></li>de bouger à l'étranger...
				<li></li>de découvrir d'autres cultures...
				<li></li>aquérir de nouvelles compétences ...
			</ul>

		</div>
		<div class="monde">
			<div class="mob">
				<div class="civ">
					<a href="https://www.service-civique.gouv.fr/jeunes-volontaires/?gclsrc=aw.ds" target="_blank"><img
							class="mob" src="<?= get_stylesheet_directory_uri(); ?>/img/civiquepng.png" alt=""></a>
				</div>
				<div class="bouge">
					<a href="https://decrochetonjob.eu/" target="_blank"><img class="mob"
							src="<?= get_stylesheet_directory_uri(); ?>/img/bouge.png" alt=""></a>
					<a href="http://site.erasmusplus-jeunesse.fr/" target="_blank"><img class="mob"
							src="<?= get_stylesheet_directory_uri(); ?>/img/erasmus.png" alt=""></a>
				</div>
				<div class="travail">
					<a href="https://www.pole-emploi.fr/informations/international-@/international/"
						target="_blank"><img class="mob" src="<?= get_stylesheet_directory_uri(); ?>/img/travail.png"
							alt=""></a>
					<a href="https://www.france-volontaires.org/" target="_blank"><img class="mob"
							src="<?= get_stylesheet_directory_uri(); ?>/img/france.png" alt=""></a>
					<a href="https://europa.eu/youth/solidarity_fr" target="_blank"><img class="mob"
							src="<?= get_stylesheet_directory_uri(); ?>/img/sve.png" alt=""></a>
				</div>
				<div class="pair">
					<a href="https://www.sts-education.com/fr-fr/?gclid=EAIaIQobChMImOnfjdaz4QIVT0PTCh1W_wfBEAAYASAAEgIm5PD_BwE"
						target="_blank"><img class="mob" src="<?= get_stylesheet_directory_uri(); ?>/img/aupair.png"
							alt=""></a>
					<a href="http://www.ofqj.org/" target="_blank"><img class="mob"
							src="<?= get_stylesheet_directory_uri(); ?>/img/ofqj.png" alt=""></a>
				</div>
				<div class="ofaj">
					<a href="https://www.ofaj.org/" target="_blank"><img class="mob"
							src="<?= get_stylesheet_directory_uri(); ?>/img/ofaj.png" alt=""></a>
				</div>
			</div>

			<div class="savoir">
				<p class="plus">Pour en savoir plus aller sur<a class='pink'
						href="http://ness-dev.fr/index.php/527-2/"> l'agenda des réunions
						d'informations collectifs</a>.</p>

			</div>
		</div>
		<div class="part">
			<a href="https://www.ready-to-move.fr/" target="_blank"><img class="mob"
					src="<?= get_stylesheet_directory_uri(); ?>/img/ready.jpg" alt=""></a>
		</div>
	</main><!-- .site-main -->
	<?php get_sidebar( 'content-bottom' ); ?>

</div><!-- .content-area -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>