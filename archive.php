<?php get_header(); ?>

<div class="flex-content">
	<div class="block-main">
	    <main class="main-content">
    		<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
    			<article>
	    			<h2><?php the_title(); ?></h2>
	    			<?php the_excerpt(); ?>
	    			<?php the_permalink(); ?>
    			</article>
    		<?php endwhile; endif; ?>	    	
	    </main>
	</div>
</div>

<?php get_footer(); ?>