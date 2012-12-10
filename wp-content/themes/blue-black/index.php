<?php 
global $options;
foreach ($options as $value) {
if (get_settings( $value['id'] ) === FALSE) { $$value['id'] = $value['std']; } else { $$value['id'] = get_settings( $value['id'] ); } }
?>
<?php get_header(); ?>

	<!--content-->
	<div id="content">
    
		<!--left-col-->   
		<div id="left-col">

		<!--post-->
        <?php $count = 1; ?> 
        
	<?php query_posts($query_string.'order=DESC'); 

while (have_posts()) : the_post(); ?>

	<div class="post" id="post-<?php the_ID(); ?>">
        
        <div class="entry">
		<h2><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_title(); ?></a></h2>
		<div class="post-info">Posted by <?php the_author() ?> on <?php the_time('F jS, Y') ?> | <?php comments_popup_link('0 comments', '1 comment', '% comments'); ?></div><div style="clear: both;"></div>
		<?php the_content(__('<span class="more">READ MORE</span>'));?>
        
		</div>
        
		<p class="metadata"><?php the_tags('', ' . ', ''); ?></p>
        
	
	</div><!--post-end-->
     <div class="post-bg-down"></div>
     
     <?php if ($count == 1) : ?> 

<?php if (get_option('blueblack_banner_display') == 'Enable') { ?>
<?php { include(TEMPLATEPATH . '/468x60.php'); } ?>
<?php } else { echo ''; } ?>

<?php endif; $count++; ?>

	   
	<?php endwhile; ?>
        
        
         <div class="navigation">
        	<?php posts_nav_link('','<span class="previous">Previous</span>','<span class="next">Next</span>') ?>
        </div> 
    
</div><!--left-col-end--> 


</div><!--content-end-->

</div><!--wrapper-end-->
<?php get_footer(); ?>
