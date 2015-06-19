<?php
/**
 * Template Name: Home
 *
 * @package Last Edition
 */

get_header(); ?>

<?php get_template_part( '/modules/home-banner' ); ?>

<?php get_template_part( 'modules/hp-shows' ); ?>

<section class="home">

	<div class="wrapper">

		<main id="main" class="site-main full" role="main">

			<?php while ( have_posts() ) : the_post(); ?>

				<?php get_template_part( 'content', 'page' ); ?>

			<?php endwhile; // end of the loop. ?>

		</main>

	</div>

</section>

<?php get_footer(); ?>
