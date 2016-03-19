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
			<?php if ( has_post_thumbnail() ):  ?>

				<div class="media-container-photo media-container">
					<?php the_post_thumbnail(); ?>
				</div> <!-- /.media-container-photo -->

			<?php endif; ?>
				
				<div class="news-post-content generic-post-content">
					<div class="event-heading">
						<h1><?php the_title(); ?></h1>
						<h4>
							<?php
							if(get_field('news_event_venue')) {
								$venue_val = the_field('news_event_venue');
								echo $venue_val . '&nbsp; | &nbsp;';
							}
							the_field('news_event_location');
							?>
						</h4>
					</div>

					<h5 class="news-date"><strong>Date:</strong> <?php the_field('news_event_date'); ?></h5>
					<h5 class="news-time"><strong>Time:</strong> <?php the_field('news_event_time'); ?></h5>

					<p><?php the_field('news_event_details'); ?></p>
					<?php the_content(); ?>
				
				</div> <!-- /.summary -->
			</article>
		
		<?php endwhile; ?>

		</div> <!-- /.container -->
	</section> <!-- /.full-article -->
</div> <!-- /.full-article-container -->

<?php get_footer(); ?>
