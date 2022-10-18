<html>
	<head>
		<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
		<?php wp_head(); ?>
		<title>Dan's Outdoor Adventures</title>
	</head>

	<body>

	<nav class="navbar navbar-expand-lg bg-light">
		<div class="container-fluid">
			<a class="navbar-brand" href="#">My Site!</a>
			<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
			</button>
			
			<?php 
				wp_nav_menu( 
					array( 
						'container_class' => 'collapse navbar-collapse',
						'container_id'    => 'navbarNav',
						'menu_class'      => 'navbar-nav',
						'theme_location'  => 'header-nav-menu',
					) 
				); 
			?>

		</div>
	</nav>
