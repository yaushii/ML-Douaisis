<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after
 *
 * @package WordPress
 * @subpackage Twenty_Sixteen
 * @since Twenty Sixteen 1.0
 */
?>

</div><!-- .site-content -->

<footer id="colophon" class="site-footer" role="contentinfo">


	<?php wp_footer(); ?>


	<html>

	<body>
		
<div class="logo">
				<img src="<?= get_stylesheet_directory_uri(); ?>/img/test.png" alt="">
				</div>
			<div class="footer">
			
				<ul class="jeunesse">
					<li>
						<h6 class="titre">espace jeunes</h6>
					</li>
					<li><a class="jeune" href="http://localhost/mission%20locale/wordpress/index.php/recherche-demploi/">#Recherche
							emploi</a>
					</li>
					<li><a class="jeune" href="http://localhost/mission%20locale/wordpress/index.php/espace-jeune/sante-et-bien-etre/">#Sante
							et bien être</a>
					</li>
					<li><a class="jeune" href="http://localhost/mission%20locale/wordpress/index.php/gerer-votre-budget/">#Gérer votre
							budget</a>
					</li>
					<li><a class="jeune" href="http://localhost/mission%20locale/wordpress/index.php/vous-loger/">#Vous loger</a>
					</li>
					<li><a class="jeune" href="http://localhost/mission%20locale/wordpress/index.php/vous-deplacer/">#Vous déplacer</a>
					</li>
				</ul>
			</div>

			<div class="emploie">
				<ul class="employeur">
					<li>
						<h6 class="titre">espace employeurs</h6>
					</li>
					<li><a class="employeur" href="http://localhost/mission%20locale/wordpress/index.php/deposer-une-offre-demploi/">#Déposer
							une offre</a>
					</li>
					<li><a class="employeur" href="http://localhost/mission%20locale/wordpress/index.php/parrainer-un-jeune/">#Parrainer
							une jeune</a>
					</li>
					<li><a class="employeur" href="http://localhost/mission%20locale/wordpress/index.php/innover-pour-lemploi-des-jeunes/">#Innover
							pour les jeunes</a>
					</li>
				</ul>
			</div>

			<div class="fin">
				<ul class="divers">
					<li><a class="reste" href="http://localhost/mission%20locale/wordpress/index.php/elementor-215/">#Forum</a>
					</li>
					<li><a class="reste" href="http://localhost/mission%20locale/wordpress/index.php/contactez-nous/">#Pré-inscrivez-vous</a>
					</li>
				</ul>
			</div>
		</div>
	</body>
</footer>