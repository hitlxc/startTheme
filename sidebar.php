<div class="sidebar2">
	<ul class="nav nav-pills nav-stacked">
	<?php if ( function_exists('dynamic_sidebar') && dynamic_sidebar() ) : else : ?>
		<li>
			<ul class="nav nav-pills nav-stacked">
				<?php wp_list_categories('sort_column=name&optioncount=1&hierarchical=0'); ?>
			</ul>
		</li>
		<li>
			<h4>
				<?php _e('Archives'); ?> 
			</h4>
			<ul class="nav nav-pills nav-stacked">
				<?php wp_get_archives('type=monthly'); ?>
			</ul>
		</li>
		<li>
			<h4><?php _e('Meta'); ?></h4>
			<ul class="nav nav-pills nav-stacked">
				<?php wp_register(); ?>
					<li><?php wp_loginout(); ?></li>
				<?php wp_meta(); ?>
			</ul>
		</li>
	</ul>
</div>

<div class="sidebar1">
	<ul class="nav nav-pills nav-stacked">
		

		<li id="search">
			<?php include(TEMPLATEPATH . '/searchform.php'); ?>
		</li>

		<li id="calendar">
			<h4>
				<?php _e('Calendar'); ?>
			</h4>
			<?php get_calendar() ?>
		</li>
		
	<?php endif; ?>
	</ul>
</div>