<?php
/**
 * The template for displaying archive pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package The_Theme
 */

 get_header();
 ?>
 
	 <main id="primary" class="site-main">
 
		 <?php if ( have_posts() ) : ?>
 
			<section class="banner">
				 <h1>Nos Revêtements</h1>
		 	</section><!-- .page-header -->

			 <section class="revetements-wrapper">
				<?php
				/* Start the Loop */
				while ( have_posts() ) :
					the_post(); 
				?>
				
				<article class="revetements-card">
					<h2><?php the_title(); ?></h2>
					<?php the_post_thumbnail(); ?>
					<div class="revetements-card__content">
						<p><?php the_excerpt(); ?></p>
						<a href="<?php the_permalink(); ?>">En savoir +</a>
					</div>
				</article>
					
				<?php 
				endwhile; ?>
			 </section>
		
		<?php 
		 endif;
		 ?>
 
	 </main><!-- #main -->
 
 <?php
 get_footer();