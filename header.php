<!DOCTYPE html>
<html>
    <head>    
        <meta charset="UTF-8">
        <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
        <title><?php wp_title( '' ); ?></title>
        <?php wp_head(); ?>
    </head>
    <body <?php body_class(); ?>>
     
        <div id="header">
            This is the header.
        </div><!-- /#header -->