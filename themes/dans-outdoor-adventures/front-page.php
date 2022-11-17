<?php
	get_header();
?>

	<div class="container mt-5">
		<h2> <?php the_title(); ?> (front-page.php)</h2>
		<?php the_content(); ?>

		

			<?php
				$args = [
					'post_type'      => 'post',
					'posts_per_page' => 3,
					'order'          => 'DESC',
					'orderby'        => 'date',
				];

				$recent_posts = new WP_Query( $args );

				if ( $recent_posts->have_posts() ) :
					?>

					<div class="row mt-5 mb-5">
						<h3>Recent Blog Posts</h3>

						<?php
							while ( $recent_posts->have_posts() ) :
								$recent_posts->the_post();
						?>

								<div class="col-4 mt-5">
									<h4><?php the_title(); ?></h4>
									<p><?php the_excerpt();?></p>
									<a href="<?php the_permalink();?>">Click here to read more...</a>
								</div>

							<?php
							endwhile;
							?>
					</div>

				<?php
				endif;
			?>

<?php
				$args = [
					'post_type'      => 'hike',
					'posts_per_page' => 3,
					'order'          => 'DESC',
					'orderby'        => 'date',
					'meta_query' => array(
						array(
							'key'     => 'hike-elevation',
							'value'   => '4000',
							'compare' => '>=',
						),
					),
				];

				$recent_hikes = new WP_Query( $args );

				if ( $recent_hikes->have_posts() ) :
					?>

					<div class="row mt-5 mb-5">
						<h3>Recent Hikes</h3>

						<?php
							while ( $recent_hikes->have_posts() ) :
								$recent_hikes->the_post();
						?>

								<div class="col-4 mt-5">
									<h4><?php the_title(); ?></h4>
									<p><?php the_excerpt();?></p>
									<p><?php echo get_post_meta( get_the_ID(), 'hike-elevation', true) ?></p>
									<a href="<?php the_permalink();?>">Click here to read more...</a>
								</div>

							<?php
							endwhile;
							?>
					</div>

				<?php
				endif;
			?>

	</div>



<?php
	get_footer();
?>