<?php
/**
 * Template Name: Ahoy Index
 *
 * @package jmoore
 */

get_header(); ?>  

<section id="ahoyPosts" class="ahoy-landing">
	<div class="container">
		<?php
		query_posts( array( 'category_name' => 'Ahoy Posts' ) );
		while (have_posts()) : the_post();
		?>
		<article>
			<h1 class="blog-title">
				<a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_title(); ?></a>
			</h1>
			<div class="featured-media-container">
				<?php the_post_video() ?>
				<a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_post_thumbnail(); ?></a>
			</div>
			<div class="summary">
				<?php the_excerpt(); ?>
				<span class="blog-author">author: <?php the_author(); ?></span>
			</div>
		</article>
		<?php endwhile; ?>
	</div>
</section> <!-- /#ahoyPosts -->

<?php get_footer(); ?>