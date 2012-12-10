<?php get_header(); ?>

	<!--content-->
	<div id="content">
    
		<!--left-col-->   
		<div id="left-col">

	<!--post-->
	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
	<div class="post" id="post-<?php the_ID(); ?>">
        
        <div class="entry">
		<h2><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_title(); ?></a></h2>
		<div class="post-info">Posted by <?php the_author() ?> on <?php the_time('F jS, Y') ?> | <?php comments_popup_link('0 comments', '1 comment', '% comments'); ?></div><div style="clear: both;"></div>
		<?php the_content(__('<span class="more">READ MORE</span>'));?>
        
		</div>

</div><!--post-end-->    

<div class="post-bg-down"></div>

<p class="metadata2">
        You can follow any responses to this entry through the <?php post_comments_feed_link('RSS 2.0'); ?> feed.

        <?php if (('open' == $post-> comment_status) && ('open' == $post->ping_status)) {
            // Both Comments and Pings are open ?>

        <?php } elseif (!('open' == $post-> comment_status) && ('open' == $post->ping_status)) {
            // Only Pings are Open ?>
            Responses are currently closed, but you can <a href="<?php trackback_url(); ?> " rel="trackback">trackback</a> from your own site.

        <?php } elseif (('open' == $post-> comment_status) && !('open' == $post->ping_status)) {
            // Comments are open, Pings are not ?>
            You can skip to the end and leave a response. Pinging is currently not allowed.

        <?php } elseif (!('open' == $post-> comment_status) && !('open' == $post->ping_status)) {
            // Neither Comments, nor Pings are open ?>
            Both comments and pings are currently closed.

        <?php } edit_post_link('<br />Edit this entry.','',''); ?>
		</p>

	<?php comments_template(); ?>
     

	<?php endwhile; else: ?>

		<p>Sorry, no posts matched your criteria.</p>

<?php endif; ?>
	   
</div><!--left-col-end-->      
<?php get_sidebar(); ?>
</div><!--content-end-->

</div><!--wrapper-end-->

<?php get_footer(); ?>
