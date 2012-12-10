<?php get_header(); ?>
	<!--content-->
	<div id="content">
    
		<!--left-col-->   
		<div id="left-col">


		<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
		<div class="post" id="post-<?php the_ID(); ?>">
        
        <div class="entry">
        <div class="titleContainer">
			<?php include (TEMPLATEPATH . '/language-list.php'); ?>
			<h2><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_title(); ?></a></h2>
		</div>
		<?php the_content(__('<span class="more">READ MORE</span>'));?>
        
		</div>
		</div>
        <div class="post-bg-down"></div>
		<?php endwhile; endif; ?>
	<?php edit_post_link('Edit this entry.', '<p>', '</p>'); ?>

    
</div><!--left-col-end--> 

</div><!--content-end-->

</div><!--wrapper-end-->
<?php get_footer(); ?>