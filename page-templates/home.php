<?php
/*
Template Name: Home
*/

// page id

$page_id = get_queried_object_id();

// assets
$hero_image_id = get_post_thumbnail_id( $page_id );

get_header();

?>

	<section class="gd-homepage-hero" style="background: url('<?php echo wp_get_attachment_url($hero_image_id);?>')">
		<div class="grid-x align-middle">

			<div class="cell medium-5 drilling">
				<div class="section-button" data-page="10">
					Drilling
				</div>
			</div>

			<div class="cell medium-2 svg-wrap">
				<img src="<?php echo get_stylesheet_directory_uri(); ?>/dist/assets/images/svg/gd-logo.svg" alt="">
			</div>

			<div class="cell medium-5 fracking">
				<div class="section-button" data-page="12">
					Fracking
				</div>
			</div>

		</div>
	</section>

<?php get_footer();
