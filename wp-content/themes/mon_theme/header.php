<!DOCTYPE html>
    <html>
<head>
    <meta charset="utf-8"/>
    <title><?php bloginfo('name');?></title>
    <meta name="viewport" content="width=devide-width, initial-scape=1.0"/>
    <link rel="stylesheet" href="<?php bloginfo('stylesheet_url');?>"/>
    <script src="http://html5shiv.googlrcode.com/svn/trunk/html5.js"> </script>
</head>
<body>
<header>
    <h1><a href="<?php bloginfo('url'); ?>"><?php bloginfo('name')?></a></h1>
    <?php wp_nav_menu(array(
        'theme_location' =>'header_menu',
    'container' =>'nav'
    ))?>
</header>
