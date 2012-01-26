<?php
/**
 * The loop that displays posts.
 *
 * @package WordPress
 * @subpackage Starkers
 * @since Starkers HTML5 3.0
 */
?>
 
<?php /* Display navigation to next/previous pages when applicable */ ?>
 
<?php /* If there are no posts to display, such as an empty archive page */ ?>
<?php if ( ! have_posts() ) : ?>
        <h1><?php _e( 'No Records Found', 'starkers' ); ?></h1>
            <p><?php _e( 'No posts to show. This obviously wasn\'t a very busy period for me.', 'starkers' ); ?></p>
<?php endif; ?>
 
<?php while ( have_posts() ) : the_post(); ?>
     
        <article id="post-<?php the_ID(); ?>" <?php post_class('post span_all'); ?>>
         
			<header class="post_header">
                <h1><?php if(is_sticky()) { ?>Featured post:<br/> <?php } ?><a href="<?php the_permalink(); ?>" title="<?php printf( esc_attr__( 'Permalink to %s', 'starkers' ), the_title_attribute( 'echo=0' ) ); ?>" rel="bookmark"><?php the_title(); ?></a></h1>
				<aside class="post_meta">
					<?php starkers_posted_on(); ?>
					<?php if ( count( get_the_category() ) ) : ?>
						<span class="post_cat"><?php printf( __( 'Posted in %2$s', 'starkers' ), 'entry-utility-prep entry-utility-prep-cat-links', get_the_category_list( ', ' ) ); ?></span>
					<?php endif; ?>
				</aside>
            </header>
 
    <?php if ( is_archive() || is_search() ) : // Only display excerpts for archives and search. ?>
                <?php the_excerpt(); ?>
    <?php else : ?>
                <?php the_content( __( 'Continue reading &rarr;', 'starkers' ) ); ?>
                 
                <?php wp_link_pages( array( 'before' => '<nav>' . __( 'Pages:', 'starkers' ), 'after' => '</nav>' ) ); ?>
    <?php endif; ?>
		</article>
 
            <?php comments_template( '', true ); ?>
 
<?php endwhile; // End the loop. Whew. ?>
 
<?php /* Display navigation to next/previous pages when applicable */ ?>
<?php if (  $wp_query->max_num_pages > 1 ) : ?>
    <nav class="group">
        <?php next_posts_link( __( '&larr; Older posts', 'starkers' ) ); ?>
        <?php previous_posts_link( __( 'Newer posts &rarr;', 'starkers' ) ); ?>
    </nav>
<?php endif; ?>