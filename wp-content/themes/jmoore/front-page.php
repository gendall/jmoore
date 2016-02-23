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

	<?php
	query_posts(array(
		'showposts' => -1,  // -1 brings all books, otherwise it will bring the value define in wp settings, default is 10.
		'post_type' => array('post', 'books', 'news', 'ahoy'),
	));

	while(have_posts()) : the_post(); //start the loop to print book list

		if(get_field('featured_post')):
	?>

		<div class="featured-story">

		<?php if( 'news' == get_post_type() ): ?>

			<div class="img-container">
			</div>

			<div class="content-container">
				<h2>News: <?php the_title(); ?></h2>
				<hr class="purple-hr">
				<a href="<?php the_permalink() ?>" title="Permanent Link to <?php the_title_attribute(); ?>">Learn More<i class="icon icon-dbl-arrow-pink"></i></a>
			</div>

			<?php
			elseif('post' == get_post_type()):
			?>

			<div class="img-container">
			</div>

			<div class="content-container">
				<h2>Blog: <?php the_title(); ?></h2>
				<hr class="purple-hr">
				<a href="<?php the_permalink() ?>" title="Permanent Link to <?php the_title_attribute(); ?>">Learn More<i class="icon icon-dbl-arrow-pink"></i></a>
			</div>

			<?php
			elseif('ahoy' == get_post_type()):
			?>

			<div class="img-container">
			</div>

			<div class="content-container">
				<h2>Ahoy: <?php the_title(); ?></h2>
				<hr class="purple-hr">
				<a href="<?php the_permalink() ?>" title="Permanent Link to <?php the_title_attribute(); ?>">Learn More<i class="icon icon-dbl-arrow-pink"></i></a>
			</div>

			<?php
			elseif('books' == get_post_type()):
			?>

			<div class="img-container">
			</div>

			<div class="content-container">
				<h2>Books: <?php the_title(); ?></h2>
				<hr class="purple-hr">
				<a href="<?php the_permalink() ?>" title="Permanent Link to <?php the_title_attribute(); ?>">Learn More<i class="icon icon-dbl-arrow-pink"></i></a>
			</div>

			<?php endif; ?>
		</div> <!-- /.featured-story -->
	 <?php endif; ?>

	<?php endwhile; ?>
	<?php wp_reset_postdata(); // reset the loop. ?>

	</div> <!-- /.container -->
</section> <!-- /.featured-stories -->

<?php get_footer(); ?>
