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
<div class="product-template parallax">

	<section class="minimize-time parallax__group">

		<div class="the-bottom-line parallax__layer parallax__layer--back">

			<div class="grid-container">
				<div class="grid-x align-center-middle">
					<div class="cell small-12">
						<div class="wrap">
							<div class="line"></div>
							<div class="grid-x align-center-middle">
								<div class="cell small-12 medium-8 large-6">
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

	<section class="minimize-time-product parallax__group" data-name="minimize-time" id="minimize-time">

		<div class="product drilling parallax__layer parallax__layer--back">

			<div class="grid-x align-middle">
				<div class="cell small-12 medium-6">
					<div class="image-wrap">
						<img src="<?php echo $minimize_data['product_image']; ?>" alt="" class="product-image">
						<img src="<?php echo $minimize_data['product_background_image']; ?>" alt="" class="product-background-image">
					</div>
				</div>
				<div class="cell small-12 medium-6 large-3">
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
		<!--/minimize-time-product-->

	</section>

	<section class="reliable-construction parallax__group" data-name="reliable-construction" id="reliable-construction">

		<div class="parallax__layer parallax__layer--base bullets-layer">
			<div class="grid-container">
				<div class="grid-x align-center-middle">
					<div class="cell small-12 medium-8 large-5">
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
			</div>
		</div>

	</section>
	<!--/reliable-construction-->

	<!-- TODO - need to slow this down -->

	<section class="power parallax__group" data-name="power" id="power">

		<div class="parallax__layer parallax__layer--base bullets-layer">
			<div class="grid-x align-middle">
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

	<section class="background background-one parallax__group">
		<div class="parallax__layer parallax__layer--back">
			<div class="background-image" style="background: url('<?php echo $background; ?>')"></div>
		</div>
	</section>
	<!--/background-->

	<section class="smallest-footprint parallax__group" style="background:url('<?php echo $footprint['image'] ;?>')" data-name="smallest-footprint" id="smallest-footprint">

		<div class="parallax__layer parallax__layer--back">
			<div class="grid-x align-center">
				<div class="cell small-12 medium-8 large-4">
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
		</div>

	</section>
	<!--/smallest footprint-->

	<section class="smoothest-operating parallax__group" data-name="smoothest-operating" id="smoothest-operating">

		<div class="parallax__layer parallax__layer--back">
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
		</div>


	</section>
	<!--/smooth operating-->

	<section class="background background-two parallax__group">
		<div class="parallax__layer parallax__layer--back">
			<div class="background-image" style="background: url('<?php echo $smoothest_operating['background_image']; ?>')"></div>
		</div>
	</section>
	<!--/background-->

	<section class="parallax__group">

		<div class="parallax__layer parallax__layer--back designs" data-name="designs" id="designs">

			<div class="grid-x">
				<div class="cell small-12 medium-6">
					<div class="image-wrap">
						<img src="<?php echo $designs['product_image']; ?>" alt="" class="product-image">
						<img src="<?php echo $designs['product_background_image']; ?>" alt="" class="product-background-image">
					</div>
				</div>
				<div class="cell small-12 medium-6 large-3">
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

		</div>
		<!--/designs-->
	</section>

	<section class="parallax__group">

		<div class="parallax__layer parallax__layer--base modules-bullet-list" data-name="designs">

			<div class="grid-container">
				<div class="grid-x align-center-middle">
					<div class="cell small-12 medium-6 large-4">
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
					<div class="cell small-12 medium-8">
						<div class="image-wrap">
							<img src="<?php echo $modules_product_image_b; ?>" alt="" class="product-image">
							<img src="<?php echo $modules_background_image; ?>" alt="" class="product-background-image">
						</div>
					</div>
				</div>
			</div>

		</div>

	</section>
	<!--/bullet list-->

	<section class="bullet-list-b parallax__group" style="background:url('<?php echo $modules_product_image ;?>')" data-name="designs">

		<div class="parallax__layer parallax__layer--back">
			<div class="grid-x align-center">
				<div class="cell small-12 medium-8 large-6">
					<div class="wrap">
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
		</div>

	</section>
	<!--/bullet list b-->

<?php
get_template_part( 'template-parts/footer' );
?>

</div>

<div class="parallax-nav">
	<div class="wrap">
		<h5>Pumps</h5>
		<div class="labels">
			<span data-name="minimize-time">Minimize Time</span>
			<span data-name="reliable-construction">Reliable Construction</span>
			<span data-name="power">Power</span>
			<span data-name="smallest-footprint">Footprint</span>
			<span data-name="smoothest-operating">Smooth Operating</span>
		</div>
		<div class="indicators">
			<div class="indicators-wrap">
				<span data-name="minimize-time"></span>
				<span data-name="reliable-construction"></span>
				<span data-name="power"></span>
				<span data-name="smallest-footprint"></span>
				<span data-name="smoothest-operating"></span>
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
