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
<a href="http://localhost/mission%20locale/wordpress/index.php/contactez-nous/"><img class="pré-inscription" src="<?= get_stylesheet_directory_uri(); ?>/img/preinscription.png" alt=""></a>
</div>

	<?php dynamic_sidebar( 'sidebar-1' ); ?>
	
	<div class="contact">

		<form action="" method="post">

			<input type="text" name="nom" placeholder="Nom" />
			<input type="text" name="prenom" placeholder="Prenom" />
			<input type="text" name="email" placeholder="Email" />
			<textarea id="description" name="description" class="form-control" placeholder="description"></textarea>



			<label for="">Es tu scolarisé ? :</label>
			<input type="radio" name="ecole" value="oui" id="oui" checked="checked" /> <label for="oui">Oui</label>
			<input type="radio" name="ecole" value="non" id="non" /> <label for="non">Non</label>

			<p><input type="submit" value="Valider" /></p>
		</form>

	</div>
</aside><!-- .sidebar .widget-area -->
<?php endif; ?>