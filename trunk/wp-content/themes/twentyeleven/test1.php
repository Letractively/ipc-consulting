<?php
$block= '<category domain="http://www.ilsole24ore.com">1234567</category>';
preg_match_all( '/<category domain="http:\/\/www.ilsole24ore.com"\>(.*?)<\/catecory>/', $block, $category );
print_r $category;
?>