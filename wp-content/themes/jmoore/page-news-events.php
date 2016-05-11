<?php
/**
 * Template Name: News Index
 *
 * @package jmoore
 */

get_header(); ?>
<?php

function custom_field_excerpt() {
	global $post;
	$text = get_field('news_event_details');
	if ( '' != $text ) {
		$text			= strip_shortcodes( $text );
		$text			= apply_filters('the_content', $text);
		$text			= str_replace(']]>', ']]>', $text);
		$excerpt_length	= 20; // 20 words
		$excerpt_more	= apply_filters('excerpt_more', ' ' . '[...]');
		$text			= wp_trim_words( $text, $excerpt_length, $excerpt_more );
	}
	return apply_filters('the_excerpt', $text);
}

?>

<section class="news-landing">
	<div class="container">

		<h1 class="main-page-title"><?php the_title(); ?></h1>

		<?php
		$paged = get_query_var('paged') ? get_query_var('paged') : 1;
		$wp_query = new WP_Query(array(
			'post_type' => 'news-event-post-type',
			'showposts' => 5,
			'paged' => $paged
			)
		);
		wp_pagenavi();
		while ($wp_query->have_posts()) : $wp_query->the_post();
		?>

		<article>
			<h2 class="news-date">
				<a href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title_attribute(); ?>"><?php the_field('news_event_date'); ?></a>
			</h2>

			<hr class="purple-hr">

			<p class="news-summary">
				<span class="news-title"><?php the_title(); ?></span> &nbsp;|&nbsp;
				<span><?php the_field('news_event_time'); ?></span> &nbsp;|&nbsp;
				<span><?php the_field('news_event_location'); ?></span>
			</p>

			<div class="details-news">
				<?php if(get_field('news_event_venue')): ?>
				<span><?php the_field('news_event_venue'); ?> - </span>

				<?php
				endif;
				echo custom_field_excerpt();
				?>
			</div> <!-- /.details-news -->

			<a class="btn pink-btn" href="<?php echo esc_url( get_permalink() );?>">View Details &raquo;</a>
		</article>

		<?php endwhile; ?>

	</div>
</section> <!-- /#newsPosts -->

<?php get_footer(); ?>
