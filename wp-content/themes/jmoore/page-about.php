<?php
/**
 * Template Name: About Page
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
 *
 * @package jmoore
 */

get_header(); ?>

<section class="about-landing">
	<div class="container">

		<div class="sidebar">
			<img class="headshot" src="<?php echo esc_url(get_template_directory_uri()); ?>/img/headshot.jpg" alt="">
		</div> <!-- /.sidebar -->

		<div class="main-content">
			<?php

			the_content();

			$faqs = new WP_Query(array(
				'showposts'   => -1,
				'post_type'   => 'faqs'
			));

			?>

			<ul class="faqs">
				<?php
				while($faqs->have_posts()) : $faqs->the_post(); // Start the loop to print faq list.
				?>
				<li>
					<h5 class="question"><?php the_title(); ?><i class="icon-faq-arrow"></i></h5>
					<div class="answer"><?php the_content(); ?></div>
				</li>
				<?php endwhile; ?>
			</ul>

		</div> <!-- /.main-content -->

	</div> <!-- /.container -->
</section> <!-- /.about-section -->



<?php get_footer(); ?>
