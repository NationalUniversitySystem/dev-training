<?php
	get_header();

	$hike_date_unix = get_post_meta( get_the_ID(), 'hike-date', true );
	$hike_date      = gmdate("Y-m-d\TH:i:s\Z", $hike_date_unix);
	$hike_elevation = get_post_meta( get_the_ID(), 'hike-elevation', true );
	$hike_overnight = get_post_meta( get_the_ID(), 'hike-overnight', true );

	$hike = get_post_meta( get_the_ID(), 'hike_data', false );

	$hike_elevation_new = $hike[0]['hike-elevation'];


?>

	<div class="container mt-5">
		
		<h2> <?php the_title(); ?> (single-hike.php)</h2>
		
		<hr/>

		<div>
			<h3>Fast Facts About This Hike</h3>
			<strong>Date of Hike: <?php echo $hike_date; ?></strong><br/>
			<strong>Hike Elevation:</strong> <?php echo $hike_elevation ?><br/>
			<strong>Overnight Hike?</strong> <?php echo $hike_overnight ?><br/>
		</div>


		<hr/>
		
		<?php the_content(); ?>

		<?php
			var_dump($hike);

			
		?>
		
	
		<div class="mt-5">
			<h3>Check out these photos from this hike</h3>
			<p>&nbsp;</p>
		</div>

		<hr/>

		<?php echo $hike_elevation_new; ?>

		<a href="<?php echo get_post_type_archive_link('hike'); ?>">Click here to view all Hikes</a>

	</div>

<?php
	get_footer();
?>