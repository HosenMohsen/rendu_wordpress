<?php

get_header()
?>

<main id="primary" class="site-main">

		<?php if ( have_posts() ) : ?>

			<header class="page-header">
				<h1> Nos Revêtements</h1>
				<p> Transformez chaque coup en un chef-d'œuvre de précision avec nos revêtements de ping-pong haut de gamme, conçus pour maximiser votre contrôle et votre puissance.</p>
			</header><!-- .page-header -->
			<section class="revetements-wrapper">

			
			<?php
			/* Start the Loop */
			while ( have_posts() ) :
				the_post(); ?>


			<div class="revetements-card">
				<?php the_post_thumbnail(); ?>
				<div class="revetements-card-content">
					<h2> <?php the_title(); ?> </h2>
					<?php the_excerpt(); ?>
                    <br>
					<a href="<?php the_permalink(); ?>"> En savoir + </a>
				</div>
			</div>
				
			<?php
			endwhile; ?>


			</section>

			<?php
			the_posts_navigation();

		else :

			get_template_part( 'template-parts/content', 'none' );

		endif;
		?>

	</main><!-- #main -->

<?php
get_footer();