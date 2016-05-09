<?php
/**
 * Template Name: Ahoy Index
 *
 * @package jmoore
 */

get_header(); ?>  

<section class="ahoy-landing">
	<div class="container">

		<?php if( get_field( 'ahoy_landing_hero_image') ) : ?>

		<div class="ahoy-hero">
			<img src="<?php the_field( 'ahoy_landing_hero_image' ); ?>" alt="">
		</div>

		<?php
		endif;
		if ( get_field( 'ahoy_landing_summary' ) ) :
		?>

		<div class="ahoy-summary">
			<?php the_field( 'ahoy_landing_summary' ); ?>
		</div>

		<?php endif; ?>

		<div class="articles-container">

			<ul>

				<?php
				$paged = get_query_var('paged') ? get_query_var('paged') : 1;
				$wp_query = new WP_Query(array(
					'post_type' => 'ahoy-post-type',
					'showposts' => 5,
					'paged' => $paged
					)
				);
				wp_pagenavi();
				while ($wp_query->have_posts()) : $wp_query->the_post();
				?>

				<li>
					<article>
						<?php if ( has_post_video() ): ?>

						<div class="media-container-video media-container">
							<?php the_post_video(); ?>
						</div> <!-- /.media-container-video -->

						<?php elseif ( has_post_thumbnail() ): ?>

						<div class="media-container-photo media-container">
							<a href="<?php the_permalink(); ?>">
								<?php
								$thumbnail = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'featured-image' );
								?>
								<img src="<?php echo $thumbnail['0']; ?>" />
							</a>
						</div> <!-- /.media-container-photo -->

						<?php endif; ?>

						<div class="content-container">
							<h1 class="title">
								<a href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a>
							</h1>
							<hr class="purple-hr">
							<div class="summary">
								<?php the_excerpt(); ?>
								<!-- <span class="author">author: <?php the_author(); ?></span> -->
							</div> <!-- /.summary -->
							<a class="links" href="<?php the_permalink(); ?>">Learn more <i class="icon-dbl-arrow-pink"></i></a>
						</div> <!-- /.ahoy-content-container -->
					</article>
				</li>

				<?php endwhile; ?>
			</ul>
		</div> <!-- /.articles-container -->
	</div> <!-- /.container -->
</section> <!-- /#ahoyPosts -->

<?php get_footer(); ?>
