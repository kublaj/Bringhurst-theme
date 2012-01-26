<?php
/**
 * The Header for our theme.
 *
 * Displays all of the <head> section
 *
 * @package WordPress
 * @subpackage Starkers
 * @since Starkers HTML5 3.0
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>" />
<meta name="readability-verification" content="V8rzvS27CeHuRJ56qwznGw5RbeX3UYZTnAyUfk6R"/>
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<title><?php
 
    global $page, $paged;
 
    wp_title( '|', true, 'right' );
 
    bloginfo( 'name' );
 
    $site_description = get_bloginfo( 'description', 'display' );
    if ( $site_description && ( is_home() || is_front_page() ) )
        echo " | $site_description";
 
    if ( $paged >= 2 || $page >= 2 )
        echo ' | ' . sprintf( __( 'Page %s', 'starkers' ), max( $paged, $page ) );
 
    ?></title>
<link rel="profile" href="http://gmpg.org/xfn/11" />
<link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/css/toast.css" />
<link rel="stylesheet" href="<?php bloginfo( 'stylesheet_url' ); ?>" />
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
 
 <? /* scripts - Modernizr, jQuery, TypeKit */ ?>
<script src="<?php bloginfo('template_directory'); ?>/js/modernizr-1.6.min.js"></script>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.6.2/jquery.min.js" type="text/javascript"></script>
<script type="text/javascript" src="http://use.typekit.com/tdl7zkj.js"></script>
<script type="text/javascript">try{Typekit.load();}catch(e){}</script>
 
<?php
    /* We add some JavaScript to pages with the comment form
     * to support sites with threaded comments (when in use).
     */
    if ( is_singular() && get_option( 'thread_comments' ) )
        wp_enqueue_script( 'comment-reply' );
 
    /* Always have wp_head() just before the closing </head>
     * tag of your theme, or you will break many plugins, which
     * generally use this hook to add elements to <head> such
     * as styles, scripts, and meta tags.
     */
    wp_head();
?>
</head>
 
<body <?php body_class('container respond'); ?>>
<!-- BuySellAds.com Ad Code -->
<script type="text/javascript">
(function(){
  var bsa = document.createElement('script');
     bsa.type = 'text/javascript';
     bsa.async = true;
     bsa.src = 'http://s3.buysellads.com/ac/bsa.js';
  (document.getElementsByTagName('head')[0]||document.getElementsByTagName('body')[0]).appendChild(bsa);
})();
</script>
<!-- End BuySellAds.com Ad Code -->
 
    <header class="site_header group">
		<a href="<?php echo home_url( '/' ); ?>" title="Go home, Lassie" rel="home">
			<div class="site_title">
				<h1><?php bloginfo( 'name' ); ?></h1>
				<span class="tagline">Web designer <span class="amp">&amp;</span> developer</span>
			</div>
		</a>
 
        <?php /* Our navigation menu.  If one isn't filled out, wp_nav_menu falls back to the 'starkers_menu' function which can be found in functions.php.  The menu assiged to the primary position is the one used.  If none is assigned, the menu with the lowest ID is used.  */ ?>
        <?php wp_nav_menu( array( 'container' => 'nav', 'container_class' => 'site_nav', 'fallback_cb' => 'starkers_menu', 'theme_location' => 'primary' ) ); ?>
<!-- BuySellAds.com Zone Code --><div class="ad">
<div id="bsap_1268756" class="bsarocks bsap_e004eb724b6bd850ab5d3f9adb2c1419"></div><a href="http://adpacks.com" id="bsap_aplink">via Ad Packs</a></div>
<!-- End BuySellAds.com Zone Code -->
    </header>
	<div class="content">