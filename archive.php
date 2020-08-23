<?php get_header(); ?>

<div class="flex-content">
	<div class="block-main">
	    <main class="main-content">
    		<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
    			<article>
	    			<h2><?php the_title(); ?></h2>
	    			<?php the_excerpt(); ?>
	    			<p>
	    				<a href="<?php the_permalink(); ?>">See full post →</a>
	    			</p>
    			</article>
    		<?php endwhile; endif; ?>	    	
	    </main>
	</div>
	<aside class="block-aside">
		<dl>
			<dt>Showing posts in</dt>
			<dd><?php the_archive_title(); ?></dd>
		</dl>
	</aside>
</div>

<?php get_footer(); ?>