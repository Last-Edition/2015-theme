<?php
/**
 * @package Last Edition
 */

$postID = get_the_id();

/* 
Date Formatting
*/

$format_in = 'Ymd'; // the format your value is saved in (set in the field options)
$format_out = 'd / M. Y'; // the format you want to end up with
$date = DateTime::createFromFormat($format_in, get_field('date', $postID));

/* 
Venue & Location
*/
$venue = get_field( 'venue', $postID );

$locations = wp_get_post_terms( $postID, 'locations' );

foreach ($locations as $location) {

	if ( $location->name != 'All Locations' ) {

		$city = $location->name;

	}

}

/* 
Archive  / Upcoming class
*/

$closestDate = closestDate();
$classes = array( 'shows--archive', $closestDate );

?>

<article id="post-<?php the_ID(); ?>" <?php post_class( $classes ); ?>>

	<a href="<?php the_permalink(); ?>">
		
		<div class="show--details">

			<div class="show--details__spin">

				<div class="show--details__inner">

					<?php 

						echo '<span class="date">'.$date->format( $format_out ).'</span>';
						echo '<span class="title">'. dynamicStrLen( get_the_title(), '25', null ).'</span>';

						if ( $venue && $city ) {

							echo '<span class="venue">'.$venue.', '.$city.'</span>';

						} else if ( $city ) {

							echo '<span class="venue">'.$city.'</span>';

						}

					?>

				</div>

			</div>

		</div>

		<div class="show--poster">
			
			<?php 

			$thumbID = get_post_thumbnail_id( $postID );

			if ( $thumbID ) {
			
				$imgID = $thumbID; 

			} else {

				$imgID = null;

			}

			echo mwGetImage( $imgID, 'poster' ); ?>

		</div>

	</a>

</article>