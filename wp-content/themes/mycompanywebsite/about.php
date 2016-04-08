<?php
/**

Template Name: About

 */

$experience = get_field('experience');
$experiencetext = get_field('experience_text');
$why = get_field('why');
$whytext = get_field('why_text');
$testimonial_title = get_field('testimonial_title');

$thumbnail_url = wp_get_attachment_url( get_post_thumbnail_id( $post->ID) );

get_header(); ?>


	<div class="bg-blue">
		<div class="container">
			<div class="row">

				<div class="col-xs-4 col-sm-2 col-lg-1">
					<img class="pages-logo img-responsive" src="<?php bloginfo('stylesheet_directory'); ?>/assets/img/mouse_logo.jpg"  alt="my logo image">
				</div>

				<div class=" col xs-8 col-sm-10 col-lg-11">
					<h3 class="pages-title"><strong>About Rennie Bevineau</strong></h3>
					<h4 class="pages-title">Front-End Web Developer</h4>
				</div>
			</div> <!-- end of row -->
		</div> <!-- end of container -->
	</div> <!-- end of color box -->


	<div class="container" id="about">
		<div class="row">
			<div class="col-sm-6">
				<h2><strong><?php echo $experience; ?></strong></h2>
				<p class="lead">
					<?php echo $experiencetext; ?>
				</p>

			</div>

			<?php if (has_post_thumbnail()) {//check for feature image ?>
				<div class="col-sm-6">
					<img class="img-responsive" src="<?php echo $thumbnail_url; ?>" alt="Photo of Rennie" id="my-image">
				</div>
			<?php } ?>
		</div> <!-- end of first row of main content -->


		<div class="row">
			<div class="col-sm-8">
				<h2><strong><?php echo $why; ?></strong></h2>
					<p class="lead">
						<?php echo $whytext; ?>
					</p>
			</div>
		</div>

	</div>

	<!--==================================
	=            TESTIMONIALS            =
	===================================-->
	<section id="kudos">
		<div class="container">
			<div class="row">
				<div class="col-sm-8 col-sm-offset-2">

					<h2><?php echo $testimonial_title; ?></h2>

					<?php $loop = new WP_Query(array('post_type' => 'testimonial', 'orderby' => 'post_id' , 'order' => 'ASC')); ?>
					<?php while ($loop->have_posts()) : $loop->the_post(); ?>

					<!-- TESTIMONIAL -->
					<div class="row testimonial">
						<div class="col-sm-4">
							<?php

								if (has_post_thumbnail()) {
									//check for feature image
									the_post_thumbnail( array(200, 200));
								}

							 ?>
						</div><!-- end col -->

						<div class="col-sm-8">
							<blockquote>
								<?php the_content(); ?>
								<cite>&mdash; <?php the_title(); ?></cite>
							</blockquote>
						</div><!-- end col -->
					</div><!-- row -->

					<?php endwhile; wp_reset_query();?>


				</div><!-- end col -->

			</div><!-- row -->

		</div><!-- container -->


	</section><!-- kudos -->



<?php get_footer(); ?>
