<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<meta name="description" content="African Dances and Traditions from Guinea" />

<meta name="keywords" content="dance, djembe, guinea, konate, conakry, black, culture, famoudou, drum, percussion, art, culture, tradition" />
<link rel="canonical" href="http://fadimakonate.com/" />
<LINK REL="SHORTCUT ICON" HREF="/favicon.ico"> 

<title>Fadima Konate - African dance and tradition</title>
<style>
#post-252 ul, #post-252 ul li {
	margin: 0;
	padding: 0;
	list-style: none;
}
#post-252 ul li {
	display: inline;
}
html, body, table, tbody, tr, td {
	height:100%;
	width:100%;
	vertical-align:middle;
	margin: 0;
	padding: 0;
	text-align:center;
}
#content {
  margin:0 auto;
}
</style>
</head>

<body>
<!--content-->
<table cellpadding="0" cellspacing="0" border="0">
  <tbody>
    <tr>
      <td><div id="content"> 
          
          <!--left-col-->
          <div id="left-col">
            <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
            <div class="post" id="post-<?php the_ID(); ?>">
              <div class="entry">
                <?php the_content(__('<span class="more">READ MORE</span>'));?>
              </div>
            </div>
            <div class="post-bg-down"></div>
            <?php endwhile; endif; ?>
            <?php edit_post_link('Edit this entry.', '<p>', '</p>'); ?>
          </div>
          <!--left-col-end--> 
          
        </div>
        
        <!--content-end--></td>
    </tr>
  </tbody>
</table>
</body>
</html>
