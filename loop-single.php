<?php
/**
 * The loop that displays a single post.
 *
 * @package WordPress
 * @subpackage Starkers
 * @since Starkers HTML5 3.2
 */
?>

<?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>
		
		<article id="post-<?php the_ID(); ?>" <?php post_class('post'); ?>>
			
			<header class="post_header">
                <h1><?php the_title(); ?></h1>
				<aside class="post_meta">
					<?php starkers_posted_on(); ?>
					<?php if ( count( get_the_category() ) ) : ?>
						<span class="post_cat"><?php printf( __( 'Posted in %2$s', 'starkers' ), 'entry-utility-prep entry-utility-prep-cat-links', get_the_category_list( ', ' ) ); ?></span>
					<?php endif; ?>
				</aside>
				<div class="rdbWrapper" data-show-read="1" data-show-send-to-kindle="1" data-show-print="1" data-show-email="1" data-orientation="0" data-version="1" data-bg-color="transparent"></div><script type="text/javascript">(function() {var s = document.getElementsByTagName("script")[0],rdb = document.createElement("script"); rdb.type = "text/javascript"; rdb.async = true; rdb.src = document.location.protocol + "//www.readability.com/embed.js"; s.parentNode.insertBefore(rdb, s); })();</script>
            </header>

			<?php the_content(); ?>
					
			<?php wp_link_pages( array( 'before' => '<nav>' . __( 'Pages:', 'starkers' ), 'after' => '</nav>' ) ); ?>
				
		</article>

		<nav class="group">
			<?php previous_post_link( '%link', '' . _x( '&larr;', 'Previous post link', 'starkers' ) . ' Older' ); ?>
			<?php next_post_link( '%link', 'Newer ' . _x( '&rarr;', 'Next post link', 'starkers' ) . '' ); ?>
		</nav>

		<?php comments_template( '', true ); ?>

<?php endwhile; // end of the loop. ?>