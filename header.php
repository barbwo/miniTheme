<!DOCTYPE html>
<html <?php language_attributes(); ?>>
	<head>
		<meta charset="<?php bloginfo( 'charset' ); ?>" />
		<title><?php wp_title('|', true, true) . bloginfo( 'name' ); ?></title>
		<link rel="shortcut icon" href="<?php echo get_template_directory_uri(); ?>/favicon.ico" />
		<?php wp_head(); ?>
	</head>
	<body>
		<div class="container">
			<header id="site-header">
				<div id="site-brand">
					<a href="<?php echo home_url(); ?>">
						<span id="site-logo">
							<i class="fas fa-laptop"></i>
						</span>
						<span id="site-title">
							<?php echo bloginfo( 'name' ); ?>
						</span>
					</a>
					<div id="menu-toggle">
						<i class="fas fa-bars"></i>
					</div>
				</div>
				<?php wp_nav_menu( array( 'theme_location' => 'header-menu', 
										  'menu_id'        => 'site-navigation',
					 					  'menu_class'     => 'menu-hide', 
					 					  'container'      => false) ); ?>
			</header>