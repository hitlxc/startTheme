<?php get_header(); ?>

<div id="container">
	<?php if(have_posts()) : ?>
		<?php while(have_posts()) : the_post(); ?>
			<div class="post" id="post-<?php the_ID(); ?>">
				<h3><a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a></h3>
				
			</div>
		<?php endwhile; ?>
		<div class="navigation">
			<p><?php posts_nav_link(); ?></p>
			<?php next_posts_link(__('Older posts')) ?>


		</div>
	<?php else : ?>
		<div class="post">
			<h3><?php _e('Not Found'); ?></h3>
		</div>
	<?php endif; ?>
	
</div>

<?php get_sidebar(); ?>

<?php get_footer(); ?>

<script type="text/javascript">
	
</script>