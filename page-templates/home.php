<?php
/*
Template Name: Home
*/
// TODO - Move buttons closer together.

// page id
$page_id = get_queried_object_id();

// assets
$hero_image_id = get_post_thumbnail_id( $page_id );

get_header();

?>

	<section class="gd-homepage-hero" style="background: url('<?php echo wp_get_attachment_url($hero_image_id);?>')">
			<div class="grid-container">
				<div class="grid-x align-middle align-spaced">

					<div class="cell small-12 medium-4 drilling">
						<div class="section-button" data-page="/drilling">
							Drilling
						</div>
					</div>

					<div class="cell small-12 medium-4 svg-wrap">
						<img src="<?php echo get_stylesheet_directory_uri(); ?>/dist/assets/images/svg/gd-logo.svg" alt="">
					</div>

					<div class="cell small-12 medium-4 fracking">
						<div class="section-button" data-page="/fracking">
							Fracking
						</div>
					</div>

				</div>
			</div>
	</section>

<?php get_footer();
