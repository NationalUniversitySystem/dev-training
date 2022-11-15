<?php
	get_header();
?>

	<div class="container mt-5">
		
		<h2> <?php the_title(); ?> (single-hike.php)</h2>
		
		<hr/>

		<div>
			<h3>Fast Facts About This Hike</h3>
			<strong>Date of Hike:</strong>
			<strong>Hike Elevation:</strong>
			<strong>Overnight Hike?</strong>

			<?php echo get_post_meta( get_the_ID(), 'demo-field', true ); ?>
			<?php echo the_field( get_the_ID(), 'demo-field', true ); ?>
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