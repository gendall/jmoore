<?php
/**
 * The main template file.
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package jmoore
 */

get_header(); ?>  

	<section class="blog-landing">
		<div class="container">

			<h1 class="main-page-title"><?php the_title(); ?></h1>

			<?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>

			<article>
			<h1 class="title">
				<a href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a>
			</h1>

			<?php if ( has_post_video() ): ?>

			<div class="media-container-video media-container">
				<?php the_post_video(); ?>
			</div> <!-- /.media-container-video -->

			<?php elseif ( has_post_thumbnail() ): ?>

			<div class="media-container-photo media-container">
				<?php the_post_thumbnail(); ?>
			</div> <!-- /.media-container-photo -->

			<?php endif; ?>

			<div class="summary bleep">
				<?php the_excerpt(); ?>
				<span class="author">author: <?php the_author(); ?></span>
			</div>
		</article>

			<?php endwhile; ?>

		</div>
	</section> <!-- /.blog-landing -->

<?php get_footer(); ?>
