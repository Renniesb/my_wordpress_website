

<!--==============================
=            Services            =
===============================-->

<div class="row">

      <div class="col-xs-12">
        <h2 class="title2">Services</h2>
      </div>
</div>


<?php $loop = new WP_Query(array('post_type' => 'service', 'orderby' => 'post_id' , 'order' => 'ASC')); ?>

<div class="row"><!-- service row -->

	<?php while ($loop->have_posts()) : $loop->the_post(); ?>

		<div class="col-sm-4">
		<?php

			if (has_post_thumbnail()) {
				//check for feature image
				the_post_thumbnail('', array( 'class' => 'center-block img-responsive featured-image rounded-corners' ));
			}

		?>
		<h3 class="text-center"><strong><?php the_title(); ?></strong></h3>
		</div><!-- end col -->

	<?php endwhile; wp_reset_query();?>

</div><!-- end service row -->

