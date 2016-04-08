<?php
/**
 * The template for displaying 404 pages (not found).
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package Bootstrap_to_WordPress
 */

get_header(); ?>

	<section class="feature-image feature-image-default-alt" data-type="background" data-speed="2">
		<h1 class="page-title">Bummer! That page can't be found.</h1>
	</section>

	<div class="container">


		<div id="primary" class="row">
			<main id="content" class="col-sm-8">
				<div class="error-404 not-found">
					<div class="page-content">
						<h2>Don't fret! Let's get you back on track</h2>

						<!--===============================
						=            Services            =
						================================-->
						<h3>Services</h3>
						<p>Perhaps you were looking for the services we offer?</p>

						<?php $loop = new WP_Query(array('post_type' => 'service', 'orderby' => 'post_id' , 'order' => 'ASC')); ?>
						<div class="service-row clearfix">
						<?php while ($loop->have_posts()) : $loop->the_post(); ?>


						<div class="service">

							<?php if (has_post_thumbnail()) {
								//check for feature image
								the_post_thumbnail('', array( 'class' => 'center-block img-responsive featured-image rounded-corners' ));
							} ?>

							<h3><?php the_title(); ?></h3>


							<?php the_excerpt(); ?>

							<?php endif; ?>


						</div><!-- service -->

						<?php endwhile; ?>

					</div><!-- service-row  -->
					<!--================================
					=            CATEGORIES            =
					=================================-->
					<h3>Categories</h3>
					<p>...or maybe a popular category?</p>

					<div class="widget widget_categories">
						<h4 class="widget-title">Most Used Categories</h4>
						<ul>
							<?php wp_list_categories(array(

								'orderby'	=> 'count',
								'order'		=> 'DESC',
								'show_count'=> 1,
								'title_li'	=> '',
								'number'	=> 10


							)) ?>
						</ul>
					</div><!-- .widget -->

					<!--================================
					=            Archives          =
					=================================-->
					<h3>Archives</h3>
					<p>You can always sort through our archives...</p>
					<?php the_widget('WP_Widget_Archives','title=Our Archives','before_title=<h4 class="widgettitle">&after_title=</h4'); ?>

					<p>...or, just head back to the <a href=" <?php echo esc_url(home_url('/')); ?> ">home page</a>.</p>


					</div><!-- .page-content -->

				</div><!-- .error-404 -->

			</main><!-- #content -->
			<!--=============================
			=            Sidebar            =
			==============================-->

			<aside class="col-sm-4">
				<?php get_sidebar(); ?>
			</aside>


		</div><!-- primar -->


	</div><!-- .container -->

<?php get_footer();
