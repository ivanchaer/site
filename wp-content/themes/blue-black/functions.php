<?php 

function the_title2($before = '', $after = '', $echo = true, $length = false) {
         $title = get_the_title();

      if ( $length && is_numeric($length) ) {

             $title = substr( $title, 0, $length );

          }

        if ( strlen($title)> 0 ) {

             $title = apply_filters('the_title2', $before . $title . $after, $before, $after);

             if ( $echo )

                echo $title;

             else

                return $title;

          }

      }

?>
<?php
if ( function_exists('register_sidebars') )
    register_sidebars(2);
?>
<?php
$themename = "Blue Black";
$shortname = "blueblack";
$options = array (
				  
	array(    "name" => "Ad Block Options",
            "type" => "titles"),
	
		array(    "name" => "Enable/Disable 125x125 ad block",
            "id" => $shortname."_ads_display",
            "type" => "select",
            "std" => "Display",
            "options" => array("Disable", "Enable")),
	
    array(    "name" => "125x125 Ad #1 Image",
            "id" => $shortname."_ad_image_one",
            "std" => "#",
            "type" => "text"),
			
	array(    "name" => "125x125 Ad #1 URL",
            "id" => $shortname."_ad_url_one",
            "std" => "#",
            "type" => "text"),
			
	array(    "name" => "125x125 Ad #2 Image",
            "id" => $shortname."_ad_image_two",
            "std" => "#",
            "type" => "text"),
	
			
	array(    "name" => "125x125 Ad #2 URL",
            "id" => $shortname."_ad_url_two",
            "std" => "#",
            "type" => "text"),
	
		array(    "name" => "125x125 Ad #3 Image",
            "id" => $shortname."_ad_image_two",
            "std" => "#",
            "type" => "text"),
	
			
	array(    "name" => "125x125 Ad #3 URL",
            "id" => $shortname."_ad_url_two",
            "std" => "#",
            "type" => "text"),
	
		array(    "name" => "125x125 Ad #4 Image",
            "id" => $shortname."_ad_image_two",
            "std" => "#",
            "type" => "text"),
	
			
	array(    "name" => "125x125 Ad #4 URL",
            "id" => $shortname."_ad_url_two",
            "std" => "#",
            "type" => "text"),
	
	array(    "name" => "468x60 Banner Options",
            "type" => "titles"),
	
	array(    "name" => "Enable/Disable 468x60 Banner",
            "id" => $shortname."_banner_display",
            "type" => "select",
            "std" => "Display",
            "options" => array("Disable", "Enable")),
	
	array(    "name" => "468x60 Banner After Post URL",
            "id" => $shortname."_banner_url",
            "std" => "#",
            "type" => "text"),
			
	array(    "name" => "468x60 Banner After Post Image",
            "id" => $shortname."_banner_image",
            "std" => "#",
            "type" => "text"),
	
);

function mytheme_add_admin() {

    global $themename, $shortname, $options;

    if ( $_GET['page'] == basename(__FILE__) ) {
    
        if ( 'save' == $_REQUEST['action'] ) {

                foreach ($options as $value) {
                    update_option( $value['id'], $_REQUEST[ $value['id'] ] ); }

                foreach ($options as $value) {
                    if( isset( $_REQUEST[ $value['id'] ] ) ) { update_option( $value['id'], $_REQUEST[ $value['id'] ]  ); } else { delete_option( $value['id'] ); } }

                header("Location: themes.php?page=functions.php&saved=true");
                die;

        } else if( 'reset' == $_REQUEST['action'] ) {

            foreach ($options as $value) {
                delete_option( $value['id'] ); }

            header("Location: themes.php?page=functions.php&reset=true");
            die;

        }
    }

    add_theme_page($themename." Options", "Current Theme Options", 'edit_themes', basename(__FILE__), 'mytheme_admin');

}

function mytheme_admin() {

    global $themename, $shortname, $options;

    if ( $_REQUEST['saved'] ) echo '<div id="message" class="updated fade"><p><strong>'.$themename.' settings saved.</strong></p></div>';
    if ( $_REQUEST['reset'] ) echo '<div id="message" class="updated fade"><p><strong>'.$themename.' settings reset.</strong></p></div>';
    
?>
<div class="wrap">
<h2><?php echo $themename; ?> settings</h2>

<form method="post">



<?php foreach ($options as $value) { 
    
if ($value['type'] == "text") { ?>

<div style="float: left; width: 880px; background-color:#e3ded2; border-left: 1px solid #795a55; border-right: 1px solid #795a55;  border-bottom: 1px solid #795a55; padding: 10px;">     
<div style="width: 200px; float: left;"><?php echo $value['name']; ?></div>
<div style="width: 680px; float: left;"><input name="<?php echo $value['id']; ?>" id="<?php echo $value['id']; ?>" style="width: 400px;" type="<?php echo $value['type']; ?>" value="<?php if ( get_settings( $value['id'] ) != "") { echo get_settings( $value['id'] ); } else { echo $value['std']; } ?>" /></div>
</div>
 
<?php } elseif ($value['type'] == "text2") { ?>
        
<div style="float: left; width: 880px; background-color:#e3ded2; border-left: 1px solid #795a55; border-right: 1px solid #795a55;  border-bottom: 1px solid #795a55; padding: 10px;">     
<div style="width: 200px; float: left;"><?php echo $value['name']; ?></div>
<div style="width: 680px; float: left;"><textarea name="<?php echo $value['id']; ?>" id="<?php echo $value['id']; ?>" style="width: 400px; height: 200px;" type="<?php echo $value['type']; ?>"><?php if ( get_settings( $value['id'] ) != "") { echo get_settings( $value['id'] ); } else { echo $value['std']; } ?></textarea></div>
</div>


<?php } elseif ($value['type'] == "select") { ?>

<div style="float: left; width: 880px; background-color:#e3ded2; border-left: 1px solid #795a55; border-right: 1px solid #795a55;  border-bottom: 1px solid #795a55; padding: 10px;">   
<div style="width: 200px; float: left;"><?php echo $value['name']; ?></div>
<div style="width: 680px; float: left;"><select name="<?php echo $value['id']; ?>" id="<?php echo $value['id']; ?>" style="width: 400px;">
<?php foreach ($value['options'] as $option) { ?>
<option<?php if ( get_settings( $value['id'] ) == $option) { echo ' selected="selected"'; } elseif ($option == $value['std']) { echo ' selected="selected"'; } ?>><?php echo $option; ?></option>
<?php } ?>
</select></div>
</div>

<?php } elseif ($value['type'] == "titles") { ?>

<div style="float: left; width: 870px; padding: 15px; background-color:#a29585; border: 1px solid #795a55; color: #1d3b46; font-size: 16px; font-weight: bold; margin-top: 25px;">   
<?php echo $value['name']; ?>
</div>

<?php 
} 
}
?>
<div style="clear: both;"></div>
<p style="float: left;" class="submit">
<input name="save" type="submit" value="Save changes" />    
<input type="hidden" name="action" value="save" />
</p>
</form>
<form method="post">
<p style="float: left;" class="submit">
<input name="reset" type="submit" value="Reset" />
<input type="hidden" name="action" value="reset" />
</p>
</form>

<?php
}

function mytheme_wp_head() { ?>

<?php }

add_action('wp_head', 'mytheme_wp_head');
add_action('admin_menu', 'mytheme_add_admin'); ?>