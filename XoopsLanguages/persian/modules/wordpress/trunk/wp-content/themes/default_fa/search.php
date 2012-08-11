<?php get_header(); ?>

	<div id="content" class="narrowcolumn">

	<?php if (have_posts()) : ?>

		<h2 class="pagetitle"><?php _e('Search Results','kubrick'); ?></h2>

		<div class="navigation">
			<div class="alignleft"><?php next_posts_link(__('&laquo; Previous Entries','kubrick')) ?></div>
			<div class="alignright"><?php previous_posts_link(__('Next Entries &raquo;','kubrick')) ?></div>
		</div>


		<?php while (have_posts()) : the_post(); ?>

			<div class="post">
				<h3 id="post-<?php the_ID(); ?>"><a href="<?php the_permalink() ?>" rel="bookmark" title="<?php _e('Permanent Link to','kubrick');?> <?php the_title(); ?>"><?php the_title(); ?></a></h3>
				<small><?php the_time('l, F jS, Y') ?></small>

				<p class="postmetadata"><?php _e('Posted in','kubrick'); ?> <?php the_category(',') ?> | <?php edit_post_link(__('Edit','kubrick'), '',' | '); ?>  <?php comments_popup_link(__('No Comments &#187;','kubrick'), __('1 Comment &#187;','kubrick'), __('% Comments &#187;','kubrick')); ?></p>
			</div>

		<?php endwhile; ?>

		<div class="navigation">
			<div class="alignleft"><?php next_posts_link(__('&laquo; Previous Entries','kubrick')) ?></div>
			<div class="alignright"><?php previous_posts_link(__('Next Entries &raquo;','kubrick')) ?></div>
		</div>

	<?php else : ?>

		<h2 class="center"><?php _e('No posts found. Try a different search?','kubrick'); ?></h2>
		<?php include (TEMPLATEPATH . '/searchform.php'); ?>

	<?php endif; ?>

	</div>

<?php get_sidebar(); ?>

<?php get_footer(); ?>