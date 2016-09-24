<?php get_header(); ?>

<div id="container">
	<?php if(have_posts()) : ?>
		<?php while(have_posts()) : the_post(); ?>
			<div class="post" id="post-<?php the_ID(); ?>">
				<h3><a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a></h3>
				<div class="entry">
					<?php the_excerpt(); ?>
					<p class="postmetadata">
						<?php _e('分类&#58;'); the_category(', ') ?> <?php _e('作者 ');  the_author(); ?>
						<br />
						<?php comments_popup_link('没有评论 &#187;', '一个评论 &#187;', '% 评论 &#187;'); edit_post_link('编辑', ' &#124; ', ''); ?>
					</p>
				</div>
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