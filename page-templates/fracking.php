<?php

/*
  Template Name: Fracking
  */

get_template_part( 'template-parts/header' );

// page id
$page_id = get_queried_object_id();

// data
$fracking = get_field('fracking', $page_id);
$minimize_data = $fracking['minimize_time'];
$reliable_construction = $fracking['reliable_construction'];
$power = $fracking['power'];
$background = $fracking['background_image'];
$agma = $fracking['agma'];
$thunder = $fracking['thunder'];
$designs = $fracking['modules']['multiple_design_configurations'];
$modules_bullet_list = $fracking['modules']['bullet_list'];
$modules_bullet_title = $fracking['modules']['bullet_list_title'];
$modules_bullet_list_b = $fracking['modules']['bullet_list_b'];
$modules_bullet_title_b = $fracking['modules']['bullet_list_title_b'];
$modules_product_image = $fracking['modules']['product_image'];
$modules_product_image_b = $fracking['modules']['product_image_b'];
$modules_background_image = $fracking['modules']['background_image'];
$modules_background_image_b = $fracking['modules']['background_image_b'];
$modules_header = $fracking['modules']['header'];
$product_image_c = $fracking['modules']['product_image_c'];
$header_b = $fracking['modules']['header_b'];
$header_c = $fracking['modules']['header_c'];

// TODO - Section Titles
// TODO - Fade in Design Bullet Modules

?>
<div class="product-template parallax fracking">

	<section class="minimize-time parallax__group" id="minimize-time">

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

	<section class="minimize-time-product parallax__group" data-name="minimize-time">

		<div class="product drilling parallax__layer parallax__layer--back">

			<div class="grid-x align-middle">
				<div class="cell small-12 medium-6">
					<div class="image-wrap">
						<img src="<?php echo $minimize_data['product_image']; ?>" alt="" class="product-image">
						<img src="<?php echo $minimize_data['product_background_image']; ?>" alt="" class="product-background-image">
					</div>
				</div>
				<div class="cell small-12 medium-6 large-4">
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
			<div class="grid-x align-middle align-center">
				<div class="cell small-12 medium-6 large-4">
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

	</section>
	<!--/reliable-construction-->

	<!-- TODO - need to slow this down -->

	<section class="power parallax__group" data-name="power" id="power">

		<div class="parallax__layer parallax__layer--base bullets-layer">
			<div class="grid-x align-middle align-right">
				<div class="cell small-12 medium-5">
					<div class="wrap">
						<img src="<?php echo $power['product_background_image']; ?>" alt="" class="product-background-image"/>
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


	<section class="smallest-footprint parallax__group" style="background: url('<?php echo $background; ?>')" data-name="smallest-footprint" id="smallest-footprint">

		<div class="parallax__layer parallax__layer--base">
			<div class="grid-x align-middle align-center">
				<div class="cell small-12 medium-6 large-4">
					<div class="wrap">
						<div class="bullet-list-wrap">
							<h3><?php echo $agma['bullet_list_title']; ?></h3>
							<ul>
								<?php

								foreach( $agma['bullet_list'] as $bullet):

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

	<section class="smoothest-operating parallax__group" style="background: url('<?php echo $thunder['background_image']; ?>')" data-name="smoothest-operating" id="smoothest-operating">

		<div class="parallax__layer parallax__layer--base">
			<div class="grid-x align-middle align-center">
				<div class="cell small-12 medium-6 large-4">
					<div class="wrap">
						<div class="bullet-list-wrap dark">
							<h3><?php echo $thunder['bullet_list_title']; ?></h3>
							<ul>
								<?php

								foreach( $thunder['bullet_list'] as $bullet):

									echo '<li>'.$bullet['bullet'].'</li>';

								endforeach;

								?>
							</ul>
						</div>
						<div class="bullet-list-wrap header-list-wrap">
							<h3><?php echo $thunder['header'] ;?></h3>
						</div>
					</div>
				</div>
				<div class="cell small-12 medium-6 large-4">
					<img src="<?php echo $thunder['logo']; ?>" alt="" class="thunder-logo">
				</div>
			</div>
		</div>


	</section>
	<!--/smooth operating-->

	<section class="parallax__group reliablity">

		<div class="parallax__layer parallax__layer--back modules-bullet-list" data-name="reliablity" id="reliablity">
			<div class="grid-x">
				<div class="cell small-12 medium-6">
					<div class="bullet-list-wrap dark">
						<h3><?php echo $modules_bullet_title ;?></h3>
						<ul>
							<?php

							foreach( $modules_bullet_list as $bullet):

								echo '<li>'.$bullet['bullet'].'</li>';

							endforeach;

							?>
						</ul>
					</div>
				</div>
				<div class="cell small-12 medium-6">
					<div class="image-wrap">
						<img src="<?php echo $modules_product_image; ?>" alt="" class="product-image">
						<img src="<?php echo $modules_background_image; ?>" alt="" class="product-background-image">
					</div>
				</div>
			</div>
		</div>

	</section>
	<!--/bullet list-->

	<section class="bullet-list-b parallax__group" data-name="geometry" id="geometry">

		<div class="parallax__layer parallax__layer--back">
			<div class="grid-x align-middle">
				<div class="cell small-12 medium-6">
					<div class="wrap fracking-header">
						<div class="bullet-list-wrap header-list-wrap text-right">
							<h3><?php echo $modules_header ;?></h3>
						</div>
					</div>
				</div>
				<div class="cell small-12 medium-6">
					<div class="image-wrap">
						<img src="<?php echo $modules_product_image_b; ?>" alt="" class="product-image">
						<img src="<?php echo $modules_background_image_b; ?>" alt="" class="product-background-image">
					</div>
				</div>
			</div>
		</div>

	</section>
	<!--/bullet list b-->

	<section class="ease-of-maintenance parallax__group" style="background: url('<?php echo $product_image_c;?>')" data-name="ease-of-maintenance" id="ease-of-maintenance">
		<div class="parallax__layer parallax__layer--back">
			<div class="grid-x align-center">
				<div class="cell small-12 medium-6 large-4">
					<div class="wrap">
						<div class="bullet-list-wrap dark">
							<h3><?php echo $modules_bullet_title_b  ;?></h3>
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
	<!--/fracking-header-->

	<section class="header-b parallax__group" data-name="designs" id="designs">
		<div class="parallax__layer parallax__layer--back">
			<div class="grid-container">
				<div class="grid-x align-center">
					<div class="cell small-12 medium-9 large-7">
						<div class="bullet-list-wrap header-list-wrap">
							<h3><?php echo $header_b ;?></h3>
							<h3><?php echo $header_c ;?></h3>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>

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
			<span data-name="smallest-footprint">High Quality</span>
			<span data-name="smoothest-operating">Thunder</span>
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
			<span data-name="reliablity">Reliablity</span>
			<span data-name="geometry">Geometry</span>
			<span data-name="ease-of-maintenance">Maintenance</span>
			<span data-name="designs">Designs</span>
		</div>
		<div class="indicators">
			<div class="indicators-wrap">
				<span data-name="reliablity"></span>
				<span data-name="geometry"></span>
				<span data-name="ease-of-maintenance"></span>
				<span data-name="designs"></span>
			</div>
		</div>
	</div>
</div>
