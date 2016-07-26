<!DOCTYPE HTML>
<html <?php language_attributes(); ?> class="no-js">
	<head>
		<meta charset="<?php bloginfo( 'charset' ); ?>" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<script>(function(){document.documentElement.className='js'})();</script>
        <?php wp_head(); ?>
	</head>
	<body <?php body_class(); ?>><div class="wrapper">
		<header><div><div>
			<nav>
				<h1>
					<a href="<?php echo home_url(); ?>"><?php bloginfo('name'); ?></a>
				</h1>
				<?php // Primary navigation menu.
					wp_nav_menu( array(
						'menu_class'     => 'nav-menu',
						'container_class' => 'nav-menu-container',
						'theme_location' => 'primary',
					) );
				?>
				<a class="nav-menu-toggle"></a>
			</nav>
		</div></div></header>
		<main><div><div>

