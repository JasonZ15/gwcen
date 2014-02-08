<?php
/*
 * Template Name: Calendar Template
 */
?>
<!DOCTYPE html>
<!--[if IE 7]>
<html class="ie ie7" lang="zh-CN">
<![endif]-->
<!--[if IE 8]>
<html class="ie ie8" lang="zh-CN">
<![endif]-->
<!--[if !(IE 7) | !(IE 8)  ]><!-->
<html lang="zh-CN">
<!--<![endif]-->
<head>
<meta charset="UTF-8" />
<meta name="viewport" content="width=device-width" />
<title>Calendar | GWC</title>
<link rel="profile" href="http://gmpg.org/xfn/11" />
<link rel="pingback" href="http://www.gwc.net/xmlrpc.php" />
<!--[if lt IE 9]>
<script src="http://www.gwc.net/wp-content/themes/twentytwelve/js/html5.js" type="text/javascript"></script>
<![endif]-->
<link rel="alternate" type="application/rss+xml" title="长城会 &raquo; Feed" href="http://www.gwc.net/feed/" />
<link rel="alternate" type="application/rss+xml" title="长城会 &raquo; 评论Feed" href="http://www.gwc.net/comments/feed/" />
<link rel="alternate" type="application/rss+xml" title="长城会 &raquo; 活动日历评论Feed" href="http://www.gwc.net/network/calender/feed/" />
<link rel='stylesheet' id='layerslider_css-css'  href='http://www.gwc.net/wp-content/plugins/LayerSlider/css/layerslider.css?ver=4.6.5' type='text/css' media='all' />
<link rel='stylesheet' id='rs-settings-css'  href='http://www.gwc.net/wp-content/plugins/revslider/rs-plugin/css/settings.css?rev=4.0.4&#038;ver=3.7.1' type='text/css' media='all' />
<link rel='stylesheet' id='rs-captions-css'  href='http://www.gwc.net/wp-content/plugins/revslider/rs-plugin/css/dynamic-captions.css?rev=4.0.4&#038;ver=3.7.1' type='text/css' media='all' />
<link rel='stylesheet' id='rs-plugin-static-css'  href='http://www.gwc.net/wp-content/plugins/revslider/rs-plugin/css/static-captions.css?rev=4.0.4&#038;ver=3.7.1' type='text/css' media='all' />
<link rel='stylesheet' id='wprssmi_template_styles-css'  href='http://www.gwc.net/wp-content/plugins/wp-rss-multi-importer/templates/templates.css?ver=3.7.1' type='text/css' media='all' />
<link rel='stylesheet' id='twentytwelve-fonts-css'  href='http://fonts.googleapis.com/css?family=Open+Sans:400italic,700italic,400,700&#038;subset=latin,latin-ext' type='text/css' media='all' />
<link rel='stylesheet' id='twentytwelve-style-css'  href='http://www.gwc.net/wp-content/themes/twentytwelve/style.css?ver=3.7.1' type='text/css' media='all' />
<!--[if lt IE 9]>
<link rel='stylesheet' id='twentytwelve-ie-css'  href='http://www.gwc.net/wp-content/themes/twentytwelve/css/ie.css?ver=20121010' type='text/css' media='all' />
<![endif]-->
<link rel='stylesheet' id='evcal_cal_default-css'  href='http://www.gwc.net/wp-content/plugins/eventON/assets/css/eventon_styles.css?ver=3.7.1' type='text/css' media='all' />
<link rel='stylesheet' id='evo_dynamic_css-css'  href='http://www.gwc.net/wp-admin/admin-ajax.php?action=evo_dynamic_css&#038;ver=3.7.1' type='text/css' media='all' />
<link rel='stylesheet' id='evcal_google_fonts-css'  href='http://fonts.googleapis.com/css?family=Oswald%3A400%2C300%7COpen+Sans%3A400%2C300&#038;ver=3.7.1' type='text/css' media='screen' />
<link rel='stylesheet' id='evo_font_icons-css'  href='http://www.gwc.net/wp-content/plugins/eventON/assets/fonts/font-awesome.css?ver=3.7.1' type='text/css' media='all' />
<script type='text/javascript' src='http://www.gwc.net/wp-includes/js/jquery/jquery.js?ver=1.10.2'></script>
<script type='text/javascript' src='http://www.gwc.net/wp-includes/js/jquery/jquery-migrate.min.js?ver=1.2.1'></script>
<script type='text/javascript' src='http://www.gwc.net/wp-content/plugins/LayerSlider/js/layerslider.kreaturamedia.jquery.js?ver=4.6.5'></script>
<script type='text/javascript' src='http://www.gwc.net/wp-content/plugins/LayerSlider/js/jquery-easing-1.3.js?ver=1.3.0'></script>
<script type='text/javascript' src='http://www.gwc.net/wp-content/plugins/LayerSlider/js/jquerytransit.js?ver=0.9.9'></script>
<script type='text/javascript' src='http://www.gwc.net/wp-content/plugins/LayerSlider/js/layerslider.transitions.js?ver=4.6.5'></script>
<script type='text/javascript' src='http://www.gwc.net/wp-content/plugins/revslider/rs-plugin/js/jquery.themepunch.plugins.min.js?rev=4.0.4&#038;ver=3.7.1'></script>
<script type='text/javascript' src='http://www.gwc.net/wp-content/plugins/revslider/rs-plugin/js/jquery.themepunch.revolution.min.js?rev=4.0.4&#038;ver=3.7.1'></script>
<script type='text/javascript' src='http://www.gwc.net/wp-includes/js/comment-reply.min.js?ver=3.7.1'></script>
<link rel="EditURI" type="application/rsd+xml" title="RSD" href="http://www.gwc.net/xmlrpc.php?rsd" />
<link rel="wlwmanifest" type="application/wlwmanifest+xml" href="http://www.gwc.net/wp-includes/wlwmanifest.xml" /> 
<link rel='prev' title='活动' href='http://www.gwc.net/network/events/' />
<link rel='next' title='会员' href='http://www.gwc.net/network/members/' />
<meta name="generator" content="WordPress 3.7.1" />
<link rel='canonical' href='http://www.gwc.net/network/calender/' />
<link rel='shortlink' href='http://www.gwc.net/?p=2971' />


<!-- EventON Version -->
<meta name="generator" content="EventON 2.2.4" />

	<style type="text/css">.recentcomments a{display:inline !important;padding:0 !important;margin:0 !important;}</style>
</head>

<body class="page page-id-2971 page-child parent-pageid-2963 page-template page-template-page-calendar-php logged-in custom-font-enabled single-author">
<div id="page" class="hfeed site">
	

	<div id="main" class="wrapper">
	<div id="primary" class="site-content" style="width:100%;">
		<div id="content" role="main">

							
	<article id="post-2971" class="post-2971 page type-page status-publish hentry" style="border-bottom: none; margin-bottom: 0;">
		<header class="entry-header">
			<h1 class="entry-title" style="float: right;">Member Event Calendar</h1><div id="logo"><a href="http://www.gwc.net/network/"><img src="http://www.gwc.net/wp-content/uploads/2014/01/gwc-logo.png" alt="长城会"></a></div>									
		</header>

		<?php the_post(); include( 'template-page.php' ); ?>

<script type='text/javascript'>jQuery(document).ready(function(){ jQuery('a.colorbox').colorbox({iframe:true, width:'80%', height:'80%'});jQuery('a.rssmi_youtube').colorbox({iframe:true, innerWidth:425, innerHeight:344});jQuery('a.rssmi_vimeo').colorbox({iframe:true, innerWidth:500, innerHeight:409})});</script><link rel='stylesheet' id='evo_fc_styles-css'  href='http://www.gwc.net/wp-content/plugins/eventon-full-cal/assets/fc_styles.css?ver=3.7.1' type='text/css' media='all' />
<link rel='stylesheet' id='wprssmi_colorbox-css'  href='http://www.gwc.net/wp-content/plugins/wp-rss-multi-importer/css/colorbox.css?ver=3.7.1' type='text/css' media='all' />
<script type='text/javascript' src='http://www.gwc.net/wp-content/themes/twentytwelve/js/navigation.js?ver=1.0'></script>
<script type='text/javascript'>
/* <![CDATA[ */
var the_ajax_script = {"ajaxurl":"http:\/\/www.gwc.net\/wp-admin\/admin-ajax.php"};
/* ]]> */
</script>
<script type='text/javascript' src='http://www.gwc.net/wp-content/plugins/eventON/assets/js/eventon_script.js?ver=1.0'></script>
<script type='text/javascript' src='http://www.gwc.net/wp-content/plugins/eventON/assets/js/eventon_gen_maps.js?ver=1.0'></script>
<script type='text/javascript' src='https://maps.googleapis.com/maps/api/js?sensor=false&#038;ver=1.0'></script>
<script type='text/javascript' src='http://www.gwc.net/wp-content/plugins/eventON/assets/js/eventon_init_gmap.js?ver=1.0'></script>
<script type='text/javascript' src='http://www.gwc.net/wp-content/plugins/wp-rss-multi-importer/scripts/jquery.colorbox-min.js?ver=3.7.1'></script>
<script type='text/javascript' src='http://www.gwc.net/wp-content/plugins/wp-rss-multi-importer/scripts/detect-mobile.js?ver=3.7.1'></script>
<script type='text/javascript' src='http://www.gwc.net/wp-content/plugins/eventon-full-cal/assets/jquery.easing.1.3.js?ver=1'></script>
<script type='text/javascript' src='http://www.gwc.net/wp-content/plugins/eventon-full-cal/assets/fc_script.js?ver=1'></script>
</body>
</html>
