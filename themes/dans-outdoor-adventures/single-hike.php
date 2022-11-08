<?php
	get_header();
?>

	<div class="container mt-5">
		
		<h2> <?php the_title(); ?> (single-hike.php)</h2>
		
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