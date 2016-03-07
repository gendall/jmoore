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
		$text = strip_shortcodes( $text );
		$text = apply_filters('the_content', $text);
		$text = str_replace(']]>', ']]>', $text);
		$excerpt_length = 20; // 20 words
		$excerpt_more = apply_filters('excerpt_more', ' ' . '[...]');
		$text = wp_trim_words( $text, $excerpt_length, $excerpt_more );
	}
	return apply_filters('the_excerpt', $text);
}

?>

<section class="news-landing">
	<div class="container">

		<h1 class="main-page-title"><?php the_title(); ?></h1>

		<?php
		// Previous/next page navigation.
		the_posts_pagination(array(
			'prev_text'          => __( 'Previous page', 'jmoore' ),
			'next_text'          => __( 'Next page', 'jmoore' ),
		));

		$NewsAndEvents = new WP_Query(array(
			'showposts'   => -1,  // -1 brings all books, otherwise it will bring the value define in wp settings, default is 10.
			'post_type'   => 'news'
		));

		while($NewsAndEvents->have_posts()) : $NewsAndEvents->the_post(); // Start the loop to print news post types list.
		?>

		<article>
			<h2 class="news-date"><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_field('news_event_date'); ?></a></h2>
			<hr class="purple-hr">
			<p class="news-summary">
				<span class="news-title"><?php the_title(); ?></span> &nbsp;|&nbsp;
				<span><?php the_field('news_event_time'); ?></span> &nbsp;|&nbsp;
				<span><?php the_field('news_event_location'); ?></span>
			</p>
			<div class="details-news">
				<?php if(the_field('news_event_venue')): the_field('news_event_venue'); endif; ?> - 
				<?php echo custom_field_excerpt(); ?>
			</div>
			<a class="btn pink-btn" href="<?php echo esc_url( get_permalink() );?>">View Details &raquo;</a>
		</article>
		<?php endwhile; ?>
	</div>
</section> <!-- /#newsPosts -->

<?php get_footer(); ?>
