<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" <?php language_attributes(); ?>>

<head profile="http://gmpg.org/xfn/11">
<meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" />

<title><?php bloginfo('name'); ?> <?php if ( is_single() ) { ?> &raquo; Blog Archive <?php } ?> <?php wp_title(); ?></title>

<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css" media="screen" />
    <!--[if IE 6]>
	<link rel="stylesheet" href="<?php bloginfo("template_directory"); ?>/hack.css" type="text/css" />
	<![endif]-->
<link rel="alternate" type="application/rss+xml" title="<?php bloginfo('name'); ?> RSS Feed" href="<?php bloginfo('rss2_url'); ?>" />
<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />
<LINK REL="SHORTCUT ICON" HREF="/favicon.ico"> 
<?php wp_head(); ?>
</head>
<body>
<!--wrapper-->
<div id="wrapper">
<!--header-->
	<div id="header">
    	<!--blog-title-->
    	<div id="blog-title"><h1><a href="<?php echo get_option('home'); ?>" title="<?php bloginfo('description'); ?>"><?php bloginfo('name'); ?></a></h1><span><?php bloginfo('description'); ?></span></div><!--blog-title-->
        
        <!--search-->  

    	<?php include (TEMPLATEPATH . '/searchform.php'); ?>
        
        <!--page-navigation-->
        <div id="menu">
        	<ul>
				<?php wp_list_pages('sort_order=asc&title_li=&depth=1&exclude=252'); ?>
            </ul>
        </div><!--page-navigation-->
        
    </div><!--header-end-->


