<?php
/**
 * Template Name: Two-Column w/Profile Photo
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
 *
 * @package jmoore
 */

get_header(); ?>

<section class="about-section">
	<div class="container">

		<div class="sidebar">
			<img class="headshot" src="<?php echo esc_url(get_template_directory_uri()); ?>/img/headshot.jpg" alt="">
		</div> <!-- /.sidebar -->

		<div class="main-content">
			<?php the_content(); ?>
		</div> <!-- /.main-content -->

	</div> <!-- /.container -->
</section> <!-- /.about-section -->



<?php get_footer(); ?>
