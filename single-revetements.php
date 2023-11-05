<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package saladbar
 */
$dataRevêtement = get_fields();
get_header();
?>

	<main id="primary" class="site-main">

		<?php
		while ( have_posts() ) :
			the_post();?>

			<h2 class="single-revetements-title"> <?php the_title(); ?> </h2>
            <br>
			<div class="single-revetements-card">
				<?php the_post_thumbnail(); ?>
				<div class="single-revetements-card-content">
					<?php the_content(); ?>
				</div>
			
			</div>



			<?php
			// If comments are open or we have at least one comment, load up the comment template.
			if ( comments_open() || get_comments_number() ) :
				comments_template();
			endif;?>
			
			<section>
				<h2> Informations lié aux revetements</h2>
				<p> Rapidité: <?= $dataRevêtement['rapidite']?> </p>
				<p> Contrôle: <?= $dataRevêtement['controle']?> </p>
				<p> Adhérence: <?= $dataRevêtement['adherence']?> </p>

				<h2> Épaisseur</h2>
				<ul>
					<?php foreach($dataRevêtement['epaisseur'] as $epaisseur) : ?>
						<li> <?= $epaisseur['nom'] ?></li>
					<?php endforeach ?>
				</ul>
			</section>

		<?php
		endwhile; // End of the loop.
		?>

	</main><!-- #main -->

<?php

