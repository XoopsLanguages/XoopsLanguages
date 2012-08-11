<?php get_header(); ?>

	<div id="content" class="narrowcolumn">

		<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
		<div class="post" id="post-<?php the_ID(); ?>">
		<h2><?php the_title(); ?></h2>
			<div class="entry">
				<?php the_content(__('<p class="serif">Read the rest of this page &raquo;</p>','kubrick')); ?>

				<?php wp_link_pages(array('before' => __('<p><strong>Pages:</strong> ','kubrick'), 'after' => '</p>','next_or_number' => 'number')); ?>

			</div>
		</div>
		<?php endwhile; endif; ?>
	<?php edit_post_link(__('Edit this entry.','kubrick'), '<p>','</p>'); ?>
	</div>

<?php get_sidebar(); ?>

<?php get_footer(); ?>