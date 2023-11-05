<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package saladbar
 */

get_header();
?>

	<main id="primary" class="site-main">

		<?php
		while ( have_posts() ) :
			the_post();?>

            <br>
			<div class="single-bois-card">
				<div class="single-bois-card-body">
                    <h3 class="single-bois-card-title"> <?php the_title(); ?> </h3>
					<p class="single-bois-card-text"> <?php the_content(); ?></p>
				</div>
                <?php the_post_thumbnail(); ?>
			</div>

                


			<?php
			// If comments are open or we have at least one comment, load up the comment template.
			if ( comments_open() || get_comments_number() ) :
				comments_template();
			endif;

		endwhile; // End of the loop.
		?>

	</main><!-- #main -->

<?php

