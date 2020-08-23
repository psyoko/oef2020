<?php get_header(); ?>
<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

<div class="flex-content">
	<div class="block-main">
		<main>
		<?php the_content(); ?>
		</main>
	</div>
</div>

<?php endwhile; endif; ?>
<?php get_footer(); ?>