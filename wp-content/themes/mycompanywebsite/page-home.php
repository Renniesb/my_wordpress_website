<?php
/**

Template Name: Home Page

 */

$greeting = get_field('greeting');
$description_niche = get_field('description_niche');


get_header(); ?>


<!--================================
=            Header Bar            =
=================================-->

<div class="container" id="content">

    <div class="rounded-corners">
  		<div class="row" >

        <div class="col-xs-6">
          <img class="title-logo" src="<?php bloginfo('stylesheet_directory'); ?>/assets/img/mouse_logo-large.jpg" alt="my logo image" srcset="<?php bloginfo('stylesheet_directory'); ?>/assets/img/mouse_logo-small.jpg 320w, <?php bloginfo('stylesheet_directory'); ?>/assets/img/mouse_logo-medium.jpg 640w, <?php bloginfo('stylesheet_directory'); ?>/assets/img/mouse_logo-large.jpg 1024w" sizes="(min-width: 300px) 50vw, (min-width: 700px) 70vw, 100vw">
        </div>

        <div class="col-xs-6 text-right text-uppercase">
          <h1 class="title-super">Rennie Bevineau</h1>
          <h4 class="subtitle zero-bottom"><strong>Front-End Web Developer</strong></h4>
        </div>
      </div>
    </div>

    <div class="row">

      <div class="col-xs-12">
        <hr class="rounded-corners">
      </div>
    </div>

<!--==================================
=            Header Image            =
===================================-->



    <div class="row">

      <div class="col-xs-12">

        <img class="title-image center-block img-responsive rounded-corners" src="<?php bloginfo('stylesheet_directory'); ?>/assets/img/guell-cropped.jpg" alt="guell park image" srcset="<?php bloginfo('stylesheet_directory'); ?>/assets/img/guell-medium.jpg 320w, <?php bloginfo('stylesheet_directory'); ?>/assets/img/guell-medium.jpg 640w, <?php bloginfo('stylesheet_directory'); ?>/assets/img/guell-cropped.jpg 1024w" sizes="(min-width: 300px) 50vw, (min-width: 700px) 70vw, 100vw">
      </div>
    </div>

 <!--====================================
 =            Niche Overview            =
 =====================================-->

        <div class="panel panel-default hero-spacer rounded-corners">
            <div class="panel-heading">
                <h2><?php echo $greeting; ?></h2>
            </div>
            <div class="panel-body	">
                <p><?php echo $description_niche; ?></p>
                <p><a class="btn btn-primary btn-large">Read More</a>
                </p>
            </div>

        </div>

<!--==============================
=            Services            =
===============================-->

<div class="row">

      <div class="col-md-12">
        <h2 class="title2">Services</h2>
      </div>
</div>


<?php $loop = new WP_Query(array('post_type' => 'service', 'orderby' => 'post_id' , 'order' => 'ASC')); ?>

<div class="row"><!-- service row -->

	<?php while ($loop->have_posts()) : $loop->the_post(); ?>

		<div class="col-md-4">
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



<!--==========================
=            Work            =
===========================-->


    <div class="row">

      <div class="col-md-12">
        <h2 class="title2">Featured Work</h2>
      </div>
    </div>

    <div class="row text-center">

    <?php $loop = new WP_Query(array('post_type' => 'project', 'orderby' => 'post_id' , 'order' => 'ASC')); ?>
    <?php $modal_num = 1; ?>
    <?php while ($loop->have_posts()) : $loop->the_post(); ?>

    	<?php

    		$project_image = get_field('project_image');
    		$link_name = get_field('link_name');
    		$url = get_field('url');
    		$modal_body = get_field('modal_body');

    	 ?>
	    <div class="col-sm-4">
	        <img class="center-block img-responsive featured-image rounded-corners" src="<?php echo $project_image[url];?>" alt="<?php echo $project_image[alt]; ?>" data-toggle="modal" data-target="#project<?php echo $modal_num; ?>">
	        <h4>Click photo for more info</h4>
	        <h2 class="space"><?php the_title(); ?></h2>

	        <p><a class="link" href="<?php echo $url; ?>">link: <?php echo $link_name; ?></a></p>
	    </div>

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





<?php get_footer(); ?>
