<?php get_header(); ?>
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

        <!-- Bootstrap core CSS -->
        <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css" rel="stylesheet">

        <!-- Custom styles for this template -->
        <link href="<?php echo get_bloginfo('template_directory'); ?>/style.css" rel="stylesheet">


        <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
        <!--[if lt IE 9]>
            <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
            <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->
    <?php wp_head();?>
    </head>

    <body>
        <div class="page-wrapper"> 
            <div class="block-title">
                <h1 class="blog-title">
                    <a href="<?php echo get_bloginfo('wpurl'); ?>"><?php echo get_bloginfo( 'name' ); ?></a>
                </h1>
            </div>
            <div class="block-subtitle">
                <p class="lead blog-description"><?php echo get_bloginfo( 'description' ); ?></p>
            </div>
            <div class="block-nav">
                <nav class="blog-nav">
                    <ul>
                        <?php wp_list_pages('&title_li='); ?>
                    </ul>
                </nav>
            </div>

            <div class="block-main">
                <div class="main-content">
                    <?php
                    if (have_posts()) : while (have_posts()) : the_post();
                        get_template_part('content', get_post_format() ); 
                    endwhile; endif; 
                    ?>
                </div>
            </div>

            <div class="block-aside">
                <h4>Archives</h4>
                <ol class="list-unstyled">
                    <?php wp_get_archives('type=monthly'); ?>
                </ol>

                <h4>About</h4>
                <p><?php the_author_meta('description'); ?></p>
            </div>

            <div class="block-footer">
                <footer class="blog-footer">
                    <p>Blog template built for <a href="http://getbootstrap.com">Bootstrap</a> by <a href="https://twitter.com/mdo">@mdo</a>.</p>
                    <p>
                        <a href="#">Back to top</a>
                    </p>
                </footer>
            </div>
        </div>

        <!-- Bootstrap core JavaScript
        ================================================== -->
        <!-- Placed at the end of the document so the pages load faster -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
    <?php wp_footer(); ?>
    </body>
</html>

<?php get_sidebar(); ?>
<?php get_footer(); ?>