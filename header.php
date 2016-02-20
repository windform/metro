<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title><?php if ( is_home() ) {
        bloginfo('name'); echo "-"; bloginfo('description');
    } elseif ( is_category() ) {
        single_cat_title(); echo " - "; bloginfo('name');
    } elseif (is_single() || is_page() ) {
        single_post_title();
    } elseif (is_search() ) {
        echo "搜索结果"; echo " - "; bloginfo('name');
    } elseif (is_404() ) {
        echo '页面未找到!';
    } else {
        wp_title('',true);
    } ?>
	</title>
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
	<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />
	<link rel="alternate" type="application/rss+xml" title="RSS 2.0 - 所有文章" href="<?php echo get_bloginfo('rss2_url'); ?>" />
	<link rel="alternate" type="application/rss+xml" title="RSS 2.0 - 所有评论" href="<?php bloginfo('comments_rss2_url'); ?>" />
	<link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/metro.css" type="text/css" media="screen" />
	<link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/metro-icons.css" type="text/css" media="screen" />
	<link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/metro-responsive.css" type="text/css" media="screen" />
	<link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/metro-schemes.css" type="text/css" media="screen" />
	<link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/basic.css" type="text/css" media="screen" />
    <script src="<?php bloginfo('template_url'); ?>/js/jquery-2.1.3.min.js"></script>
    <script src="<?php bloginfo('template_url'); ?>/js/metro.js"></script>
	<script src="<?php bloginfo('template_url'); ?>/js/basic.js"></script>	
	<?php wp_head(); ?>
</head>
<body>
<!-- <header data-role="appbar" class="app-bar navy">
	<div class="container">
		  <a class="app-bar-element branding" href="<?php echo get_option('home'); ?>/">
		    <?php bloginfo('name'); ?>
		  </a>
		  <span class="app-bar-divider">
		  </span>
		  <ul class="app-bar-menu">
		    <li data-flexorderorigin="0" data-flexorder="1"><a href="">首页</a></li>
		    <li data-flexorderorigin="1" data-flexorder="2" class=""><a href=""> 页面架构</a></li>
		    <li data-flexorderorigin="2" data-flexorder="3">
		      <a class="dropdown-toggle" href="">设计前沿</a>
		      <ul data-role="dropdown" class="d-menu">
		        <li><a href="">网页设计</a></li>
		        <li><a href="">移动设计</a></li>
		      </ul>
		    </li>
		    <li data-flexorderorigin="3" data-flexorder="4">
		      <a class="dropdown-toggle" href="">前端开发</a>
		      <ul data-role="dropdown" class="d-menu">
		      	<li><a href="">html、css</a></li>
		      	<li><a href="">Javascript</a></li>
		      	<li><a href="">nodeJs</a></li>
		      	<li><a href="">AngularJs</a></li>
		      </ul>
		    </li>
		    <li data-flexorderorigin="4" data-flexorder="5"><a href="">后台编程</a></li>
		    <li data-flexorderorigin="5" data-flexorder="6">
		      <a class="dropdown-toggle" href="">摄影后期</a>
		      <ul data-role="dropdown" class="d-menu">
		        <li><a href=""> 单反天堂</a></li>
		        <li><a href=""> After Effects</a></li>
		        <li><a href="">premiere</a></li>
		      </ul>
		    </li>
		  </ul>
	  </div>
</header> -->