<?php get_header(); ?>

	<div id="content" class="narrowcolumn">

	<?php if (have_posts()) : ?>

		<?php while (have_posts()) : the_post(); ?>

			<div class="post" id="post-<?php the_ID(); ?>">
				<h2><a href="<?php the_permalink() ?>" rel="bookmark" title="<?php _e('Permanent Link to','kubrick');?> <?php the_title(); ?>"><?php the_title(); ?></a></h2>
				<small><?php the_time('F jS, Y') ?> <!-- by <?php the_author() ?> --></small>

				<div class="entry">
					<?php the_content(__('Read the rest of this entry &raquo;','kubrick')); ?>
				</div>

				<p class="postmetadata"><?php if (function_exists('the_tags')) : ?><?php the_tags(__('Tags: ','kubrick'), __(',','kubrick'), '');?><br /> <?php endif; ?> <?php _e('Posted in','kubrick'); ?> <?php the_category(',') ?> | <?php edit_post_link(__('Edit','kubrick'), '',' | '); ?>  <?php comments_popup_link(__('No Comments &#187;','kubrick'), __('1 Comment &#187;','kubrick'), __('% Comments &#187;','kubrick')); ?></p>
			</div>

		<?php endwhile; ?>

		<div class="navigation">
			<div class="alignleft"><?php next_posts_link(__('&laquo; Previous Entries','kubrick')) ?></div>
			<div class="alignright"><?php previous_posts_link(__('Next Entries &raquo;','kubrick')) ?></div>
		</div>

	<?php else : ?>

		<h2 class="center"><?php _e('Not Found','kubrick'); ?></h2>
		<p class="center"><?php _e('Sorry, but you are looking for something that isn\'t here.','kubrick'); ?></p>
		<?php include (TEMPLATEPATH . "/searchform.php"); ?>

	<?php endif; ?>

	</div>

<?php get_sidebar(); ?>

<?php get_footer(); ?>
