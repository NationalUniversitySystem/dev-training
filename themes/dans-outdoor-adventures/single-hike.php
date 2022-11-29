<?php
	get_header();

	$post_ID = get_the_ID();

	$hike_date_unix = get_post_meta( $post_ID, 'hike-date', true );
	$hike_date      = gmdate("Y-m-d\TH:i:s\Z", $hike_date_unix);
	$hike_elevation = get_post_meta( $post_ID, 'hike-elevation', true );
	$hike_overnight = get_post_meta( $post_ID, 'hike-overnight', true );

	$hike = get_post_meta( $post_ID, 'hike_data', false );

	$hike_elevation_new = $hike[0]['hike-elevation'];

	$post_terms = get_the_terms( $post_ID, 'hike-type' );
	$hike_type = $post_terms[0]->name;

	// var_dump($post_terms);


?>

	<div class="container mt-5">
		
		<h2> <?php the_title(); ?> (single-hike.php)</h2>
		
		<hr/>

		<div>
			<h3>Fast Facts About This Hike</h3>
			<strong>Date of Hike: <?php echo $hike_date; ?></strong><br/>
			<strong>Hike Elevation:</strong> <?php echo $hike_elevation ?><br/>
			<strong>Type of Hike:</strong> <?php echo $hike_type; ?>
		</div>


		<hr/>
		
		<?php the_content(); ?>

		<div class="mt-5">
			<h3>Check out these photos from this hike</h3>
			<p>&nbsp;</p>
		</div>

		<hr/>

		<a href="<?php echo get_post_type_archive_link('hike'); ?>">Click here to view all Hikes</a>

	</div>

<?php
	get_footer();
?>