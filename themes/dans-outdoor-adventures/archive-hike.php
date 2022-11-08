
<?php
	get_header();
?>

	<h2>All of My Hikes</h2>

	<?php the_archive_title(); ?>

	<?php
		while( have_posts() ){
			the_post();
	?>

		<div class="container mt-5">
			<h2> <?php the_title(); ?> (archive.php)</h2>
			<hr/>
			<?php the_content(); ?>
		</div>
	
	<?php
		}
	?>

<?php
	get_footer();
?>