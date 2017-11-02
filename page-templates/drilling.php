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
	$reliable_construction = $pumps['reliable_construction'];
	$power = $pumps['decisive_power_and_flow'];
	$background = $pumps['background'];
	$footprint = $pumps['smallest_footprint'];
	$smoothest_operating = $pumps['smoothest_operating'];
	$designs = $pumps['modules']['multiple_design_configurations'];
	$modules_bullet_list = $pumps['modules']['bullet_list'];
	$modules_bullet_list_b = $pumps['modules']['bullet_list_b'];
	$modules_product_image = $pumps['modules']['product_image'];
	$modules_product_image_b = $pumps['modules']['product_image_b'];
	$modules_background_image = $pumps['modules']['background_image'];

	// TODO - Section Titles
	// TODO - Fade in Design Bullet Modules

?>
<div class="product-template">

	<section class="minimize-time section" data-name="minimize-time" id="minimize-time">

		<div class="grid-x align-center-middle">
			<div class="cell small-12">
				<div class="wrap the-bottom-line">
					<div class="line"></div>
					<div class="grid-x align-center-middle">
						<div class="cell small-12 medium-8 large-6">
							<div class="text-wrap text-center">
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

		<div class="grid-x align-middle align-spaced">
			<div class="cell small-12 medium-6">
				<div class="image-wrap">
					<img src="<?php echo $minimize_data['product_image']; ?>" alt="" class="product-image">
					<img src="<?php echo $minimize_data['product_background_image']; ?>" alt="" class="product-background-image">
				</div>
			</div>
			<div class="cell small-12 medium-4 large-3">
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

	</section>
	<!--/minimize-time-->

	<section class="reliable-and-power-section" style="background: url('<?php echo $background; ?>')">

		<section class="reliable-construction section" data-name="reliable-construction" id="reliable-construction">

			<div class="grid-x align-center-middle">
				<div class="cell small-12 medium-5 large-5">
					<div class="bullet-list-wrap dark">
						<h3><?php echo $reliable_construction['bullet_list_title']; ?></h3>
						<ul>
							<?php

							foreach( $reliable_construction['bullet_list'] as $bullet):

								echo '<li>'.$bullet['bullet'].'</li>';

							endforeach;

							?>
						</ul>
					</div>
				</div>
			</div>

		</section>
		<!--/reliable construction-->

		<section class="power section" data-name="power" id="power">

			<div class="grid-container">
				<div class="grid-x align-middle align-right">
					<div class="cell small-12 medium-5">
						<div class="wrap">
							<img src="<?php echo $power['background_image'] ;?>" alt="">
							<div class="bullet-list-wrap dark">
								<h3><?php echo $power['bullet_list_title']; ?></h3>
								<ul>
									<?php

									foreach( $power['bullet_list'] as $bullet):

										echo '<li>'.$bullet['bullet'].'</li>';

									endforeach;

									?>
								</ul>
							</div>
						</div>
					</div>
				</div>
			</div>

		</section>
		<!--/power-->

	</section>
	<!--/reliable & power -->

	<section class="smallest-footprint section" data-name="smallest-footprint" id="smallest-footprint">

		<div class="grid-x align-middle space-between">

			<div class="cell small-12 medium-7 large-6 image">
				<div class="background-image" style="background:url('<?php echo $footprint['image'] ;?>')"></div>
			</div>

			<div class="cell small-12 medium-5 large-6">

				<div class="wrap">
					<div class="bullet-list-wrap">
						<h3><?php echo $footprint['bullet_list_title']; ?></h3>
						<ul>
							<?php

							foreach( $footprint['bullet_list'] as $bullet):

								echo '<li>'.$bullet['bullet'].'</li>';

							endforeach;

							?>
						</ul>
					</div>
				</div>

			</div>

		</div>

	</section>
	<!--/smallest footprint-->

	<section class="smooth-operating section" data-name="smooth-operating" id="smooth-operating" style="background: url('<?php echo $smoothest_operating['background_image']; ?>')">

		<div class="grid-x align-middle align-center">
			<div class="cell small-12 medium-8 large-4">
				<div class="wrap">
					<div class="bullet-list-wrap dark">
						<h3><?php echo $smoothest_operating['bullet_list_title']; ?></h3>
						<ul>
							<?php

							foreach( $smoothest_operating['bullet_list'] as $bullet):

								echo '<li>'.$bullet['bullet'].'</li>';

							endforeach;

							?>
						</ul>
					</div>
				</div>
			</div>
		</div>

	</section>
	<!--/smooth-operating-->

	<section class="designs section" data-name="designs" id="designs">

		<section class="multiple-design-configurations">

			<div class="grid-x align-center-middle">
				<div class="cell small-12 medium-6 large-5">
					<div class="image-wrap">
						<img src="<?php echo $designs['product_image']; ?>" alt="" class="product-background-image">
						<img src="<?php echo $designs['product_background_image']; ?>" alt="" class="product-image">
					</div>
				</div>
				<div class="cell small-12 medium-6 large-5">
					<div class="bullet-list-wrap">
						<h3><?php echo $designs['bullet_list_title']; ?></h3>
						<ul>
							<?php

							foreach( $designs['bullet_list'] as $bullet):

								echo '<li>'.$bullet['bullet'].'</li>';

							endforeach;

							?>
						</ul>
					</div>
				</div>
			</div>
		</section>
		<!--/multiple-design-configurations-->

		<section class="bullets bullets-large">

			<div class="grid-x align-middle align-center">
				<div class="cell small-12 medium-6 large-6">
					<div class="bullet-list-wrap">
						<ul>
							<?php

							foreach( $modules_bullet_list as $bullet):

								echo '<li>'.$bullet['bullet'].'</li>';

							endforeach;

							?>
						</ul>
					</div>
				</div>
				<div class="cell small-12 medium-6 large-6">
					<div class="background-image text-right" style="background: url('<?php echo $modules_background_image; ?>')">
						<img src="<?php echo $modules_product_image_b; ?>" alt="" class="product-background-image">
					</div>
					<div class="bullet-list-wrap">
						<ul>
							<?php

							foreach( $modules_bullet_list_b as $bullet):

								echo '<li>'.$bullet['bullet'].'</li>';

							endforeach;

							?>
						</ul>
					</div>
				</div>
				</div>
			</div>

		</section>

	</section>
	<!--/designs-->

</div>

<?php
get_template_part( 'template-parts/footer' );
?>

<div class="parallax-nav">
	<div class="wrap">
		<h5>Pumps</h5>
		<div class="labels">
			<span data-name="minimize-time">Minimize Time</span>
			<span data-name="reliable-construction">Reliable Construction</span>
			<span data-name="power">Power</span>
			<span data-name="smallest-footprint">Smallest Footprint</span>
			<span data-name="smooth-operating">Smooth Operating</span>
		</div>
		<div class="indicators">
			<div class="indicators-wrap">
				<span data-name="minimize-time"></span>
				<span data-name="reliable-construction"></span>
				<span data-name="power"></span>
				<span data-name="smallest-footprint"></span>
				<span data-name="smooth-operating"></span>
			</div>
		</div>
	</div>
	<div class="wrap">
		<h5>Modules</h5>
		<div class="labels">
			<span data-name="designs">Designs</span>
		</div>
		<div class="indicators">
			<div class="modules indicators-wrap">
				<span data-name="designs"></span>
			</div>
		</div>
	</div>
</div>
