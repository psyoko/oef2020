<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
        <meta name="description" content="">
        <meta name="author" content="">

        <title><?php echo get_bloginfo( 'name' ); ?></title>

        <!-- Custom styles for this template -->
        <link href="<?php echo get_bloginfo('template_directory'); ?>/style.css" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Neuton:ital@0;1&family=Work+Sans:wght@400;900&display=swap" rel="stylesheet">


        <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
        <!--[if lt IE 9]>
            <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
            <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->
    <?php wp_head();?>
    </head>

    <body <?php body_class(); ?>>
        <div class="page-wrapper"> 
            <header class="grid-header">
                <div class="block-title">
                    <h1 class="blog-title">
                        <a href="<?php echo get_bloginfo('wpurl'); ?>"><?php echo get_bloginfo( 'name' ); ?></a>
                    </h1>
                </div>
                <div class="block-subtitle">
                    <p><?php echo get_bloginfo( 'description' ); ?></p>
                </div>
                <div class="block-nav">
                    <nav>
                        <ul>
                        <?php wp_list_pages('&title_li='); ?>
                        </ul>
                    </nav>
                </div>
            </header>
