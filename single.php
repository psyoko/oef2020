<?php get_header(); ?>
<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

<article class="block-main">
    <main class="main-content">
        <h2><?php the_title(); ?></h2>
        
        <?php the_content(); ?>
    </main>
</article>
<aside class="block-aside">
    <dl>
        <dt>Published</dt>
        <dd><?php the_date(); ?></dd>

        <dt>Category</dt>
        <dd><?php wp_list_categories('title_li='); ?></dd>
        
        <dt>Author</dt>
        <dd><?php the_author_posts_link(); ?></dd>
    </dl>
</aside>

<?php endwhile; endif; ?>
<?php get_footer(); ?>