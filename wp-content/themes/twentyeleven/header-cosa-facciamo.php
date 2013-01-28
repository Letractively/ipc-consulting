<?php
/**
 * The Header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="main">
 *
 * @package WordPress
 * @subpackage Twenty_Eleven
 * @since Twenty Eleven 1.0
 */
?><!DOCTYPE html>
<!--[if IE 6]>
<html id="ie6" <?php language_attributes(); ?>>
<![endif]-->
<!--[if IE 7]>
<html id="ie7" <?php language_attributes(); ?>>
<![endif]-->
<!--[if IE 8]>
<html id="ie8" <?php language_attributes(); ?>>
<![endif]-->
<!--[if !(IE 6) | !(IE 7) | !(IE 8)  ]><!-->
<html <?php language_attributes(); ?>>
<!--<![endif]-->
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>" />
<meta name="viewport" content="width=device-width" />
<title><?php
	/*
	 * Print the <title> tag based on what is being viewed.
	 */
	global $page, $paged;

	wp_title( '|', true, 'right' );

	// Add the blog name.
	bloginfo( 'name' );

	// Add the blog description for the home/front page.
	$site_description = get_bloginfo( 'description', 'display' );
	if ( $site_description && ( is_home() || is_front_page() ) )
		echo " | $site_description";

	// Add a page number if necessary:
	if ( $paged >= 2 || $page >= 2 )
		echo ' | ' . sprintf( __( 'Page %s', 'twentyeleven' ), max( $paged, $page ) );

	?></title>
<link rel="profile" href="http://gmpg.org/xfn/11" />
<link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo( 'stylesheet_url' ); ?>" />
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
<link rel="shortcut icon" href="<?php bloginfo('stylesheet_directory'); ?>/favicon.ico" />
<!--[if lt IE 9]>
<script src="<?php echo get_template_directory_uri(); ?>/js/html5.js" type="text/javascript"></script>
<![endif]-->
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
<style type="text/css" media="screen">
	html { margin-top: 0px !important; }
	* html body { margin-top: 0px !important; }
</style>
<script type="text/javascript" src="<?php bloginfo('template_url'); ?>/js/jquery.js"></script>
<script type="text/javascript" src="<?php bloginfo('template_url'); ?>/js/jquery.scrollTo-min.js"></script>
<script type="text/javascript" src="<?php bloginfo('template_url'); ?>/js/jquery.serialScroll-min.js"></script>
<script type="text/javascript" src="<?php bloginfo('template_url'); ?>/js/init.js"></script>
<script type="text/javascript" src="<?php bloginfo('template_url'); ?>/js/menu-addendum.js"> </script><script type="text/javascript" src="<?php bloginfo('template_url'); ?>/js/jquery.validate.min.js"> </script>
<!--Overlay by Targetweb ver 1.0-->
<script>
$(document).ready(function() {

	$(".apri").click(
	    function(){
			$('#overlay').fadeIn('fast');
			$('#box').fadeIn('slow');
		});
		
		$(".chiudi").click(
	    function(){
		$('#overlay').fadeOut('fast');
		$('#box').hide();
		});
		
		//chiusura emergenza 
		$("#overlay").click(
	    function(){
		$(this).fadeOut('fast');
		$('#box').hide();
		});
		
	
        
   });     
        
 </script>
</head>

<body>
<?php
include_once 'aevo_library.php';
?>
<div id="ipc_body">
	<div id="ipc_page">
		<div id="ipc_header">
				<div id="ipc_logo"> 
					
				</div>
				<?php do_action('wp_menubar','main'); ?>
				
				<div style="position: absolute;top: 33px;left: 815px;">
					<img src="<?php bloginfo('template_url');?>/images/cosa_facciamo_ipc.jpg">
					<div class="pulito"></div>
				</div>  <!--fine box-->
				<div id="ipc_motto">
					"Impegno, competenza e soluzioni efficaci per aiutare i nostri clienti ad ottenere il miglior risultato possibile."
				</div>
		</div>