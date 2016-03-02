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

	<div class="full-news-article-container">

		<section class="full-news-article generic-post">
			<div class="container">

			<?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>
			
				<article>

					<div class="media-container">
						<?php the_post_video() ?>
						<?php the_post_thumbnail(); ?>
					</div> <!-- /.media-container -->
					
					<div class="news-post-content generic-post-content">
						<h1><?php the_title(); ?></h1>

						<div>
							<?php the_field('details-news'); ?>
						</div>

						<span>by <?php the_author(); ?></span>
					</div> <!-- /.summary -->
				</article>
			
			<?php endwhile; ?>

			</div> <!-- /.container -->
		</section> <!-- /.full-article -->
	</div> <!-- /.full-article-container -->

<?php get_footer(); ?>
