<?php
/**
 * Template Name: Ahoy Index
 *
 * @package jmoore
 */

get_header(); ?>  

<section class="ahoy-landing">
	<div class="container">

		<h1 class="main-page-title"><?php the_title(); ?></h1>

		<?php
		$Ahoy = new WP_Query( array(
			'showposts'   => -1,  // -1 brings all books, otherwise it will bring the value define in wp settings, default is 10.
			'post_type'   => 'ahoy'
		));
		?>

		<ul>

			<?php while($Ahoy->have_posts()) : $Ahoy->the_post(); ?>

			<li>
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

					<div class="content-container">
						<h1 class="title">
							<a href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a>
						</h1>
						<div class="summary">
							<?php the_excerpt(); ?>
							<span class="author">author: <?php the_author(); ?></span>
						</div> <!-- /.summary -->
					</div> <!-- /.ahoy-content-container -->
				</article>
			</li>

			<?php endwhile; ?>

		</ul>
	</div> <!-- /.container -->
</section> <!-- /#ahoyPosts -->

<?php get_footer(); ?>