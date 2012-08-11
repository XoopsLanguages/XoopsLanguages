<?php get_header(); ?>

	<div id="content" class="widecolumn">

  <?php if (have_posts()) : while (have_posts()) : the_post(); ?>

		<div class="navigation">
			<div class="alignleft">&nbsp;</div>
			<div class="alignright">&nbsp;</div>
		</div>
<?php $attachment_link = get_the_attachment_link($post->ID, true, array(450, 800)); // This also populates the iconsize for the next line ?>
<?php $_post = &get_post($post->ID); $classname = ($_post->iconsize[0] <= 128 ? 'small' : '') . 'attachment'; // This lets us style narrow icons specially ?>
		<div class="post" id="post-<?php the_ID(); ?>">
			<h2><a href="<?php echo get_permalink($post->post_parent); ?>" rev="attachment"><?php echo get_the_title($post->post_parent); ?></a> &raquo; <a href="<?php echo get_permalink() ?>" rel="bookmark" title="Permanent Link: <?php the_title(); ?>"><?php the_title(); ?></a></h2>
			<div class="entry">
				<p class="<?php echo $classname; ?>"><?php echo $attachment_link; ?><br /><?php echo basename($post->guid); ?></p>

				<?php the_content(__('Read the rest of this entry &raquo;','kubrick')); ?>

				<?php wp_link_pages(array('before' => __('<p><strong>Pages:</strong> ','kubrick'), 'after' => '</p>','next_or_number' => 'number')); ?>

				<p class="postmetadata alt">
					<small>
						<?php _e('This entry was posted on','kubrick'); ?>
						<?php /* This is commented, because it requires a little adjusting sometimes.
							You'll need to download this plugin, and follow the instructions:
							http://binarybonsai.com/archives/2004/08/17/time-since-plugin/ */
							/* $entry_datetime = abs(strtotime($post->post_date) - (60*120)); echo time_since($entry_datetime); _e('ago','kubrick'); */ ?>
						<?php the_time('l, F jS, Y') ?> <?php _e('at','kubrick'); ?> <?php the_time() ?>
						<?php _e('and is filed under','kubrick'); ?> <?php the_category(',') ?>.
						<?php _e('You can follow any responses to this entry through the','kubrick'); ?> <?php comments_rss_link('RSS 2.0'); ?> <?php _e('feed','kubrick'); ?>.


						<?php if (('open' == $post-> comment_status) && ('open' == $post->ping_status)) {
							// Both Comments and Pings are open ?>
							<?php _e('You can','kubrick'); ?> <a href="#respond"><?php _e('leave a response','kubrick'); ?></a><?php _e(',','kubrick'); ?> <?php _e('or','kubrick'); ?> <a href="<?php trackback_url(true); ?>" rel="trackback"><?php _e('send trackback','kubrick'); ?></a> <?php _e('from your own site','kubrick'); ?>.

						<?php } elseif (!('open' == $post-> comment_status) && ('open' == $post->ping_status)) {
							// Only Pings are Open ?>
							<?php _e('Responses are currently closed, but you can','kubrick'); ?> <a href="<?php trackback_url(true); ?> " rel="trackback"><?php _e('trackback','kubrick'); ?></a> <?php _e('from your own site','kubrick'); ?>.

						<?php } elseif (('open' == $post-> comment_status) && !('open' == $post->ping_status)) {
							// Comments are open, Pings are not ?>
							<?php _e('You can skip to the end and leave a response. Pinging is currently not allowed','kubrick'); ?>.

						<?php } elseif (!('open' == $post-> comment_status) && !('open' == $post->ping_status)) {
							// Neither Comments, nor Pings are open ?>
							<?php _e('Both comments and pings are currently closed','kubrick'); ?>.

						<?php } edit_post_link(__('Edit this entry.','kubrick'),'',''); ?>

					</small>
				</p>

			</div>
		</div>

	<?php comments_template(); ?>

	<?php endwhile; else: ?>

		<p><?php _e('Sorry, no posts matched your criteria','kubrick'); ?>.</p>

<?php endif; ?>

	</div>

<?php get_footer(); ?>
