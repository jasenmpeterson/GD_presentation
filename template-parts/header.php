<header class="site-header" role="banner">
	<div class="social-media">
		<div class="mobile-logo">
			<img src="<?php echo get_stylesheet_directory_uri(); ?>/dist/assets/images/svg/gd-logo.svg" alt="">
		</div>
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
