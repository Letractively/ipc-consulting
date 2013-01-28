<?php
		
		$rss = "http://www.ilsole24ore.com/rss/commenti-e-idee/fisco.xml?fmt=xml";
		$f = fopen( $rss, 'r' );
			while( $data = fread( $f, 4096 ) ) { $xml .= $data; }
		fclose( $f );
		echo $xml;
		/*
		$rss = simplexml_load_file('http://www.wired.com/news/feeds/rss2/0,2610,,00.xml?fmt=xml');

echo '<h1>'. $rss->channel->title . '</h1>';

foreach ($rss->channel->item as $item) {
   echo '<h2><a href="'. $item->link .'">' . $item->title . "</a></h2>";
   echo "<p>" . $item->pubDate . "</p>";
   echo "<p>" . $item->description . "</p>";
} 
*/
?>
