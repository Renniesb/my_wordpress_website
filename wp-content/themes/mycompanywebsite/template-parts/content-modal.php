	<!--============================
	=          Modal Section       =
	=============================-->


	<?php $loop = new WP_Query(array('post_type' => 'project', 'orderby' => 'post_id' , 'order' => 'ASC')); ?>
    <?php $modal_num = 1; ?>
    <?php while ($loop->have_posts()) : $loop->the_post(); ?>
    	<?php

    		$modal_body = get_field('modal_body');

    	 ?>


	    <!-- Modal 1-->
		<div class="modal fade" id="project<?php echo $modal_num; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
		  <div class="modal-dialog">
		    <div class="modal-content">
		      <div class="modal-header">
		        <h3 class="modal-title"><?php echo the_title(); ?></h3>
		      </div>
		      <div class="modal-body">
		       <br>
		       <?php echo $modal_body; ?>
		      </div>
		      <div class="modal-footer">
		        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
		      </div>
		    </div>
		  </div>
		</div>

	    <?php $modal_num++; ?>

    <?php endwhile; wp_reset_query(); ?>