<?php
/**
 * Template Name: Blog Index
 *
 * @package jmoore
 */

get_header(); ?>  

<section class="blog-landing">
	<div class="container">
		<?php
		query_posts('category_name=Blog Posts');
		while (have_posts()) : the_post();
		?>
		<article>
			<h1 class="title"><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_title(); ?></a></h1>
			<div class="featured-media-container">
				<?php the_post_video() ?>
				<a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_post_thumbnail(); ?></a>
			</div>
			<div class="summary">
				<?php the_excerpt(); ?>
				<span class="author">author: <?php the_author(); ?></span>
			</div>
		</article>
		<?php endwhile; ?>
	</div>
</section> <!-- /#blogPosts -->

<?php get_footer(); ?>