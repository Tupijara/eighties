<?php
/**
 * Template for displaying video content.
 * 
 * @package Eighties
 * @author Justin Kopepasah
 * @since 1.0.0
*/
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header">
		<?php the_title( '<h2 class="entry-title"><a href="' . get_permalink() . '" rel="bookmark">', '</a></h2>' ); ?>
	</header><!-- .entry-header -->

	<figure class="entry-video">
		<?php eighties_post_format_video_first_video( get_the_ID() ); ?>
	</figure><!-- .entry-video -->

	<div class="entry-summary" <?php eighties_backstretch_data( get_the_ID() ); ?>>
		<?php the_excerpt(); ?>
	</div><!-- .entry-content -->
</article><!-- #post-## -->