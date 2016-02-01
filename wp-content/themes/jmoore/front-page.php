<?php
/**
 * The template for displaying all pages.
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
 *
 * @package jmoore
 */

get_header();?>


<section class="carousel">
	<div class="container">

		<ul class="bxslider">

		<?php
		$Slides = new WP_Query(array(
			'showposts'   => -1,  // -1 brings all slides, otherwise it will bring the value define in wp settings, default is 10.
			'post_type'   => 'slides'
		));

		while($Slides->have_posts()) : $Slides->the_post(); //start the loop to print book list
		?>

			<li>
				<img src="<?php the_field('carousel_bg_image'); ?>" alt="Book Image">
				<div class="slide-content <?php the_field('carousel_orientation'); ?>">
					<h1><?php the_field('carousel_message') ?></h1>
					<a class="btn pink-btn" href="<?php the_field('carousel_link_url'); ?>"><?php the_field('carousel_link_text'); ?> &raquo;</a>
				</div>
			</li>

		<?php endwhile; // end of the loop. ?>
		<?php wp_reset_postdata(); // reset the loop. ?>

		</ul>

	</div> <!-- /.container -->
</section> <!-- /.hero-carousel -->

<section class="featured-stories">
	<div class="container">

		<div class="featured-story">

			<div class="img-container">
				<img src="<?php echo esc_url(get_template_directory_uri()); ?>/img/featured-img-1.jpg" alt="">
			</div> <!-- /.img-container -->

			<div class="content-container">
				<h2>Education Week at BYU</h2>
				<hr class="purple-hr">
				<p>August 18-21</p>
				<p>I’m signing in the bookstore.</p>
				<a href="#">Learn More<i class="icon icon-dbl-arrow-pink"></i></a>
			</div> <!-- /.content-container -->

		</div> <!-- /.column-1 -->

		<div class="featured-story">

			<div class="img-container">
				<img src="<?php echo esc_url(get_template_directory_uri()); ?>/img/featured-img-2.jpg" alt="">
			</div> <!-- /.img-container -->

			<div class="content-container">
				<h2>Reserve your copy of Simply Anna</h2>
				<hr class="purple-hr">
				<p>Simply Anna will be released on September 1st! Be sure to reserve you copy.</p>
				<a href="#">Learn More<i class="icon icon-dbl-arrow-pink"></i></a>
			</div> <!-- /.content-container -->

		</div> <!-- /.column-2 -->

	</div> <!-- /.container -->
</section> <!-- /.featured-stories -->


<?php get_footer(); ?>
