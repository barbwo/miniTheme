<!DOCTYPE html>
<html <?php language_attributes(); ?>>
	<head>
		<meta charset="<?php bloginfo( 'charset' ); ?>" />
		<title>
			<?php 
				wp_title('|', true, true);
				$title = get_bloginfo( 'name' );
				if( strlen($desc = get_bloginfo('description')) > 0 ):
					$title .= ' - ' . $desc;
				endif; 
				echo $title; 
			?>
		</title>
		<?php wp_head(); ?>
	</head>
	<body>
		<div class="container">
			<header id="site-header">
				<div id="site-brand">
					<a href="<?php echo home_url(); ?>">
						<span id="site-logo">
							<img src="<?php echo get_theme_mod('site_logo'); ?>">
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