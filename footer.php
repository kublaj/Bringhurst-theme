<?php
/**
 * The template for displaying the footer.
 *
 * @package WordPress
 * @subpackage Starkers
 * @since Starkers HTML5 3.0
 */
?>
	</div><? /* end the content div */ ?>
	<footer class="footer">
		All content &copy; Daniel Eden <?php echo date(Y); ?>. Fonts via <a href="http://typekit.com">Typekit.</a> Say <a href="thanks">thanks.</a>
	</footer>
<!-- c(~) -->
<?php
	/* Always have wp_footer() just before the closing </body>
	 * tag of your theme, or you will break many plugins, which
	 * generally use this hook to reference JavaScript files.
	 */

	wp_footer();
?>
</body>
</html>