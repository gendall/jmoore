<?php
/**
 * Template Name: Blog Index
 *
 * @package jmoore
 */

get_header(); ?>  

<section class="blog-landing">
	<div class="container">

		<h1 class="main-page-title"><?php the_title(); ?></h1>

		<?php
		$paged = get_query_var('paged') ? get_query_var('paged') : 1;
		$wp_query = new WP_Query(array(
			'post_type' => 'post',
			'showposts' => 5,
			'paged' => $paged
			)
		);
		wp_pagenavi();
		while ($wp_query->have_posts()) : $wp_query->the_post();
		?>
		<article>

			<?php if ( has_post_video() ): ?>

			<div class="media-container-video media-container">
				<?php the_post_video(); ?>
			</div> <!-- /.media-container-video -->

			<?php elseif ( has_post_thumbnail() ): ?>

			<div class="media-container-photo media-container">
				<?php the_post_thumbnail(); ?>
			</div> <!-- /.media-container-photo -->

			<?php endif; ?>

			<div class="summary">
				<h1 class="title">
					<a href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a>
				</h1>

				<?php the_excerpt(); ?>
				<!-- <span class="author">author: <?php the_author(); ?></span> -->
			</div>
		</article>

		<?php endwhile; ?>

	</div>
</section> <!-- /#blogPosts -->

<?php get_footer(); ?>
