<?php
/**
 * Template Name: Blog Index
 *
 * @package jmoore
 */

get_header(); ?>  

	<section id="blogPosts">

		<?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>
		<article>
			<div class="featured-media-container">
				<?php the_post_video() ?>
				<a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_post_thumbnail(); ?></a>
			</div>
			<div class="summary">
				<h1 class="blogTitle"><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_title(); ?></a></h1>
				<?php the_excerpt(); ?>
				<span class="theDate">by <?php the_author(); ?></span>
			</div>
		</article>
		<?php endwhile; ?>
	</section> <!-- /#blogPosts -->

<?php get_footer(); ?>