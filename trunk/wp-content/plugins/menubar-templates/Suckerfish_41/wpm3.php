<?php
/* 
	WordPress Menubar Plugin
	PHP script for the Suckerfish_41 template

	Credits:
	Son of Suckerfish Dropdowns
	By Patrick Griffiths and Dan Webb
	http://www.htmldog.com/articles/suckerfish/dropdowns/
*/

global $wpm_html_S41;

$wrap_S41 = '
<script type="text/javascript">
// <![CDATA[
	wpm%id_Hover = function() {
	var wpmEls = document.getElementById("wpm%id").getElementsByTagName("li");
	for (var i=0; i<wpmEls.length; i++) {
		wpmEls[i].onmouseover = function() {
			this.className += " wpmhover";
		}
		wpmEls[i].onmouseout = function() {
			this.className = this.className.replace(new RegExp(" wpmhover\\\b"), "");
		}
	}
}
if (window.attachEvent) window.attachEvent("onload", wpm%id_Hover);
// ]]>
</script>

<div class="%menuclass-before"></div>
<div id="wpm%id" class="%menuclass">
%list
</div>
<div class="%menuclass-after"></div>
';

$search_S41 = '
<li%class><form method="get" action="%home">
<input id="wpm%id-text" type="text" name="s" value="%name"
onblur="if (this.value == \'\') {this.value = \'%name\';}"
onfocus="if (this.value == \'%name\') {this.value = \'\';}" />
%submit
</form></li>
';

$default_S41 = '<li%class><a href="%url" %attr>%name</a>%list</li>';

$wpm_html_S41 = array
(
'active'	=> 'selected',
'nourl'		=> '#',
'list'		=> '<ul>%items</ul>',
'submit' 	=> '<input id="wpm%id-submit" type="submit" value="%selection" />',
'items'		=> array
	(
	'Menu'			=>  $wrap_S41,
	'Home'			=>  $default_S41,
	'FrontPage'		=>  $default_S41,
	'Heading'		=>  '<li%class><a style="cursor:default;" %attr>%name</a>%list</li>',
	'Tag'			=>  $default_S41,
	'TagList'		=>  '<li%class><a style="cursor:default;" %attr>%name</a>%list</li>',
	'Category'		=>  $default_S41,
	'CategoryTree'	=>	'',
	'Page'			=>  $default_S41,
	'PageTree'		=>	'',
	'Post'			=>  $default_S41,
	'SearchBox'		=>  $search_S41,
	'External'		=>  $default_S41,
	'Custom'		=>  '',
	),
);

function wpm_display_Suckerfish_41 ($menu, $css)
{
	global $wpm_html_S41;

	$r = wpm_out41 ($menu->id, $wpm_html_S41, $css);
	echo $r['output'];
}
?>
