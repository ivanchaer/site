<?php get_header(); ?>



	<!--content-->

	<div id="content">

		<!--left-col-->   

		<div id="left-col">



	<?php if (have_posts()) : ?>


		<?php while (have_posts()) : the_post(); ?>


		<div class="post" id="post-<?php the_ID(); ?>">
        
        <div class="entry">
		<h2><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_title(); ?></a></h2>
		<div class="post-info">Posted by <?php the_author() ?> on <?php the_time('F jS, Y') ?> | <?php comments_popup_link('0 comments', '1 comment', '% comments'); ?></div><div style="clear: both;"></div>
		<?php the_content(__('<span class="more">READ MORE</span>'));?>
        
		</div>
        
		<p class="metadata"><?php the_tags('', ' . ', ''); ?></p>
        
	
	</div><!--post-end-->
     <div class="post-bg-down"></div>



		<?php endwhile; ?>



		 <div class="navigation">
        	<?php posts_nav_link('','','<span class="previous">Previous</span>') ?>
        	<?php posts_nav_link('','<span class="next">Next</span>','') ?>
        </div> 



	<?php else : ?>


<div class="post" id="post-<?php the_ID(); ?>">

				
            <div class="entry">

			
    <h2 style="margin: 30px 0 0 0" align="center">No posts found. Try a different search !</h2>

			<p style="padding-top: 50px;" align="center"><img src="<?php bloginfo("template_directory"); ?>/images/noresults.png" alt="No results found" title="No results found" /></p>
</p>
		</div>

			</div>
                <div class="post-bg-down"></div>
 <div class="navigation">
        	<?php posts_nav_link('','','<span class="previous">Previous</span>') ?>
        	<?php posts_nav_link('','<span class="next">Next</span>','') ?>
        </div> 

	<?php endif; ?>







</div><!--left-col-end--> 





<?php get_sidebar(); ?>

</div><!--content-end-->



</div><!--wrapper-end-->

<?php get_footer(); ?>