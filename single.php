<?php get_header(); ?>
<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

<div class="flex-content">
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
            <dd><?php the_category(); ?></dd>
            
            <dt>Written by</dt>
            <dd><?php the_author(); ?></dd>
        </dl>
    </aside>
</div>

<?php endwhile; endif; ?>
<?php get_footer(); ?>