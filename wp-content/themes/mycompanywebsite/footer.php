<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package my_company_website
 */

?>
<!-- BOOTSTRAP CORE JAVASCRIPT
	 Placed at the end of the document so the pages
	 load faster!
================================================== -->
<?php $loop = new WP_Query(array('post_type' => 'request_form', 'orderby' => 'post_id' , 'order' => 'ASC'));?>

<?php while ($loop->have_posts()) : $loop->the_post(); ?>
	<div id="quote" class="container bottom">
		<div class="row" id="primary">
			<div class="col-sm-12">

				<h1 class="title2 text-center"><?php the_title(); ?></h1>
				<section class="main-content">

						<?php the_content(); ?>

				</section><!-- main content -->

			</div><!-- content -->

		</div><!-- row -->

	</div><!-- container -->
<?php endwhile; ?>

<div class="container">
	<div class="row">
		<div class="col-sm-3">
			<p> <?php echo bloginfo('name'); ?> &copy; <?php echo date('Y'); ?></p>
		</div><!-- end col -->
	</div>
</div>
<script type="text/javascript" src="http://www.skypeassets.com/i/scom/js/skype-uri.js"></script>
<script src="<?php bloginfo('template_directory'); ?>/assets/js/jquery-1.11.1.min.js"></script>
<script src="<?php bloginfo('template_directory'); ?>/assets/js/bootstrap.min.js"></script>
<script src="<?php bloginfo('template_directory'); ?>/assets/js/main.js"></script>


<?php wp_footer(); ?>

</body>
</html>
