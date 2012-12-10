<script type="text/javascript">/** * Written by Rob Schmitt, The Web Developer's Blog * http://webdeveloper.beforeseven.com/ *//** * The following variables may be adjusted */var active_color = '#000'; // Colour of user provided textvar inactive_color = '#ccc'; // Colour of default text/** * No need to modify anything below this line */$(document).ready(function() {  $("input.default-value").css("color", inactive_color);  var default_values = new Array();  $("input.default-value").focus(function() {    if (!default_values[this.id]) {      default_values[this.id] = this.value;    }    if (this.value == default_values[this.id]) {      this.value = '';      this.style.color = active_color;    }    $(this).blur(function() {      if (this.value == '') {        this.style.color = inactive_color;        this.value = default_values[this.id];      }    });  });});</script>    

<div id="searchform">

<form method="get" action="<?php bloginfo('url'); ?>/">

<input id="s" name="s" type="text" size="25"  style="color:#999;" maxlength="128" onblur="this.value = this.value || this.defaultValue; this.style.color = '#999';" onfocus="this.value=''; this.style.color = '#000';" value="type keyword here ...<?php the_search_query(); ?>" />

<input id="searchsubmit" type="submit" value="&nbsp;" />

</form></div>