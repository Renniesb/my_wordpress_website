<?php
/**

Template Name: Services

 */

$thumbnail_url = wp_get_attachment_url( get_post_thumbnail_id( $post->ID) );

get_header(); ?>

	<!--=======================
	=      FEATURE IMAGE       =
	========================-->

	<?php if (has_post_thumbnail()) {//check for feature image ?>

	<section class="feature-image" style="background: url('<?php echo $thumbnail_url; ?>') no-repeat; background-size: cover;" data-type="background" data-speed="2">
		<h1 class="page-title"><?php the_title(); ?></h1>
	</section>

	<?php } ?>




	<!--==================================
	=            MAIN CONTENT            =
	===================================-->
	<div class="container" id="services">

		<div class="row">

			<div class="col-sm-12">

				<section class="main-content">

						<?php while ( have_posts() ) : the_post(); ?>
							<?php the_content(); ?>
						<?php endwhile; wp_reset_query();   ?>

						<hr>

						<?php $loop = new WP_Query(array('post_type' => 'service', 'orderby' => 'post_id' , 'order' => 'ASC')); ?>



					<div class="service-row clearfix">
						<?php while ($loop->have_posts()) : $loop->the_post(); ?>


						<div class="service">

							<?php if (has_post_thumbnail()) {
								//check for feature image
								the_post_thumbnail('', array( 'class' => 'center-block img-responsive featured-image rounded-corners' ));
							} ?>

							<h3><?php the_title(); ?></h3>

							<?php the_content(); ?>


						</div><!-- service -->

						<?php endwhile; wp_reset_query(); ?>

					</div><!-- service-row  -->


				</section><!-- main-content -->

			</div><!-- content -->



		</div><!-- row -->

	</div><!-- container -->


<?php get_footer(); ?>