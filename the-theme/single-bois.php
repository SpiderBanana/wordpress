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




	<?php
    while ( have_posts() ) :
        the_post();
    ?>
    	<div class="grid-container">
			<article class="container-bois">
				<div>
					<h1><?php the_title(); ?></h1>
					<div class="single-bois__thumbnail">
						<?php the_post_thumbnail(); ?>
					</div>
				</div>
			</article>

			<section>
				<div class="single-bois__content">
					<?php the_excerpt(); ?>
				</div>
			</section>



		</div> 

    <?php
	
    endwhile; // End of the loop.
    ?>
</main>

<?php
get_footer();


