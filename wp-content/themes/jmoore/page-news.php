<?php
/**
 * Template Name: News Index
 *
 * @package jmoore
 */

get_header(); ?>

<section id="newsPosts" class="news-landing">
	<div class="container">

		<h1 class="main-page-title"><?php the_title(); ?></h1>

		<?php
		$NewsAndEvents = new WP_Query(array(
			'showposts'   => -1,  // -1 brings all books, otherwise it will bring the value define in wp settings, default is 10.
			'post_type'   => 'news'
		));

		while($NewsAndEvents->have_posts()) : $NewsAndEvents->the_post(); // Start the loop to print news post types list.
		?>

		<article>
			<h2 class="news-date"><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_field('date-news'); ?></a></h2>
			<hr class="purple-hr">
			<p class="news-summary">
				<span class="news-title"><?php the_title(); ?></span> &nbsp;|&nbsp;
				<span><?php the_field('time-news'); ?></span> &nbsp;|&nbsp;
				<span><?php the_field('location-news'); ?></span>
			</p>
			<p class="details-news">
				<?php if(the_field('venue-news')): the_field('venue-news'); endif; ?> - 
				<?php the_field('details-news'); ?>
			</p>
			<a class="btn pink-btn" href="<?php echo esc_url( get_permalink() );?>">View Details &raquo;</a>
		</article>
		<?php endwhile; ?>
	</div>
</section> <!-- /#newsPosts -->

<?php get_footer(); ?>
