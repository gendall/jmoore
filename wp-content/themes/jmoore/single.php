<?php
/**
 * The template for displaying full blog posts.
 *
 * This is the template that displays full blog posts by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
 *
 * @package jmoore
 */

get_header(); ?>  


	<div class="full-article-container">

		<section class="full-article">

			<div class="gridSizer"></div>
			<div class="gutterSizer"></div>

			<?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>
			
			<article>
				<div class="media-container">
					<?php the_post_video() ?>
					<a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_post_thumbnail(); ?></a>
				</div> <!-- /.media-container -->
				
				<div class="summary">
					<h1 class="blogTitle"><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_title(); ?></a></h1>
					<?php the_content(); ?>
					<span class="theDate">by <?php the_author(); ?></span>
				</div> <!-- /.summary -->
			</article>
			
			<?php endwhile; ?>

		</section> <!-- /.full-article -->
	</div> <!-- /.full-article-container -->


<?php get_footer(); ?>