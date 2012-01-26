<?php
/**
 * The template for displaying all pages.
 *
 * @package WordPress
 * @subpackage Starkers
 * @since Starkers HTML5 3.0
 */

get_header(); ?>
	<section class="post span_all">
	<?php get_template_part( 'loop', 'page' ); ?>
	</section>
<?php get_footer(); ?>
