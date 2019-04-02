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
		<h2>Une mission locale proche de chez vous.</h2>
        <div class="container">
        <iframe class="frame" src="https://www.google.com/maps/d/embed?mid=1-OY8zuwZ5g5rBRLsjSweFLUXr6nVWx_s"></iframe>
            </div>

    <form method="post">
        
        <input type="text" name="nom" placeholder="Ton nom" required>
        
        <input type="email" name="email" placeholder="Ton mail" required>
        
        <textarea name="message" placeholder="Ton message" required></textarea>
		<label for="">Es tu scolarisé ? :</label>
			<input type="radio" name="ecole" value="non" id="non" /> <label for="non">Non</label>
			<input type="radio" name="ecole" value="oui" id="oui" checked="checked" /> <label for="oui">Oui</label>
            <SELECT name="ville" size="1">
<OPTION> <?php echo $villes; ?>
<!-- <OPTION> Nomain
<OPTION>Aix
<OPTION>Sameon
<OPTION>Landas
<OPTION>Beuvry La Foret
<OPTION>Auchy Les Orchies
<OPTION>Coutiches
<OPTION>Bouvignies -->

</SELECT>
       <p><input type="submit"></p>
    </form>
    <?php
// La fonction array permet de créer un array
$villes = array ('François', 'Michel', 'Nicole', 'Véronique', 'Benoît');
?>
	<?php
    if(isset($_POST['message'])){
        $entete  = 'MIME-Version: 1.0' . "\r\n";
        $entete .= 'Content-type: text/html; charset=utf-8' . "\r\n";
        $entete .= 'From: ' . $_POST['email'] . "\r\n";

        $message = '<h1>Message envoyé depuis la page Contact</h1>
        <p><b>Nom : </b>' . $_POST['nom'] . '<br>
        <b>Email : </b>' . $_POST['email'] . '<br>
        <b>Message : </b>' . $_POST['message'] . $_POST['ecole'] . '</p>';

        $retour = mail('justine.telmann@gmail.fr', 'Envoi depuis page Contact', $message, $entete);
        if($retour) {
            echo '<p>Votre message a bien été envoyé.</p>';
        }
    }
    ?>
	</main><!-- .site-main -->
	<?php get_sidebar( 'content-bottom' ); ?>

</div><!-- .content-area -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>
