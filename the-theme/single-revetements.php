<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package The_Theme
 */
$dataDessert = get_fields();

get_header();
?>
<main id="primary" class="site-main">



	<?php
    while ( have_posts() ) :
        the_post();
    ?>
		
    	<div class="grid-container">
			

			<article class="container-revetements">
				<div>
					<h1><?php the_title(); ?></h1>
					<div class="single-revetements__thumbnail">
						<?php the_post_thumbnail(); ?>
					</div>
					<div class="single-revetements__content">
						<?php the_excerpt(); ?>
					</div>
				</div>
			</article>
			<section>
				<h2>Informations revêtements</h2>
				<p>Rapidité : <?= $dataDessert["rapidite"]?></p>
				<p>Controle : <?= $dataDessert["controle"]?> </p>
				<p>Adhérence : <?= $dataDessert["adherence"]?></p>
				<p>Êpaisseur : <?= $dataDessert["epaisseur"]?></p>
			</section>



		</div> 

    <?php
	
    endwhile; // End of the loop.
    ?>
</main>

<?php
get_footer();


