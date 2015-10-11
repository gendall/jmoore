<?php
/**
 * Template Name: Blog Index
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

		<section id="blogPosts">
			<div class="gridSizer"></div>
			<div class="gutterSizer"></div>
			<?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>
			<article>
				<div class="media-container">
					<?php // the_post_video() ?>
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