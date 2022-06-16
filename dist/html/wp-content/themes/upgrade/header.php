<!doctype html>

<html <?php language_attributes(); ?> class="no-js">

<head>

	<meta charset="<?php bloginfo( 'charset' ); ?>" />

	<title><?php bloginfo( 'name' ); ?> &mdash; <?php if ( is_page( 'home' ) ) : ?><?php bloginfo( 'description' ); ?><?php else : ?><?php the_title(); ?><?php endif; ?></title>

	<meta name="description" content="" />

	<meta name="keywords" content="" />

	<meta name="viewport" content="width=device-width, initial-scale=1" />

	<link rel="icon" href="<?php bloginfo( 'template_directory' ); ?>/assets/img/favicon.png" />

	<link rel="apple-touch-icon" href="<?php bloginfo( 'template_directory' ); ?>/assets/img/touch-icon.png" />

	<link type="text/css" href="<?php bloginfo( 'template_directory' ); ?>/assets/css/screen.css" rel="stylesheet" media="screen, projection" />

	<!-- Facebook Open Graph -->

	<!--

		<meta property="fb:app_id" content="123456789">
		<meta property="og:url" content="https://www.example.com/path/to/page.html">
		<meta property="og:type" content="website">
		<meta property="og:title" content="">
		<meta property="og:image" content="https://www.example.com/path/to/image.jpg">
		<meta property="og:description" content="">
		<meta property="og:site_name" content="">
		<meta property="article:author" content="">

	-->

	<!-- Twitter Cards -->

	<!--

		<meta name="twitter:card" content="summary">
		<meta name="twitter:site" content="@site_account">
		<meta name="twitter:creator" content="@individual_account">
		<meta name="twitter:url" content="https://www.example.com/path/to/page.html">
		<meta name="twitter:title" content="">
		<meta name="twitter:description" content="">
		<meta name="twitter:image" content="https://www.example.com/path/to/image.jpg">

	-->

	<?php wp_head(); ?>

</head>

<body <?php body_class(); ?>>

	<header id="top" class="header l-header" role="banner">

		<div class="wrap l-wrap l-header__wrap">

			<div class="c-primary-logo">

				<!-- For SVG artwork, add <title> after opening <svg> -->

				<a href="<?php echo esc_url( home_url( '/') ); ?>" rel="home" class="c-primary-logo__link"><?php bloginfo( 'name' ); ?></a>

			</div>

			<div class="c-small-screen-nav">

				<div class="c-small-screen-nav__button">

					<a href="https://www.upgrade.com/portal/" rel="external" class="c-small-screen-nav__button-link">Sign In</a>

				</div>

				<div class="c-small-screen-nav__toggle">

					<span>Menu</span>

				</div>

			</div>

			<nav id="" class="c-primary-nav" role="navigation">

				<div class="c-primary-nav__toggle">

					<span>Menu</span>

				</div>

				<?php

					wp_nav_menu( array(

						// 'menu'				=> '',
						'menu_class'		=> '',
						// 'menu_id'			=> '',
						'container'			=> '',
						// 'container_class'	=> '',
						// 'container_id'		=> '',
						// 'fallback_cb'		=> '',
						// 'before'			=> '',
						// 'after'			=> '',
						// 'link_before'		=> '',
						// 'link_after'			=> '',
						// 'echo'				=> true,
						'depth'				=> 2,
						'walker'			=> new Primary_Navigation_Walker_Nav_Menu,
						'theme_location'	=> 'primary',
						'items_wrap'		=> '<ul class="c-primary-nav__list">%3$s</ul>',
						// 'item_spacing'	=> 'preserve',

					));

				?>

				<div class="c-primary-nav__button">

					<?php if ( is_page( 'credit-health' ) ) : ?>

						<a href="https://www.upgrade.com/portal/credit-health/" rel="external" class="c-primary-nav__button-link">Sign In</a>

					<?php else : ?>

						<a href="https://www.upgrade.com/portal/" rel="external" class="c-primary-nav__button-link">Sign In</a>

					<?php endif; ?>

				</div>

			</nav>

		</div>

	</header>

	<main id="" class="main l-main" role="main">
