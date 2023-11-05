
<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package The_Theme
 */


 get_header();
 ?>


<div class="page-header">
    <?php the_post_thumbnail('full'); ?>
    <h1>BIENVENUE SUR LE SITE PING-PASSION</h1>
</div>

<hr>
<div class="section-container">
	<div class="info-sections">
		<div class="info-section">
			<h2>LIVRAISON EN 24H</h2>
			<p>Votre colis est préparé par nos soins dès réception de votre commande et livré avec</p>
		</div>
		<div class="info-section">
			<h2>REMISES QUANTITATIVES</h2>
			<p>Des remises dès 60€ d’achat ! (hors fournitures)</p>
		</div>
		<div class="info-section">
			<h2>LES AVANTAGES PING-PASSION</h2>
			<p>Montage de raquette gratuit (feuilles de protection offertes)<br>
			Découpage à la machine<br>
			Conseil téléphonique gratuit</p>
		</div>
	</div> 
</div>
<hr>

<div class="espace-150px"></div>

	<section class="banner">
		<h2>Chez Ping-Passion, donnez vie à chaque coup : Des revêtements et bois de raquette pour transformer chaque échange en passion.</h2>
	</section>
<div class="espace-150px"></div>



 
 <?php
 get_footer();