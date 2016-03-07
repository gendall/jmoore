<?php
/**
 * Template Name: Ahoy Index
 *
 * @package jmoore
 */

get_header(); ?>  

<section class="ahoy-landing">
	<div class="container">
		<?php
		$Ahoy = new WP_Query( array(
			'post_type' => 'ahoy',
		));

		while($Ahoy->have_posts()) : $Ahoy->the_post(); //start the loop to print book list
		?>
		<article>
			<div class="featured-media-container">
				<?php the_post_video() ?>
				<a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_post_thumbnail(); ?></a>
			</div> <!-- /.featured-media-container -->

			<div class="content-container">
				<h1 class="article-title">
					<a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_title(); ?></a>
				</h1>
				<div class="summary">
					<?php the_excerpt(); ?>
					<span class="article-author">author: <?php the_author(); ?></span>
				</div> <!-- /.summary -->
			</div> <!-- /.ahoy-content-container -->
		</article>
		<?php endwhile; ?>
	</div> <!-- /.container -->
</section> <!-- /#ahoyPosts -->

<?php get_footer(); ?>