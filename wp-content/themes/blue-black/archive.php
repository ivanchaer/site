<?php get_header(); ?>

	<!--content-->
	<div id="content">
    
		<!--left-col-->   
		<div id="left-col">

		<?php if (have_posts()) : ?>

 	  <?php $post = $posts[0]; // Hack. Set $post so that the_date() works. ?>
 	  <?php /* If this is a category archive */ if (is_category()) { ?>
		<h2 class="pagetitle"><strong><?php single_cat_title(); ?></strong></h2>
 	  <?php /* If this is a tag archive */ } elseif( is_tag() ) { ?>
		<h2 class="pagetitle"><strong><?php single_tag_title(); ?></strong></h2>
 	  <?php /* If this is a daily archive */ } elseif (is_day()) { ?>
		<h2 class="pagetitle">Archive for <strong><?php the_time('F jS, Y'); ?></strong></h2>
 	  <?php /* If this is a monthly archive */ } elseif (is_month()) { ?>
		<h2 class="pagetitle">Archive for <strong><?php the_time('F, Y'); ?></strong></h2>
 	  <?php /* If this is a yearly archive */ } elseif (is_year()) { ?>
		<h2 class="pagetitle">Archive for <strong><?php the_time('Y'); ?></strong></h2>
 	  <?php /* If this is a paged archive */ } elseif (isset($_GET['paged']) && !empty($_GET['paged'])) { ?>
		<h2 class="pagetitle">Blog Archives</h2>
 	  <?php } ?>

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



	<?php else : ?>

		<h2 class="center">Not Found</h2>
		<?php include (TEMPLATEPATH . '/searchform.php'); ?>

	<?php endif; ?>

	</div>
    
<?php get_sidebar(); ?>
</div><!--content-end-->

</div><!--wrapper-end-->

<?php get_footer(); ?>
