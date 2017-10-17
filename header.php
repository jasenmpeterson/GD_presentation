<?php
/**
 * The template for displaying the header
 *
 * Displays all of the head element and everything up until the "container" div.
 *
 * @package FoundationPress
 * @since FoundationPress 1.0.0
 */

?>
<!doctype html>
<html class="no-js" <?php language_attributes(); ?> >
	<head>
		<meta charset="<?php bloginfo( 'charset' ); ?>" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />
		<?php wp_head(); ?>
	</head>
	<body <?php body_class(); ?>>

	<?php if ( get_theme_mod( 'wpt_mobile_menu_layout' ) === 'offcanvas' ) : ?>
		<?php get_template_part( 'template-parts/mobile-off-canvas' ); ?>
	<?php endif; ?>


	<header class="site-header" role="banner">
		<div class="social-media">
			<div class="wrap">
				<ul class="menu">
					<li>
						<a href="<?php echo get_field('linkedin', 'option'); ?>">
							<i class="fa fa-linkedin" aria-hidden="true"></i>
						</a>
					</li>
					<li>
						<a href="<?php echo get_field('facebook', 'option'); ?>">
							<i class="fa fa-facebook" aria-hidden="true"></i>
						</a>
					</li>
					<li>
						<a href="<?php echo get_field('youtube', 'option'); ?>">
							<i class="fa fa-youtube" aria-hidden="true"></i>
						</a>
					</li>
					<li>
						<a href="<?php echo get_field('twitter', 'option'); ?>">
							<i class="fa fa-twitter" aria-hidden="true"></i>
						</a>
					</li>
				</ul>
			</div>
		</div>
		<div class="site-title-bar title-bar" <?php foundationpress_title_bar_responsive_toggle() ?>>
			<div class="title-bar-left">
				<button class="menu-icon" type="button" data-toggle="<?php foundationpress_mobile_menu_id(); ?>"></button>
			</div>
		</div>

		<nav class="site-navigation top-bar" role="navigation">
			<div class="top-bar-left">
				<div class="logo-wrap">
					<img src="<?php echo get_stylesheet_directory_uri(); ?>/dist/assets/images/svg/gd-logo.svg" alt="">
				</div>
			</div>
			<div class="top-bar-right">
				<?php foundationpress_top_bar_r(); ?>

				<?php if ( ! get_theme_mod( 'wpt_mobile_menu_layout' ) || get_theme_mod( 'wpt_mobile_menu_layout' ) === 'topbar' ) : ?>
					<?php get_template_part( 'template-parts/mobile-top-bar' ); ?>
				<?php endif; ?>
			</div>
		</nav>

	</header>

	<div class="page-wrap">

		<div class="ajax-loader">

			<svg version="1.1" id="loader-1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
			     width="40px" height="40px" viewBox="0 0 50 50" style="enable-background:new 0 0 50 50;" xml:space="preserve">
        <path fill="#000" d="M25.251,6.461c-10.318,0-18.683,8.365-18.683,18.683h4.068c0-8.071,6.543-14.615,14.615-14.615V6.461z">
				  <animateTransform attributeType="xml"
				                    attributeName="transform"
				                    type="rotate"
				                    from="0 25 25"
				                    to="360 25 25"
				                    dur="0.6s"
				                    repeatCount="indefinite"/>
        </path>
      </svg>

		</div>
