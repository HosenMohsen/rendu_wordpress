<?php

get_header()
?>

<main id="primary" class="site-main">

		<?php if ( have_posts() ) : ?>

			<header class="page-header">
				<h1> Nos Bois</h1>
				<p>La qualité du bois dans une raquette de ping-pong : le secret de la performance et de la précision.</p>
				<br>
			</header><!-- .page-header -->
			<div class="bois-wrapper">

			
			<?php
			/* Start the Loop */
			while ( have_posts() ) :
				the_post(); ?>
			<br>

			<div class="bois-card">
			<h2> <?php the_title(); ?> </h2>
				<div class="bois-card-content">
				<?php the_post_thumbnail(); ?>
					<?php the_excerpt(); ?>
				</div>
				<br>
				<div class="bois-card-link">
				<a href="<?php the_permalink(); ?>"> En savoir + </a>
				</div>
			</div>
				
			<?php
			endwhile; ?>


		</div>

			<?php
			the_posts_navigation();

		else :

			get_template_part( 'template-parts/content', 'none' );

		endif;
		?>

	</main><!-- #main -->

<?php
