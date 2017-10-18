<?php

	/*
	Template Name: Drilling
	*/

	get_template_part( 'template-parts/header' );

	// page id
	$page_id = get_queried_object_id();

	// data
	$pumps = get_field('pumps', $page_id);
	$minimize_data = $pumps['minimize_time'];

?>
<div class="product-template">

	<section class="minimize-time">

		<div class="the-bottom-line">

			<div class="grid-container">
				<div class="grid-x align-center-middle">
					<div class="cell small-12">
						<div class="wrap">
							<div class="line"></div>
							<div class="grid-x align-center-middle">
								<div class="cell small-12 medium-6">
									<div class="text-wrap">
										<?php echo $minimize_data['the_bottom_line']; ?>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>

		</div>
		<!--/the-bottom-line-->

		<div class="product drilling">

			<div class="grid-container">
				<div class="grid-x align-center-middle">
					<div class="cell small-12 medium-8">
						<div class="image-wrap">
							<img src="<?php echo $minimize_data['product_image']; ?>" alt="" class="product-image">
							<img src="<?php echo $minimize_data['product_background_image']; ?>" alt="" class="product-background-image">
						</div>
					</div>
					<div class="auto cell">
						<div class="bullet-list-wrap">
							<h3><?php echo $minimize_data['bullet_list_title']; ?></h3>
							<ul>
								<?php

								foreach( $minimize_data['bullet_list'] as $bullet):

									echo '<li>'.$bullet['bullet'].'</li>';

								endforeach;

								?>
							</ul>
						</div>
					</div>
				</div>
			</div>

		</div>
		<!--/product-->

		<div style="height: 1000px;"></div>

	</section>
	<!--/minimize-time-->

</div>
