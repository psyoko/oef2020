<!DOCTYPE html>
<html lang="en">
    <head>
        <!-- Global site tag (gtag.js) - Google Analytics -->
        <script async src="https://www.googletagmanager.com/gtag/js?id=UA-180797415-1"></script>
        <script>
          window.dataLayer = window.dataLayer || [];
          function gtag(){dataLayer.push(arguments);}
          gtag('js', new Date());

          gtag('config', 'UA-180797415-1');
        </script>

        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
        <meta name="description" content="">
        <meta name="author" content="">

        <title><?php echo get_bloginfo( 'name' ); ?></title>

        <!-- Custom styles for this template -->
        <link href="<?php echo get_bloginfo('template_directory'); ?>/style.css" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Neuton:ital,wght@0,400;0,700;1,400&family=Work+Sans:wght@400;900&display=swap" rel="stylesheet">


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
                            <li>
                                <?php $aboutPage = get_page_by_path( 'about-us-pillars' ); ?>
                                <a href="<?php echo get_the_permalink( $aboutPage ); ?>"><?php echo get_the_title( $aboutPage ); ?></a>
                            </li>
                            <li>
                                <?php 
                                $reflectionsCat = get_category_by_slug( 'quarterly-reflections' );
                                $reflectionsCatURL = get_category_link( get_cat_ID( 'Quarterly reflections' )); 
                                ?>
                                <a href="<?php echo $reflectionsCatURL; ?>"><?php echo $reflectionsCat->name; ?></a>
                            </li>
                        </ul>
                    </nav>
                </div>
            </header>
