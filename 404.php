<?php
/**
 * The template for displaying 404 pages.
 *
 * @package WordPress
 * @subpackage Starkers
 * @since Starkers HTML5 3.0
 */

get_header(); ?>

	<h1><?php _e( '404: Page Not Found', 'starkers' ); ?></h1>
		<p>The page you requested couldn't be found. This could be because:</p>
		<ul>
			<li>The page has been removed</li>
			<li>The page has been relocated</li>
			<li>The URL is incorrect</li>
			<li>The internet is broken</li>
		</ul>
		<p>As long as it's not the last one, you can go back <a href="<?php echo home_url( '/' ) ?>" title="Go home, Lassie" rel="home">home</a> and try again.</p>
		<?php get_search_form(); ?>

	<script type="text/javascript">
		// focus on search field after it has loaded
		document.getElementById('s') && document.getElementById('s').focus();
	</script>

<?php get_footer(); ?>