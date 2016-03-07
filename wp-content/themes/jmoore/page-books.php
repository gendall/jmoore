<?php
/**
 * The template for displaying the book page.
 *
 * This is the template that displays all books/short stories on book page
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
 *
 * @package jmoore
 */

get_header(); ?>

	<section class="tabs-section">
		<div class="container">

			<ul class="tabs">
				<li>
					<a id="novels" class="book-tab current">
						<span>Novels</span>
					</a>
				</li>
				<li>
					<a id="short-stories" class="book-tab">
						<span>Short Stories</span>
					</a>
				</li>
			</ul>

		</div> <!-- /.container -->
	</section> <!-- /.tabs-section -->

	<section class="novels-section book-section">
		<div class="container">

			<?php
			$Books = new WP_Query( array(
				'post_type' => 'books',
			));

			while($Books->have_posts()) : $Books->the_post(); //start the loop to print book list

			if( get_field( 'book_category' ) == 'Novel'):
			?>

			<div class="novel-summary">
				<div class="column-one">
					<img src="<?php the_field('book_cover_photo'); ?>" alt="Book Image">
				</div> <!-- /.column-one -->

				<div class="column-two">
					<h4><?php the_title(); ?></h4>
					<hr class="purple-hr">
					<p><?php the_field('book_summary'); ?></p>
					<a class="links link-continueReading" href="<?php echo esc_url( get_permalink() );?>">Continue Reading<i class="icon-dbl-arrow-pink"></i></a>
				</div> <!-- /.column-two -->

				<div class="column-three">

					<?php
					if( have_rows('book_buy_now_links') ):

						while( have_rows('book_buy_now_links') ): the_row();
					?>
					<p><a class="btn-buynow" href="<?php the_sub_field('book_sellers_url'); ?>"><?php the_sub_field('book_sellers_name'); ?></a></p>
					<?php
						endwhile;
					endif;
					?>
				</div> <!-- /.column-three -->
			</div> <!-- .novel-summary -->

			<?php endif; ?>
			<?php endwhile; ?>

		</div> <!-- /.container -->
	</section> <!-- /.novels-section -->

	<section class="short-stories-section book-section">
		<div class="container">

			<?php

			while($Books->have_posts()) : $Books->the_post(); 

			if( get_field( 'book_category' ) == 'Short Story'): ?>


			<div class="short-story-summary">
				<div class="column-one">
					<img src="<?php the_field('book_cover_photo'); ?>" alt="Book Image">
				</div> <!-- /.column-one -->

				<div class="column-two">
					<h4><?php the_title(); ?></h4>
					<hr class="purple-hr">
					<p><?php the_field('book_summary'); ?></p>
					<a class="links link-continueReading" href="<?php echo esc_url( get_permalink() );?>">Continue Reading<i class="icon-dbl-arrow-pink"></i></a>
				</div> <!-- /.column-two -->

				<div class="column-three">
					
					<?php
					if( have_rows('book_buy_now_links') ):

						while( have_rows('book_buy_now_links') ): the_row();
					?>
							
							<p><a href="<?php the_sub_field('book_sellers_url'); ?>"><?php the_sub_field('book_sellers_name'); ?></a></p>
					​
					<?php
						endwhile;
					endif;
					?>
				</div> <!-- /.column-three -->
			</div> <!-- /.short-story-summary -->


			<?php endif; ?>
			<?php endwhile; // end of the loop. ?>
			<?php wp_reset_postdata(); // reset the loop. ?>


		</div> <!-- /.container -->
	</section> <!-- /.short-stories-section -->

<?php get_footer(); ?>
