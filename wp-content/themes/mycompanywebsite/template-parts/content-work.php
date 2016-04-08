<!--==========================
=            Work            =
===========================-->


    <div class="row">

      <div class="col-md-12">
        <h2 class="title2">Featured Work</h2>
      </div>
    </div>

	<!--=====================================
	=            Project Section            =
	======================================-->


    <?php $loop = new WP_Query(array('post_type' => 'project', 'orderby' => 'post_id' , 'order' => 'ASC')); ?>
    <?php $modal_num = 1; $col_num = 0;?>
    <?php while ($loop->have_posts()) : $loop->the_post(); ?>


    	<?php

    		$project_image = get_field('project_image');
    		$link_name = get_field('link_name');
    		$url = get_field('url');
    		$modal_body = get_field('modal_body');

    	 ?>

    	 <?php if ($col_num == 0) :?>
    	 	<div class="row text-center">
    	 		<div class="col-sm-4">
			        <img class="center-block img-responsive featured-image rounded-corners" src="<?php echo $project_image[url];?>" alt="<?php echo $project_image[alt]; ?>" data-toggle="modal" data-target="#project<?php echo $modal_num; ?>">
			        <h4>Click photo for more info</h4>
			        <h2 class="space"><?php the_title(); ?></h2>

			        <p  class="link"><a href="<?php echo $url; ?>">link: <?php echo $link_name; ?></a></p>
	    		</div>


		<?php elseif ($col_num % 3 == 0): ?>

			</div>

    	 	<div class="row text-center">
    	 		<div class="col-sm-4">
			        <img class="center-block img-responsive featured-image rounded-corners" src="<?php echo $project_image[url];?>" alt="<?php echo $project_image[alt]; ?>" data-toggle="modal" data-target="#project<?php echo $modal_num; ?>">
			        <h4>Click photo for more info</h4>
			        <h2 class="space"><?php the_title(); ?></h2>

			        <p class="link"><a href="<?php echo $url; ?>">link: <?php echo $link_name; ?></a></p>
	    		</div>

		    <?php else: ?>
		    	<div class="col-sm-4">
			        <img class="center-block img-responsive featured-image rounded-corners" src="<?php echo $project_image[url];?>" alt="<?php echo $project_image[alt]; ?>" data-toggle="modal" data-target="#project<?php echo $modal_num; ?>">
			        <h4>Click photo for more info</h4>
			        <h2 class="space"><?php the_title(); ?></h2>

			        <p class="link"><a href="<?php echo $url; ?>">link: <?php echo $link_name; ?></a></p>
			    </div>
			<?php endif; ?>

		<?php $col_num++; ?>
	    <?php $modal_num++; ?>

    <?php endwhile; wp_reset_query(); ?>

    </div>
