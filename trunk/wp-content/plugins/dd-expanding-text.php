<?php
/*
Plugin Name: Expanding Text with + & -
Plugin URI: http://salmat52.byethost12.com/expanding-text-plugin-for-wordpress/
Description: Allows you to define areas of text that expand/collapse when clicked with plus and minus signs, the area could have fluid weight
Author: S. Mattera
Version: 1.1 - first working version
		 1.2 - fix chrome problem, add class ddetlink -> .ddetlink{float:left;}
Author URI: http://salmat52.byethost12.com/
*/

function ddet_str_replace_once($needle , $replace , $haystack){ 
    // Looks for the first occurence of $needle in $haystack 
    // and replaces it with $replace. 
    $pos = strpos($haystack, $needle); 
    if ($pos === false) { 
        // Nothing found 
    return $haystack; 
    } 
    return substr_replace($haystack, $replace, $pos, strlen($needle));  
}  



function ddet_process($content) {
	$offset = 0;
	$stag = '[DDET ';
	$etag = '[/DDET]';
	while (stripos($content, $stag, $offset)) {

		// string to replace
		$s = stripos($content, $stag, $offset);	
		$e = stripos($content, $etag, $s) + strlen($etag); 

		// inside data
		$ds = stripos($content, ']', $s) + 1;
		$de = $e - strlen($etag);

		// style tag
		$ss = $s + strlen($stag);
		$se = $ds - 1;

		$sstring = substr($content, $s, $e - $s);
		$sdesc = substr($content, $ss, $se - $ss); 
		$sdata = substr($content, $ds, $de - $ds);
		mt_srand((double)microtime()*1000000);
		$rnum = mt_rand();

		$new_string = '<div class="expand_title">';
		$new_string .= $sdesc;
		//$new_string .= '<a class="expand_plus" id="ddet' . $rnum.'" href="javascript:expand(\'ddetlink' . $rnum . '\', \'ddet' . $rnum . '\');"><img src="wp-content/themes/begtheme/images/beg/plus.png"></a>';
		$new_string .= '<a class="expand_plus" id="ddet' . $rnum.'" href="javascript:expand(\'ddetlink' . $rnum . '\', \'ddet' . $rnum . '\');"></a>';
		$new_string .= '</div>';
		$new_string .= '<div id="ddetlink' . $rnum.'" style="display: none;" class="ddetlink";>';
		
		$sdata = preg_replace('`^<br />`sim', '', $sdata);
		$content = ddet_str_replace_once($sstring, $new_string . $sdata . '</div>', $content);


		$offset = $s + 1; 
	}

	return $content;

}




function ddet_javascript() {

	echo '
<script language="JavaScript" type="text/javascript"> 	
function expand(showHideDiv, switchImgTag) {
        var ele = document.getElementById(showHideDiv);
        var imageEle = document.getElementById(switchImgTag);
        if(ele.style.display == "none") {
                ele.style.display = "block";
		imageEle.style.backgroundImage = "url(\''.get_bloginfo("template_url").'/images/minus.png\')";
        }
        else {
                ele.style.display = "none";
                imageEle.style.backgroundImage = "url(\''.get_bloginfo("template_url").'/images/plus.png\')";
        }
}
</script>
';

}


add_action('wp_head', 'ddet_javascript');
add_filter('the_content', 'ddet_process');

?>