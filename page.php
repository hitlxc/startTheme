<?php get_header(); ?>

<div id="container">
	<?php if(have_posts()) : ?>
		<?php while(have_posts()) : the_post(); ?>
			<div class="post" id="post-<?php the_ID(); ?>">
				<h3><a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a></h3>
				<div class="entry">
					<?php the_content(); ?>
					<?php link_pages('<p><strong>Pages:</strong>', '</p>', 'number'); ?>
					<?php edit_post_link('Edit', '<p>', '</p>'); ?>
					
				</div>
			</div>
		<?php endwhile; ?>
	
	<?php else : ?>
		<div class="post">
			<h3><?php _e('Not Found'); ?></h3>
		</div>
	<?php endif; ?>
	
</div>

<?php get_sidebar(); ?>

<?php get_footer(); ?>