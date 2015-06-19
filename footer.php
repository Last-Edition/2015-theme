<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package Last Edition
 */
?>

	<footer id="colophon" class="site-footer" role="contentinfo">
		
		<div class="wrapper">
			
			<div class="third gigs">
				
				<?php

				// WP_Query arguments
				$args = array(

					'post_type' => 'shows',
					'posts_per_page' => 8,
					'meta_key' => 'date',	
					'orderby' => 'meta_value',	
					'order' => 'desc'

				);
			
				// The Query
				$query = new WP_Query( $args );
				
				// The Loop
				if ( $query->have_posts() ) {

					echo '<p class="title">See us Live</p>';

					echo '<ul>';

					while ( $query->have_posts() ) {
						$query->the_post();

							echo '<li><a href="'.get_the_permalink().'">'.get_the_title().'</a></li>';

					}

					echo '</ul>';

				}

				// Restore original Post Data
				wp_reset_postdata(); ?>

			</div>			

			<div class="third pages">
				
				<p class="title">Sitemap</p>
				<?php wp_nav_menu( array( 'theme_location' => 'footer' ) ); ?>
				
			</div>

			<div class="third social">

				<p class="title">Social</p>
				
				<ul class="social footer">
					<li><a class="flaticon-facebook55" href="">Facebook</a></li>
					<li><a class="flaticon-twitter13" href="">Twitter</a></li>
					<li><a class="flaticon-google116" href="">Google+</a></li>
					<li><a class="flaticon-youtube18" href="">YouTube</a></li>
					<li><a class="flaticon-spotify10" href="">Spotify</a></li>
					<li><a class="flaticon-soundcloud6" href="">Soundcloud</a></li>
					<li><a class="flaticon-bandcamp" href="">Bandcamp</a></li>
				</ul>

			</div>	

		</div>

		<p class="copyright">&copy; <?php echo get_bloginfo('name'); ?> <?php echo date( 'Y' ); ?> </p>		

	</footer>

<?php wp_footer(); ?>

</body>
</html>
