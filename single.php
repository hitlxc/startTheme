<?php get_header(); ?>

<div id="container">
	<?php if(have_posts()) : ?>
		<?php while(have_posts()) : the_post(); ?>
			<div class="post" id="post-<?php the_ID(); ?>">
				<h3><a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a></h3>
				<div class="entry">
					<?php the_content(); ?>
					<?php wp_link_pages('<p><strong>Pages:</strong>', '</p>', 'number'); ?>
					<p class="postmetadata">
						<?php _e('分类&#58;'); the_category(', ') ?> <?php _e('作者 ');  the_author(); ?>
					</p>
				</div>
				<div class="comments-template">
					<?php comments_template(); ?>
				</div>
			</div>
		<?php endwhile; ?>
		<div class="navigation">
			<p><?php previous_post_link('%link') ?> <?php next_post_link('%link') ?></p>
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