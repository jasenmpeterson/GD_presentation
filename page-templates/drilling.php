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
<div class="product-template parallax">

	<section class="minimize-time parallax__group">

		<div class="the-bottom-line parallax__layer parallax__layer--back">

			<div class="grid-container">
				<div class="grid-x align-center-middle">
					<div class="cell small-12">
						<div class="wrap">
							<div class="line"></div>
							<div class="grid-x align-center-middle">
								<div class="cell small-12 medium-6">
									<div class="text-wrap">
										<?php echo $minimize_data['the_bottom_line']; ?>
										<div class="scroll-down-icon">
											<svg xmlns="http://www.w3.org/2000/svg" viewBox="926.945 947.945 60.109 60.109" class="scroll-down">
												<g transform="translate(811.5 954.5)">
													<circle cx="28.055" cy="28.055" r="28.055" transform="translate(117.445 -4.555)"></circle>
													<path d="M129.52 21.014l16.336 7.813 16.336-7.813"></path>
												</g>
											</svg>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>

		</div>
		<!--/the-bottom-line-->

	</section>
	<!--/minimize-time-->

	<section class="minimize-time-product parallax__group">

		<div class="product drilling parallax__layer parallax__layer--back">

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
		<!--/minimize-time-product-->

	</section>

	<div style="height: 1000px; background-color: red;"></div>

</div>
