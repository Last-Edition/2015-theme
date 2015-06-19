<section class="hp--shows">

	<div class="hp--shows__filters">

		<div class="hp--shows__locations__wrap quarter">

			<a href="#" class="hp--shows__locations__toggle">Select a City</a>

			<?php 

				$locations = get_terms( 'locations' );

				echo '<div class="hp--shows__locations"><ul>';

				foreach ($locations as $location) {

					if ( $location->term_id == '15' ) {

						echo '<li class="active '.$location->term_id.'">'.$location->name.'</li>';

					} else {

						echo '<li class="'.$location->term_id.'">'.$location->name.'</li>';

					}


				}

				echo '</ul></div>';

			?>

			<p class="currently-viewing"></p>

		</div>

	</div>

	<div class="full gig--toggle__results">

			<?php // WP_Query arguments
			$args = array (

				'post_type' => 'shows',
				'posts_per_page' => '4',
				'meta_key' => 'date',	
				'orderby' => 'meta_value',	
				'order' => 'desc',

			);

			// The Query
			$query = new WP_Query( $args );

			// The Loop
			if ($query->have_posts() ) {

				while ($query->have_posts() ) {
					
					$query->the_post();

					get_template_part( 'content', 'shows' );

				}

			}

			// Restore original Post Data
			wp_reset_postdata(); ?>

</div>

	<div class="full hp--shows__key">
		
		<p class="upcoming">Upcoming Shows</p>
		<p class="archive">Past Shows</p>

	</div>

</section>
