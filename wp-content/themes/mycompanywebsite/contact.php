<?php
/**

Template Name: Contact

 */

$contact_section = get_field('contact_section');

$thumbnail_url = wp_get_attachment_url( get_post_thumbnail_id( $post->ID) );

get_header(); ?>

	<div class="bg-blue">
		<div class="container">
			<div class="row">

				<div class="col-sm-12">
					<img class="pages-logo" src="<?php bloginfo('stylesheet_directory'); ?>/assets/img/mouse_logo.jpg"  alt="my logo image">
					<h2><strong>Contact</strong></h2>
				</div>
			</div> <!-- end of row -->
		</div> <!-- end of container -->
	</div> <!-- end of color box -->


	<div class="container" id="contact">
		<div class="row">
			<div class="col-sm-5 col-sm-offset-1">
				<h2><strong><?php echo $contact_section; ?></strong></h2>

				<?php if (has_post_thumbnail()) {
					//check for feature image
					the_post_thumbnail('', array( 'class' => 'center-block img-responsive featured-image tie-photo' ));
				} ?>

				<?php $loop = new WP_Query(array('post_type' => 'contact_info', 'orderby' => 'post_id' , 'order' => 'ASC')); ?>




				<?php while ($loop->have_posts()) : $loop->the_post(); ?>
					<?php $details = get_field('details'); ?>
					<?php $link = get_field('contact_link'); ?>

					<p class="link"><strong><?php echo the_title(); ?></strong> <a href="<?php echo $link; ?>" target="_blank"><?php echo $details; ?></a></p>
				<?php endwhile; wp_reset_query(); ?>


			</div>
			<div class="col-sm-6">
				<iframe src="https://calendly.com/rsbevineau/" style="width:100%; height:280px;" frameBorder="0" scrolling="yes"></iframe>
			</div>

		</div> <!-- end of main content -->

	</div>


<?php get_footer(); ?>