<?php
	get_header();
?>

	<div class="container mt-5">
		<h2> <?php the_title(); ?></h2>
		<?php the_content(); ?>
	</div>

<?php
	get_footer();
?>