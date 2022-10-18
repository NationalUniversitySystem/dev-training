<html>
	<head>
		<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
		<?php wp_head(); ?>
		<title>Dan's Outdoor Adventures</title>
	</head>

	<body>

	<nav class="navbar navbar-expand-lg navbar-light bg-light">
		<div class="collapse navbar-collapse" id="navbarSupportedContent">
			<?php 
				wp_nav_menu( 
					array( 
						'theme_location' => 'header-nav-menu',
						'menu_class' => 'navbar-nav mr-auto',
					) 
				); ?>
		</div>
	</nav>
