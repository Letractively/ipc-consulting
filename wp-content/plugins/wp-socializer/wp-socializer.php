<?php
/*
Plugin Name: WP Socializer
Version: 2.4.1
Plugin URI: http://www.aakashweb.com/
Description: WP Socializer is an advanced plugin for inserting all kinds of Social bookmarking & sharing buttons. It has super cool features to insert the buttons into posts, sidebar. It also has Floating sharebar. <a href="http://youtu.be/1uimAE8rFYE" target="_blank">Check out the demo video</a>.
Author: Aakash Chakravarthy
Author URI: http://www.aakashweb.com/
*/

if(!defined('WP_CONTENT_URL')) {
	$wpsr_url = get_option('siteurl') . '/wp-content/plugins/' . plugin_basename(dirname(__FILE__)).'/';
}else{
	$wpsr_url = WP_CONTENT_URL . '/plugins/' . plugin_basename(dirname(__FILE__)) . '/';
}

define('WPSR_VERSION', '2.4.1');
define('WPSR_AUTHOR', 'Aakash Chakravarthy');
define('WPSR_URL', $wpsr_url);
define('WPSR_PUBLIC_URL', WPSR_URL . 'public/');
define('WPSR_ADMIN_URL', WPSR_URL . 'admin/');
define('WPSR_SOCIALBT_IMGPATH', WPSR_PUBLIC_URL . 'social-icons/');

$wpsr_socialsites_list = array(
	
	'addtofavorites' => array(
		'name' => 'Add to favorites',
		'titleText' => '{de-title}',
	 	'icon' => 'addtofavorites.png',
	 	'url' => '{de-url}" onclick="addBookmark(event);',
		'support32px' => 1,
	 ),
	 
	 // B
	 
	'barrapunto' => array(
		'name' => 'BarraPunto',
		'titleText' => __('Share this on ', 'wpsr') . 'BarraPunto',
		'icon' => 'barrapunto.png',
		'url' => 'http://barrapunto.com/submit.pl?subj={title}&amp;story={url}',
	),
	
	'bitacoras' => array(
		'name' => 'Bitacoras.com',
		'titleText' => __('Share this on ', 'wpsr') . 'Bitacoras',
		'icon' => 'bitacoras.png',
		'url' => 'http://bitacoras.com/anotaciones/{url}',
	),
	
	'blinklist' => array(
		'name' => 'BlinkList',
		'titleText' => __('Share this on ', 'wpsr') . 'BlinkList',
		'icon' => 'blinklist.png',
		'url' => 'http://www.blinklist.com/index.php?Action=Blink/addblink.php&amp;Url={url}&amp;Title={title}',
		'support32px' => 1,
	),
	
	'blip' => array(
		'name' => 'Blip',
		'titleText' => __('Share this on ', 'wpsr') . 'Blip',
		'icon' => 'blip.png',
		'url' => 'http://blip.pl/dashboard?body={title}+{url}',
		'support32px' => 1,
   ), // Added version 2.0 - 16-1-2011
	
	'blogger' => array(
		'name' => 'Blogger',
		'titleText' => __('Post this on ', 'wpsr') . 'Blogger',
        'icon' => 'blogger.png',
        'url' => 'http://www.blogger.com/blog_this.pyra?t&u={url}&n={title}&pli=1',
		'support32px' => 1,
    ),
	
	'blogmarks' => array(
		'name' => 'Blogmarks',
		'titleText' => __('Share this on ', 'wpsr') . 'BlogMarks',
		'icon' => 'blogmarks.png',
		'url' => 'http://blogmarks.net/my/new.php?mini=1&amp;simple=1&amp;url={url}&amp;title={title}',
	),

	'blogospherenews' => array(
		'name' => 'Blogosphere News',
		'titleText' => __('Submit this to ', 'wpsr') . 'Blogosphere News',
		'icon' => 'blogospherenews.png',
		'url' => 'http://www.blogospherenews.com/submit.php?url={url}&amp;title={title}',
	),

	'blogtercimlap' => array(
		'name' => 'Blogter Cimlap',
		'titleText' => __('Share this on ', 'wpsr') . 'blogtercimlap',
		'icon' => 'blogter.png',
		'url' => 'http://cimlap.blogter.hu/index.php?action=suggest_link&amp;title={title}&amp;url={url}',
	),
	
	'faves' => array(
		'name' => 'Faves',
		'titleText' => __('Share this on ', 'wpsr') . 'Faves',
		'icon' => 'bluedot.png',
		'url' => 'http://faves.com/Authoring.aspx?u={url}&amp;title={title}',
	),
	
	'boxnet' => array(
		'name' => 'Box.net',
		'titleText' => __('Add this on ', 'wpsr') . 'Box.net',
        'icon' => 'box.png',
        'url' => 'https://www.box.net/api/1.0/import?url={url}&name={title}&description={excerpt}&import_as=link',
    ), 
	
	// C
	
	'connotea' => array(
		'name' => 'Connotea',
		'titleText' => __('Share this on ', 'wpsr') . 'Connotea',
		'icon' => 'connotea.png',
		'url' => 'http://www.connotea.org/addpopup?continue=confirm&amp;uri={url}&amp;title={title}&amp;description={excerpt}',
	),

	'current' => array(
		'name' => 'Current',
		'titleText' => __('Share this on ', 'wpsr') . 'Current',
		'icon' => 'current.png',
		'url' => 'http://current.com/clipper.htm?url={url}&amp;title={title}',
	),
	
	// D
	
	'delicious' => array(
		'name' => 'Delicious',
		'titleText' => __('Post this on ', 'wpsr') . 'Delicious',
		'icon' => 'delicious.png',
		'url' => 'http://delicious.com/post?url={url}&amp;title={title}&amp;notes={excerpt}',
		'support32px' => 1,
	),
	
	'designbump' => array(
		'name' => 'Designbump',
		'titleText' => __('Share this on ', 'wpsr') . 'Designbump',
		'icon' => 'designbump.png',
		'url' => 'http://designbump.com/user/login?destination=submit?url={url}&title={title}&body={excerpt}',
		'support32px' => 1,
	),
	
	'designfloat' => array(
		'name' => 'Design Float',
		'titleText' => __('Submit this to ', 'wpsr') . 'Design Float',
		'icon' => 'designfloat.png',
		'url' => 'http://www.designfloat.com/submit.php?url={url}&amp;title={title}',
		'support32px' => 1,
	),
	
	'digg' => array(
		'name' => 'Digg',
		'titleText' => __('Submit this to ', 'wpsr') . 'Digg',
		'icon' => 'digg.png',
		'url' => 'http://digg.com/submit?phase=2&amp;url={url}&amp;title={title}&amp;bodytext={excerpt}',
		'support32px' => 1,
	),
	
	'diggita' => array(
		'name' => 'Diggita',
		'titleText' => __('Submit this to ', 'wpsr') . 'Diggita',
        'icon' => 'diggita.png',
        'url' => 'http://www.diggita.it/submit.php?url={url}&title={title}',
    ),
	
	'diigo' => array(
		'name' => 'Diigo',
		'titleText' => __('Post this on ', 'wpsr') . 'Diigo',
		'icon' => 'diigo.png',
		'url' => 'http://www.diigo.com/post?url={url}&amp;title={title}',
	),

	'dotnetkicks' => array(
		'name' => 'DotNetKicks',
		'titleText' => __('Share this on ', 'wpsr') . 'DotNetKicks',
		'icon' => 'dotnetkicks.png',
		'url' => 'http://www.dotnetkicks.com/kick/?url={url}&amp;title={title}',
	),

	'dzone' => array(
		'name' => 'DZone',
		'titleText' => __('Add this to ', 'wpsr') . 'DZone',
		'icon' => 'dzone.png',
		'url' => 'http://www.dzone.com/links/add.html?url={url}&amp;title={title}',
		'support32px' => 1,
	),
	
	// E
	
	'ekudos' => array(
		'name' => 'eKudos',
		'titleText' => __('Share this on ', 'wpsr') . 'eKudos',
		'icon' => 'ekudos.png',
		'url' => 'http://www.ekudos.nl/artikel/nieuw?url={url}&amp;title={title}&amp;desc={excerpt}',
	),

	'email' => array(
		'name' => 'Email',
		'titleText' => __('Email this ', 'wpsr') . '',
		'icon' => 'email.png',
		'url' => 'mailto:?subject={de-title}&amp;body={de-excerpt} - {de-url}', // Fixed the bug in v2.4.1
		'support32px' => 1,
	),
	
	// F
	
	'facebook' => array(
		'name' => 'Facebook',
		'titleText' => __('condividi con ', 'wpsr') . 'Facebook', // modify 2012 12 03
		'icon' => 'facebook.png',
		'url' => 'http://www.facebook.com/share.php?u={url}&amp;t={title}',
		'support32px' => 1,
	),

	'fark' => array(
		'name' => 'Fark',
		'titleText' => __('Share this on ', 'wpsr') . 'Fark',
		'icon' => 'fark.png',
		'url' => 'http://cgi.fark.com/cgi/fark/farkit.pl?h={title}&amp;u={url}',
	),

	'fleck' => array(
		'name' => 'Fleck',
		'titleText' => __('Share this on ', 'wpsr') . 'Fleck',
		'icon' => 'fleck.png',
		'url' => 'http://beta3.fleck.com/bookmarklet.php?url={url}&amp;title={title}',
	),

	'friendfeed' => array(
		'name' => 'FriendFeed',
		'titleText' => __('Share this on ', 'wpsr') . 'FriendFeed',
		'icon' => 'friendfeed.png',
		'url' => 'http://www.friendfeed.com/share?title={title}&amp;link={url}',
		'support32px' => 1,
	),
	
	'friendster' => array(
		'name' => 'Friendster',
		'titleText' => __('Share this on ', 'wpsr') . 'Friendster',
		'icon' => 'friendster.png',
		'url' => 'http://www.friendster.com/sharer.php?u={url}&t={title}',
		'support32px' => 1,
	),

	'fsdaily' => array(
		'name' => 'FSDaily',
		'titleText' => __('Share this on ', 'wpsr') . 'FSDaily',
		'icon' => 'fsdaily.png',
		'url' => 'http://www.fsdaily.com/submit?url={url}&amp;title={title}',
	),
	
	// G
	
	'gadugadu' => array(
		'name' => 'Gadu-Gadu',
		'titleText' => __('Share this on ', 'wpsr') . 'Gadu-Gadu',
      'icon' => 'gadugadu.png',
      'url' => 'http://www.gadu-gadu.pl/polec?title={title}&url={url}',
      'support32px' => 1,
   ), // Added version 2.0 - 16-1-2011
	
	'globalgrind' => array(
		'name' => 'Global Grind',
		'titleText' => __('Submit this to ', 'wpsr') . 'Global Grind',
		'icon' => 'globalgrind.png',
		'url' => 'http://globalgrind.com/submission/submit.aspx?url={url}&amp;type=Article&amp;title={title}',
	),
	
	'google' => array(
		'name' => 'Google',
		'titleText' => __('Bookmark this on ', 'wpsr') . 'Google', 
		'icon' => 'google.png',
		'url' => 'http://www.google.com/bookmarks/mark?op=edit&amp;bkmk={url}&amp;title={title}&amp;annotation={excerpt}',
		'support32px' => 1,
	),
	
	'googleplus' => array(
		'name' => 'Google Plus',
		'titleText' => __('condividi con ', 'wpsr') . 'Google Plus', // modify 2012 12 03
		'icon' => 'googleplus.png',
		'url' => 'https://plus.google.com/share?url={url}',
		'support32px' => 1,
	), // Added version 2.4 - 13-2-2012
	
	/*
	'googlebuzz' => array(
		'name' => 'Google Buzz',
		'titleText' => __('Post this on ', 'wpsr') . 'Google Buzz',
        'icon' => 'googlebuzz.png',
        'url' => 'http://www.google.com/buzz/post?url={url}',
		'support32px' => 1,
    ),*/
	
	'googlereader' => array(
		'name' => 'Google Reader',
		'titleText' => __('Share this on ', 'wpsr') . 'Google Reader',
        'icon' => 'googlereader.png',
        'url' => 'http://www.google.com/reader/link?url={url}&title={title}',
		'support32px' => 1,
    ), 
	
	'grono' => array(
		'name' => 'Grono',
		'titleText' => __('Share this on ', 'wpsr') . 'Grono',
		'icon' => 'grono.png',
		'url' => 'http://grono.net/pub/popup/link/urlfetch/?url={url}&title={title}',
		'support32px' => 1,
   ), // Added version 2.0 - 16-1-2011
	
	'gwar' => array(
		'name' => 'Gwar',
		'titleText' => __('Share this on ', 'wpsr') . 'Gwar',
		'icon' => 'gwar.png',
		'url' => 'http://www.gwar.pl/DodajGwar.html?u={url}',
	),
	
	// H
	
	'hackernews' => array(
		'name' => 'HackerNews',
		'titleText' => __('Share this on ', 'wpsr') . 'HackerNews',
		'icon' => 'hackernews.png',
		'url' => 'http://news.ycombinator.com/submitlink?u={url}&amp;t={title}',
	),

	'haohao' => array(
		'name' => 'Haohao',
		'titleText' => __('Submit this to ', 'wpsr') . 'Haohao',
		'icon' => 'haohao.png',
		'url' => 'http://www.haohaoreport.com/submit.php?url={url}&amp;title={title}',
	),

	'healthranker' => array(
		'name' => 'HealthRanker',
		'titleText' => __('Submit this to ', 'wpsr') . 'HealthRanker',
		'icon' => 'healthranker.png',
		'url' => 'http://healthranker.com/submit.php?url={url}&amp;title={title}',
	),

	'hellotxt' => array(
		'name' => 'HelloTxt',
		'titleText' => __('Share this on ', 'wpsr') . 'HelloTxt',
        'icon' => 'hellotxt.png',
        'url' => 'http://hellotxt.com/?status={title}+{url}',
    ),

	'hemidemi' => array(
		'name' => 'Hemidemi',
		'titleText' => __('Bookmark this on ', 'wpsr') . 'Hemidemi',
		'icon' => 'hemidemi.png',
		'url' => 'http://www.hemidemi.com/user_bookmark/new?title={title}&amp;url={url}',
	),

	'hyves' => array(
		'name' => 'Hyves',
		'titleText' => __('Share this on ', 'wpsr') . 'Hyves',
		'icon' => 'hyves.png',
		'url' => 'http://www.hyves.nl/profilemanage/add/tips/?name={title}&amp;text={excerpt}+{url}&amp;rating=5',
		'support32px' => 1,
	),
	
	// I
	
	'identica' => array(
		'name' => 'Identi.ca',
		'titleText' => __('Share this on ', 'wpsr') . 'Identi.ca',
		'icon' => 'identica.png',
		'url' => 'http://identi.ca/notice/new?status_textarea={url}',
	),
	
	'internetmedia' => array(
		'name' => 'Internetmedia',
		'titleText' => __('Share this on ', 'wpsr') . 'Internetmedia',
		'icon' => 'im.png',
		'url' => 'http://internetmedia.hu/submit.php?url={url}',
	),
		
	'indianpad' => array(
		'name' => 'IndianPad',
		'titleText' => __('Submit this to ', 'wpsr') . 'IndianPad',
		'icon' => 'indianpad.png',
		'url' => 'http://www.indianpad.com/submit.php?url={url}',
	),
	
	'instapaper' => array(
		'name' => 'Instapaper',
		'titleText' => __('Add this to ', 'wpsr') . 'Instapaper',
		'icon' => 'instapaper.png',
		'url' => 'http://www.instapaper.com/hello2?url={url}&title={title}',
		'support32px' => 1,
	),
	
	// K
	
	'kciuk' => array(
		'name' => 'Kciuk',
		'titleText' => __('Share this on ', 'wpsr') . 'Kciuk',
		'icon' => 'kciuk.png',
		'url' => 'http://www.kciuk.pl/Dodaj-link/?{url}?{title}/?auto',
		'support32px' => 1,
   ), // Added version 2.0 - 16-1-2011
	
	'kirtsy' => array(
		'name' => 'Kirtsy',
		'titleText' => __('Submit this to ', 'wpsr') . 'Kirtsy',
		'icon' => 'kirtsy.png',
		'url' => 'http://www.kirtsy.com/submit.php?url={url}&amp;title={title}',
	),
	
	// L
	
	'laaikit' => array(
		'name' => 'laaik.it',
		'titleText' => __('Share this on ', 'wpsr') . 'laaik.it',
		'icon' => 'laaikit.png',
		'url' => 'http://laaik.it/NewStoryCompact.aspx?uri={url}&amp;headline={title}&amp;cat=5e082fcc-8a3b-47e2-acec-fdf64ff19d12',
	),
	
	'latafanera' => array(
		'name' => 'LaTafanera',
		'titleText' => __('Submit this to ', 'wpsr') . 'LaTafanera',
        'icon' => 'latafanera.png',
        'url' => 'http://latafanera.cat/submit.php?url={url}',
    ),
	
	'linkagogo' => array(
		'name' => 'LinkaGoGo',
		'titleText' => __('Share this on ', 'wpsr') . 'LinkaGoGo',
		'icon' => 'linkagogo.png',
		'url' => 'http://www.linkagogo.com/go/AddNoPopup?url={url}&amp;title={title}',
	),
	
	'linkarena' => array(
		'name' => 'LinkArena',
		'titleText' => __('Add this to ', 'wpsr') . 'LinkArena',
		'icon' => 'linkarena.png',
		'url' => 'http://linkarena.com/bookmarks/addlink/?url={url}&amp;title={title}',
	),
	
	'linkedin' => array(
		'name' => 'LinkedIn',
		'titleText' => __('Share this on ', 'wpsr') . 'LinkedIn',
		'icon' => 'linkedin.png',
		'url' => 'http://www.linkedin.com/shareArticle?mini=true&amp;url={url}&amp;title={title}&amp;source={blogname}&amp;summary={excerpt}',
		'support32px' => 1,
	),

	'linkter' => array(
		'name' => 'Linkter',
		'titleText' => __('Share this on ', 'wpsr') . 'Linkter',
		'icon' => 'linkter.png',
		'url' => 'http://www.linkter.hu/index.php?action=suggest_link&amp;url={url}&amp;title={title}',
	),
	
	'live' => array(
		'name' => 'Live',
		'titleText' => __('Add this to ', 'wpsr') . 'Live',
		'icon' => 'live.png',
		'url' => 'https://favorites.live.com/quickadd.aspx?marklet=1&amp;url={url}&amp;title={title}',
		'support32px' => 1,
	),
	
	// M
	
	'meneame' => array(
		'name' => 'Meneame',
		'titleText' => __('Submit this to ', 'wpsr') . 'Meneame',
		'icon' => 'meneame.png',
		'url' => 'http://meneame.net/submit.php?url={url}',
	),
	
	'misterwong' => array(
		'name' => 'Mister Wong',
		'titleText' => __('Add this to ', 'wpsr') . 'Mister Wong',
		'icon' => 'misterwong.png',
		'url' => 'http://www.mister-wong.com/addurl/?bm_url={url}&amp;bm_description={title}&amp;plugin=wp-socializer',
		'support32px' => 1,
	),

	/*'MisterWong.DE' => array(
		'icon' => 'misterwong.png',
		'url' => 'http://www.mister-wong.de/addurl/?bm_url={url}&amp;bm_description={title}&amp;plugin=soc',
		'sameImageAs' => 'MisterWong',
	),*/
	
	'mixx' => array(
		'name' => 'Mixx',
		'titleText' => __('Submit this to ', 'wpsr') . 'Mixx',
		'icon' => 'mixx.png',
		'url' => 'http://www.mixx.com/submit?page_url={url}&amp;title={title}',
		'support32px' => 1,
	),
	
	'mob' => array(
		'name' => 'MOB',
		'titleText' => __('Share this on ', 'wpsr') . 'MOB',
        'icon' => 'mob.png',
        'url' => 'http://www.mob.com/share.php?u={url}&t={title}',
    ), 
	
	'msnreporter' => array(
		'name' => 'MSNReporter',
		'titleText' => __('Share this on ', 'wpsr') . 'MSNReporter',
		'icon' => 'msnreporter.png',
		'url' => 'http://reporter.nl.msn.com/?fn=contribute&amp;Title={title}&amp;URL={url}&amp;cat_id=6&amp;tag_id=31&amp;Remark={excerpt}',
	),
	
	'muti' => array(
		'name' => 'Muti',
		'titleText' => __('Share this on ', 'wpsr') . 'Muti',
		'icon' => 'muti.png',
		'url' => 'http://www.muti.co.za/submit?url={url}&amp;title={title}',
	),
	
	'myshare' => array(
		'name' => 'MyShare',
		'titleText' => __('Share this on ', 'wpsr') . 'MyShare',
		'icon' => 'myshare.png',
		'url' => 'http://myshare.url.com.tw/index.php?func=newurl&amp;url={url}&amp;desc={title}',
	),

	'myspace' => array(
		'name' => 'MySpace',
		'titleText' => __('Post this on ', 'wpsr') . 'MySpace',
		'icon' => 'myspace.png',
		'url' => 'http://www.myspace.com/Modules/PostTo/Pages/?u={url}&amp;t={title}',
		'support32px' => 1,
	),
	
	// N
	
	'n4g' => array(
		'name' => 'N4G',
		'titleText' => __('Share this on ', 'wpsr') . '',
		'icon' => 'n4g.png',
		'url' => 'http://www.n4g.com/tips.aspx?url={url}&amp;title={title}',
	),
	
	'netvibes' => array(
		'name' => 'Netvibes',
		'titleText' => __('Share this on ', 'wpsr') . 'Netvibes',
		'icon' => 'netvibes.png',
		'url' =>	'http://www.netvibes.com/share?title={title}&amp;url={url}',
		'support32px' => 1,
	),
	
	'netvouz' => array(
		'name' => 'Netvouz',
		'titleText' => __('Share this on ', 'wpsr') . 'Netvouz',
		'icon' => 'netvouz.png',
		'url' => 'http://www.netvouz.com/action/submitBookmark?url={url}&amp;title={title}&amp;popup=no',
	),
	
	'newsvine' => array(
		'name' => 'NewsVine',
		'titleText' => __('Add this to ', 'wpsr') . 'NewsVine',
		'icon' => 'newsvine.png',
		'url' => 'http://www.newsvine.com/_tools/seed&amp;save?u={url}&amp;h={title}',
		'support32px' => 1,
	),
	
	'nk' => array(
		'name' => 'NK',
		'titleText' => __('Share this on ', 'wpsr') . 'NK',
		'icon' => 'nk.png',
		'url' => 'http://nasza-klasa.pl/sledzik?shout={title} {url}',
		'support32px' => 1,
   ), // Added version 2.0 - 16-1-2011

	'nujij' => array(
		'name' => 'NuJIJ',
		'titleText' => __('Share this on ', 'wpsr') . 'NuJIJ',
		'icon' => 'nujij.png',
		'url' => 'http://nujij.nl/jij.lynkx?t={title}&amp;u={url}&amp;b={excerpt}',
	),
	
	// O
	
	'oknotizie' => array(
		'name' => 'OkNotizie',
		'titleText' => __('Share this on ', 'wpsr') . 'OkNotizie',
		'icon' => 'oknotizie.png',
		'url' => 'http://oknotizie.virgilio.it/post.html.php?url={url}&amp;title={title}',
		'support32px' => 1,
	), // Added version 2.4 - 13-12-2012
	
	'orkut' => array(
		'name' => 'Orkut',
		'titleText' => __('Share this on ', 'wpsr') . 'Orkut',
		'icon' => 'orkut.png',
		'url' => 'http://promote.orkut.com/preview?nt=orkut.com&amp;tt={title}&amp;du={url}&amp;cn={excerpt}',
		'support32px' => 1,
	),
	
	'osnews' => array(
		'name' => 'OSnews',
		'titleText' => __('Share this on ', 'wpsr') . 'OSnews',
		'icon' => 'osnews.png',
		'url' => 'http://osnews.pl/dodaj-niusa/?external=true&title={title}&url={url}',
		'support32px' => 1,
   ), // Added version 2.0 - 16-1-2011
	
	// P
	
	'pdf' => array(
		'name' => 'PDF',
		'titleText' => __('Convert to ', 'wpsr') . 'PDF',
		'icon' => 'pdf.png',
		'url' => 'http://www.printfriendly.com/print?url={url}',
	),
	
	'pingfm' => array(
		'name' => 'Ping.fm',
		'titleText' => __('Share this on ', 'wpsr') . 'Ping.fm',
		'icon' => 'ping.png',
		'url' => 'http://ping.fm/ref/?link={url}&amp;title={title}&amp;body={excerpt}',
		'support32px' => 1,
	),
	
	'pinterest' => array(
		'name' => 'Pinterest',
		'titleText' => __('Submit this to ', 'wpsr') . 'Pinterest',
		'icon' => 'pinterest.png',
		'url' => 'http://www.pinterest.com/pin/create/button/?url={url}&media={image}&description={excerpt}',
		'support32px' => 1,
	),// Added version 2.4 - 13-2-2012
	
	'posterous' => array(
		'name' => 'Posterous',
		'titleText' => __('Share this on ', 'wpsr') . 'Posterous',
		'icon' => 'posterous.png',
		'url' => 'http://posterous.com/share?linkto={url}&amp;title={title}&amp;selection={excerpt}',
		'support32px' => 1,
	),
	
	'print' => array(
		'name' => 'Print',
		'titleText' => __('Print this article ', 'wpsr') . '',
		'icon' => 'printfriendly.png',
		'url' => 'http://www.printfriendly.com/print?url={url}',
		'support32px' => 1,
	),
	
	'propeller' => array(
		'name' => 'Propeller',
		'titleText' => __('Submit this to ', 'wpsr') . 'Propeller',
		'icon' => 'propeller.png',
		'url' => 'http://www.propeller.com/submit/?url={url}',
	),
	
	// R
	
	'ratimarks' => array(
		'name' => 'Ratimarks',
		'titleText' => __('Add this to ', 'wpsr') . 'Ratimarks',
		'icon' => 'ratimarks.png',
		'url' => 'http://ratimarks.org/bookmarks.php/?action=add&address={url}&amp;title={title}',
	),

	'rec6' => array(
		'name' => 'Rec6',
		'titleText' => __('Share this on ', 'wpsr') . 'Rec6',
		'icon' => 'rec6.png',
		'url' => 'http://rec6.via6.com/link.php?url={url}&amp;={title}',
	),

	'reddit' => array(
		'name' => 'Reddit',
		'titleText' => __('Submit this to ', 'wpsr') . 'Reddit',
		'icon' => 'reddit.png',
		'url' => 'http://reddit.com/submit?url={url}&amp;title={title}',
		'support32px' => 1,
	),

	'rss' => array(
		'name' => 'RSS',
		'titleText' => __('Subscribe to ', 'wpsr') . 'RSS',
		'icon' => 'rss.png',
		'url' => '{rss-url}',
		'support32px' => 1,
	),
	
	// S
	
	'scoopeo' => array(
		'name' => 'Scoopeo',
		'titleText' => __('Share this on ', 'wpsr') . 'Scoopeo',
		'icon' => 'scoopeo.png',
		'url' => 'http://www.scoopeo.com/scoop/new?newurl={url}&amp;title={title}',
	),	

	'segnalo' => array(
		'name' => 'Segnalo',
		'titleText' => __('Post this on ', 'wpsr') . 'Segnalo',
		'icon' => 'segnalo.png',
		'url' => 'http://segnalo.alice.it/post.html.php?url={url}&amp;title={title}',
	),
	
	'shetoldme' => array(
		'name' => 'SheToldMe',
		'titleText' => __('Share this on ', 'wpsr') . 'SheToldMe',
        'icon' => 'shetoldme.png',
        'url' => 'http://shetoldme.com/publish?url={url}&title={title}',
    ),
	
	'simpy' => array(
		'name' => 'Simpy',
		'titleText' => __('Add this to ', 'wpsr') . 'Simpy',
		'icon' => 'simpy.png',
		'url' => 'http://www.simpy.com/simpy/LinkAdd.do?href={url}&amp;title={title}',
	),

	'slashdot' => array(
		'name' => 'Slashdot',
		'titleText' => __('Share this on ', 'wpsr') . 'Slashdot',
		'icon' => 'slashdot.png',
		'url' => 'http://slashdot.org/bookmark.pl?title={title}&amp;url={url}',
	),

	'socialogs' => array(
		'name' => 'Socialogs',
		'titleText' => __('Share this on ', 'wpsr') . 'Socialogs',
		'icon' => 'socialogs.png',
		'url' => 'http://socialogs.com/add_story.php?story_url={url}&amp;story_title={title}',
	),
	
	'sphereit' => array(
		'name' => 'SphereIt',
		'titleText' => __('Share this on ', 'wpsr') . 'SphereIt',
		'icon' => 'sphere.png',
		'url' => 'http://www.sphere.com/search?q=sphereit:{url}&amp;title={title}',
	),

	'sphinn' => array(
		'name' => 'Sphinn',
		'titleText' => __('Post this on ', 'wpsr') . 'Sphinn',
		'icon' => 'sphinn.png',
		'url' => 'http://sphinn.com/index.php?c=post&amp;m=submit&amp;link={url}',
		'support32px' => 1,
	),

	'stumbleupon' => array(
		'name' => 'StumbleUpon',
		'titleText' => __('Submit this to ', 'wpsr') . 'StumbleUpon',
		'icon' => 'stumbleupon.png',
		'url' => 'http://www.stumbleupon.com/submit?url={url}&amp;title={title}',
		'support32px' => 1,
	),
	
	// T
	
	'techmeme' => array( 
		'name' => 'Techmeme',
		'titleText' => __('Share this on ', 'wpsr') . 'Techmeme',
		'icon' => 'techmeme.png',
		'url' => 'http://twitter.com/home/?status=tip%20@Techmeme%20{url}%20{title}', 
	), 

	'technorati' => array(
		'name' => 'Technorati',
		'titleText' => __('Add this to ', 'wpsr') . 'Technorati',
		'icon' => 'technorati.png',
		'url' => 'http://technorati.com/faves?add={url}',
		'support32px' => 1,
	),

	'tipd' => array(
		'name' => 'Tipd',
		'titleText' => __('Submit this to ', 'wpsr') . 'Tipd',
		'icon' => 'tipd.png',
		'url' => 'http://tipd.com/submit.php?url={url}',
	),
	
	'tumblr' => array(
		'name' => 'Tumblr',
		'titleText' => __('Share this on ', 'wpsr') . 'Tumblr',
		'icon' => 'tumblr.png',
		'url' => 'http://www.tumblr.com/share?v=3&amp;u={url}&amp;t={title}&amp;s={excerpt}',
		'support32px' => 1,
	),
	
	'twitter' => array(
		'name' => 'Twitter',
		'titleText' => __('condividi con ', 'wpsr') . 'Twitter', // modify 2012 12 03
		'icon' => 'twitter.png',
		'url' => 'http://twitter.com/home?status={title}%20-%20{s-url}%20{twitter-username}',
		'support32px' => 1,
	),
	
	// U
	
	'upnews' => array(
		'name' => 'Upnews',
		'titleText' => __('Submit this to ', 'wpsr') . 'Upnews',
		'icon' => 'upnews.png',
		'url' => 'http://www.upnews.it/submit?url={url}&amp;title={title}',
	),
	
	// V
	
	'viadeofr' => array(
		'name' => 'Viadeo FR',
		'titleText' => __('Share this on ', 'wpsr') . 'Viadeo FR',
        'icon' => 'viadeo.png',
        'url' => 'http://www.viadeo.com/shareit/share/?url={url}&title={title}&urllanguage=fr',
    ),
	
	// W
	
	'webnewsde' => array(
		'name' => 'Webnews.de',
		'titleText' => __('Share this on ', 'wpsr') . 'Webnews.de',
        'icon' => 'webnews.png',
        'url' => 'http://www.webnews.de/einstellen?url={url}&amp;title={title}',
    ),

	'webride' => array(
		'name' => 'Webride',
		'titleText' => __('Share this on ', 'wpsr') . 'Webride',
		'icon' => 'webride.png',
		'url' => 'http://webride.org/discuss/split.php?uri={url}&amp;title={title}',
	),
	
	'wikio' => array(
		'name' => 'Wikio',
		'titleText' => __('Share this on ', 'wpsr') . 'Wikio',
		'icon' => 'wikio.png',
		'url' => 'http://www.wikio.com/vote?url={url}',
	),
	
	/*'Wikio FR' => array(
		'icon' => 'wikio.png',
		'url' => 'http://www.wikio.fr/vote?url={url}',
		'sameImageAs' => 'Wikio',
	),

	'Wikio IT' => array(
		'icon' => 'wikio.png',
		'url' => 'http://www.wikio.it/vote?url={url}',
		'sameImageAs' => 'Wikio',
	),*/
	
	'wists' => array(
		'name' => 'Wists',
		'titleText' => __('Share this on ', 'wpsr') . 'Wists',
		'icon' => 'wists.png',
		'url' => 'http://wists.com/s.php?c=&amp;r={url}&amp;title={title}',
	),
	
	'wykop' => array(
		'name' => 'Wykop',
		'titleText' => __('Share this on ', 'wpsr') . 'Wykop',
		'icon' => 'wykop.png',
		'url' => 'http://www.wykop.pl/dodaj?url={url}',
		'support32px' => 1,  // Added version 2.0 - 16-1-2011
	),
	
	// X
	
	'xerpi' => array(
		'name' => 'Xerpi',
		'titleText' => __('Add this to ', 'wpsr') . 'Xerpi',
		'icon' => 'xerpi.png',
		'url' => 'http://www.xerpi.com/block/add_link_from_extension?url={url}&amp;title={title}',
	),
	
	// Y
	
	'yahoobookmarks' => array(
		'name' => 'Yahoo! Bookmarks',
		'titleText' => __('Add this to ', 'wpsr') . 'Yahoo! Bookmarks',
		'icon' => 'yahoo.png',
		'url' => 'http://bookmarks.yahoo.com/toolbar/savebm?u={url}&amp;t={title}&opener=bm&amp;ei=UTF-8&amp;d={excerpt}',
		'support32px' => 1,
	),
	
	'yahoobuzz' => array(
		'name' => 'YahooBuzz',
		'titleText' => __('Submit this to ', 'wpsr') . 'YahooBuzz',
		'icon' => 'yahoobuzz.png',
		'url' => 'http://buzz.yahoo.com/submit/?submitUrl={url}&amp;submitHeadline={title}&amp;submitSummary={excerpt}&amp;submitAssetType=text',
		'support32px' => 1,
	),

	'yigg' => array(
		'name' => 'Yigg',
		'titleText' => __('Share this on ', 'wpsr') . 'Yigg',
		'icon' => 'yiggit.png',
		'url' => 'http://yigg.de/neu?exturl={url}&amp;exttitle={title}',
	 ),
	
);

$wpsr_button_code_list = array(
	"{social-bts-16px}", "{social-bts-32px}", "{addthis-bt}", 
	"{addthis-tb-16px}", "{addthis-tb-32px}", "{addthis-sc}", 
	"{sharethis-vcount}", "{sharethis-hcount}", "{sharethis-large}", 
	"{sharethis-regular}", "{sharethis-regular2}", "{sharethis-bt}", 
	"{sharethis-classic}", "{plusone-small}", "{plusone-medium}", 
	"{plusone-standard}", "{plusone-tall}", "{retweet-bt}", 
	"{digg-bt}", "{facebook-like}", "{facebook-send}", 
	"{reddit-1}", "{reddit-2}", "{reddit-3}", 
	"{stumbleupon-1}", "{stumbleupon-2}", "{stumbleupon-3}", 
	"{stumbleupon-5}", "{linkedin-standard}", "{linkedin-right}",
	"{linkedin-top}", "{pinterest-nocount}", "{pinterest-horizontal}", 
	"{pinterest-vertical}", "{custom-1}", "{custom-2}"
);

$wpsr_shortcodes_list = array(
	'Social buttons' => '[wpsr_socialbts]', 
	'Addthis' => '[wpsr_addthis]',
	'Sharethis'	=> '[wpsr_sharethis]', 
	'Retweet' => '[wpsr_retweet]',
	'Google +1' => '[wpsr_plusone]',
	'Digg' => '[wpsr_digg]',
	'Facebook' => '[wpsr_facebook]',
	'StumbleUpon' => '[wpsr_stumbleupon]',
	'Reddit' => '[wpsr_reddit]',
	'LinkedIn' => '[wpsr_linkedin]',
	'Pinterest' => '[wpsr_pinterest]'
);

$wpsr_default_templates = array(
	1 => array( 'name' => 'Template 1' ),
	2 => array( 'name' => 'Template 2' )
);

$wpsr_floating_bar_bts = array(
	'Retweet' => array(
		'float_left' => '[wpsr_retweet service="twitter" type="normal"]', 
		'bottom_fixed' => '[wpsr_retweet service="twitter"]', 
	),
	'Google +1' => array(
		'float_left' => '[wpsr_plusone type="tall"]', 
		'bottom_fixed' => '[wpsr_plusone type="medium"]', 
	),
	'Digg' => array(
		'float_left' => '[wpsr_digg type="DiggMedium"]', 
		'bottom_fixed' => '[wpsr_digg type="DiggCompact"]', 
	),
	'Facebook' => array(
		'float_left' => '[wpsr_facebook style="box_count"]', 
		'bottom_fixed' => '[wpsr_facebook style="button_count"]', 
	),
	'StumbleUpon' => array(
		'float_left' => '[wpsr_stumbleupon type="5"]', 
		'bottom_fixed' => '[wpsr_stumbleupon type="1"]', 
	),
	'Reddit' => array(
		'float_left' => '[wpsr_reddit type="2"]', 
		'bottom_fixed' => '[wpsr_reddit type="1"]', 
	),
	'LinkedIn' => array(
		'float_left' => '[wpsr_linkedin type="top"]', 
		'bottom_fixed' => '[wpsr_linkedin type="right"]', 
	),
	'Pinterest' => array(
		'float_left' => '[wpsr_pinterest type="vertical"]', 
		'bottom_fixed' => '[wpsr_pinterest type="horizontal"]', 
	),
	'Email' => array(
		'float_left' => '[wpsr_socialbts output="singles" type="32px" services="email" sprites=0 effect=none]',
		'bottom_fixed' => '[wpsr_socialbts output="singles" services="email" label=1 sprites=0 effect=none]'
	),
	'Print' => array(
		'float_left' => '[wpsr_socialbts output="singles" type="32px" services="print" sprites=0 effect=none]',
		'bottom_fixed' => '[wpsr_socialbts output="singles" services="print" label=1 sprites=0 effect=none]'
	)
);

$wpsr_addthis_lang_array = array(
	'en'=>'English', 'ar'=>'Arabic', 'zh'=>'Chinese', 'cs'=>'Czech', 'da'=>'Danish', 'nl'=>'Dutch','fa'=>'Farsi', 'fi'=>'Finnish', 'fr'=>'French', 'ga'=>'Gaelic', 'de'=>'German', 'el'=>'Greek', 'he'=>'Hebrew', 'hi'=>'Hindi', 'it'=>'Italian', 'ja'=>'Japanese', 'ko'=>'Korean', 'lv'=>'Latvian', 'lt'=>'Lithuanian', 'no'=>'Norwegian', 'pl'=>'Polish', 'pt'=>'Portugese', 'ro'=>'Romanian', 'ru'=>'Russian', 'sk'=>'Slovakian', 'sl'=>'Slovenian', 'es'=>'Spanish', 'sv'=>'Swedish', 'th'=>'Thai', 'ur'=>'Urdu', 'cy'=>'Welsh', 'vi'=>'Vietnamese'
);

## Initializations
function wpsr_init(){
	global $wpsr_default_templates;
	$user_template = get_option('wpsr_templates');
	
	if(empty($user_template)){
		update_option('wpsr_templates', $wpsr_default_templates);
	}else{
		$merged_array = $wpsr_default_templates + $user_template;
		if($user_template != $merged_array){
			update_option('wpsr_templates', $merged_array);
		}		
	}
	
	// Include the plugin translations
	load_plugin_textdomain('wpsr', false, dirname(plugin_basename( __FILE__ )) . '/languages');
}
add_action('admin_init','wpsr_init');

## Include WP Socializer Processer files
require_once('admin/wpsr-admin.php');
require_once('admin/wpsr-admin-other.php');
require_once('admin/wpsr-admin-floating-bar.php');
require_once('includes/wpsr-addthis.php');
require_once('includes/wpsr-sharethis.php');
require_once('includes/wpsr-google.php'); // Since v2.0
require_once('includes/wpsr-retweet.php');
require_once('includes/wpsr-digg.php');
require_once('includes/wpsr-facebook.php');
require_once('includes/wpsr-socialbuttons.php');
require_once('includes/wpsr-other.php');
require_once('includes/wpsr-custom.php');
require_once('includes/wpsr-shortcodes.php');
require_once('includes/wpsr-widgets.php'); // Since v2.3
require_once('includes/wpsr-floatingbar.php'); // Since v2.4

## General function
function strpos_arr($haystack, $needle) { 
    if(!is_array($needle)) $needle = array($needle); 
    foreach($needle as $what) { 
        if(($pos = strpos($haystack, $what))!==false) return $pos; 
    } 
    return false; 
} 

## wpsr Is active check
function wpsr_is_active(){
    if (get_option("wpsr_active") == 1) {
        return 1;
    }else{
		return 0;
    }
}

## wpsr plugin activate
function wpsr_plugin_activate(){
	// Set the defaults to the first time users
	$active = get_option('wpsr_active');
	if($active == ''){
		wpsr_reset_values();
	}
	update_option("wpsr_active", 1);
	
	// Set the defaults to the Floating share bar
	$floatbts = get_option('wpsr_template_floating_bar_data');
	if($floatbts == ''){
		wpsr_floatbts_reset_values();
	}
}
register_activation_hook(__FILE__, 'wpsr_plugin_activate');

## wpsr plugin deactivate
function wpsr_plugin_deactivate(){
	update_option("wpsr_active", 0);
}
register_deactivation_hook(__FILE__, 'wpsr_plugin_deactivate');

## Admin Notices
function wpsr_admin_notices(){
	if(!wpsr_is_active() && $_GET['page'] != 'wp_socializer'){
		echo '<div class="updated fade"><p>' . __('<b>WP Socializer</b> plugin is intalled. Please adjust your settings', 'wpsr') . ' <a href="' . get_bloginfo('wpurl') . '/wp-admin/admin.php?page=wp_socializer">' . __('in this page', 'wpsr') . '.</a></p></div>';
	}
}
add_action('admin_notices', 'wpsr_admin_notices');

## Action Links
function wpsr_plugin_actions($links, $file){
	static $this_plugin;
	if(!$this_plugin) $this_plugin = plugin_basename(__FILE__);
	if( $file == $this_plugin ){
		$settings_link = '<a href="admin.php?page=wp_socializer">' . __('Settings' ,'wpsr') . '</a> ' . '|' . ' <a href="http://www.aakashweb.com/" target="_blank">' . __('Support' ,'wpsr') . '</a>';
		$links = array_merge( array($settings_link), $links);
	}
	return $links;
}
add_filter('plugin_action_links', 'wpsr_plugin_actions', 10, 2);

## Include the required scripts and styles
if( !is_admin()){
	// jQuery
	wp_deregister_script('jquery');
	wp_register_script('jquery', ("http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"), false, WPSR_VERSION);
	wp_enqueue_script('jquery');
}

/**
  * One function for displaying the buttons in theme files
  * Use wp_socializer(the button code or template name) in the theme files to print the 
  * button or the template
  * 
  * Available button codes are given in the variable $wpsr_button_code_list (line 582) without brackets
  * Available template name are 'template1' and 'template2'
  */
  
function wp_socializer($to_display, $params=""){
	switch($to_display){
		case 'socialbts' :
			return wpsr_socialbts($params);
			break;
			
		case 'addthis' :
			return wpsr_addthis($params);
			break;
			
		case 'sharethis' :
			return wpsr_sharethis($params);
			break;	
			
		case 'retweet' :
			return wpsr_retweet($params);
			break;
			
		case 'digg' :
			return wpsr_digg($params);
			break;
			
		case 'facebook' :
			return wpsr_facebook($params);
			break;
			
		case 'plusone' :
			return wpsr_plusone($params);
			break;
			
		case 'stumbleupon' :
			return wpsr_stumbleupon($params);
			break;
		
		case 'reddit' :
			return wpsr_reddit($params);
			break;
			
		case 'linkedin' :
			return wpsr_linkedin($params);
			break;
		
		case 'pinterest':
			return wpsr_pinterest($params);
			break;
		
		case 'custom-1' :
			return wpsr_custom_bt('custom1');
			break;
			
		case 'custom-2' :
			return wpsr_custom_bt('custom2');
			break;
		
		case 'template-1' :
			return wpsr_process_template('template1');
			break;
			
		case 'template-2' :
			return wpsr_process_template('template2');
			break;
	}
}

/**
  * One function for getting the url and title of the page
  * outside the loop and inside the loop
  *
  * Uses super variables to get the page url outside loop and wp_title()
  * to get the page title. 
  **/

function wpsr_get_post_details(){
	// Get the global variables
	global $post;
	
	// Inside loop
	$permalink_inside_loop = get_permalink($post->ID);
	$title_inside_loop = str_replace('+', '%20', get_the_title($post->ID));
	$excerpt_inside_loop = strip_tags(strip_shortcodes($post->post_excerpt));
	$image_inside_loop = wpsr_get_first_image($post->ID);
	
	// If excerpt is null
	if($excerpt_inside_loop == ''){
		$excerpt_inside_loop = substr(strip_tags(strip_shortcodes($post->post_content)), 0, 250);
	}
	
	// Outside loop
	$permalink_outside_loop = (!empty($_SERVER['HTTPS'])) ? "https://" . $_SERVER['SERVER_NAME'] . $_SERVER['REQUEST_URI'] : "http://" . $_SERVER['SERVER_NAME'] . $_SERVER['REQUEST_URI'];
	$title_outside_loop = str_replace('+', '%20', wp_title('', 0));
	$excerpt_outside_loop = $title_outside_loop;
	
	// If title is null
	if($title_outside_loop == ''){
		$title_outside_loop = str_replace('+', '%20', get_bloginfo('name'));
	}
	
	if(in_the_loop()){
		$details = array(
			'permalink' => $permalink_inside_loop,
			'title' => trim($title_inside_loop),
			'excerpt' => $excerpt_inside_loop,
			'image' => $image_inside_loop
		);
		
	}else{
		$details = array(
			'permalink' => $permalink_outside_loop,
			'title' => trim($title_outside_loop),
			'excerpt' => $excerpt_outside_loop,
			'image' => ''
		);
	}
	
	return $details;

}

// Get the first image of the post
function wpsr_get_first_image($postID){					
	$args = array(
		'numberposts' => 1,
		'order'=> 'ASC',
		'post_mime_type' => 'image',
		'post_parent' => $postID,
		'post_status' => null,
		'post_type' => 'attachment'
	);
	
	$attachments = get_children( $args );
		
	if ($attachments){
		foreach($attachments as $attachment){
			return $attachment->guid;
		}
	}
}

function wpsr_process_template($no, $rss = 0){

	// Get the global variables
	global $wpsr_button_code_list;
	
	$wpsr_button_processed_list = array(
		wpsr_socialbts_template('16px'),		wpsr_socialbts_template('32px'), 		wpsr_addthis_bt('button'), 
		wpsr_addthis_bt('toolbar', '16px'),		wpsr_addthis_bt('toolbar', '32px'), 	wpsr_addthis_bt('sharecount'), 
		wpsr_sharethis_bt('vcount'),			wpsr_sharethis_bt('hcount'),			wpsr_sharethis_bt('large'), 
		wpsr_sharethis_bt('regular'), 			wpsr_sharethis_bt('regular2'),			wpsr_sharethis_bt('buttons'), 
		wpsr_sharethis_bt('classic'), 			wpsr_plusone_bt('small'),				wpsr_plusone_bt('medium'), 
		wpsr_plusone_bt('standard'),			wpsr_plusone_bt('tall'),				wpsr_retweet_bt(), 
		wpsr_digg_bt(), 						wpsr_facebook_bt('like'),				'' /* Facebook Send button not available */, 
		wpsr_reddit_bt('1'), 					wpsr_reddit_bt('2'),					wpsr_reddit_bt('3'), 
		wpsr_stumbleupon_bt('1'),				wpsr_stumbleupon_bt('2'),				wpsr_stumbleupon_bt('3'), 
		wpsr_stumbleupon_bt('5'),				wpsr_linkedin_bt('standard'),			wpsr_linkedin_bt('right'),
		wpsr_linkedin_bt('top'),				wpsr_pinterest_bt('nocount'), 			wpsr_pinterest_bt('horizontal'),
		wpsr_pinterest_bt('vertical'),			wpsr_custom_bt('custom1'),				wpsr_custom_bt('custom2')
	);

	$wpsr_button_processed_list_rss = array(
		wpsr_socialbts_rss('16px'), 	wpsr_socialbts_rss('32px'), 		wpsr_addthis_rss_bt(), 
		wpsr_addthis_rss_bt(), 			wpsr_addthis_rss_bt(), 				wpsr_addthis_rss_bt(), 
		wpsr_sharethis_rss_bt(), 		wpsr_sharethis_rss_bt(), 			wpsr_sharethis_rss_bt(), 
		wpsr_sharethis_rss_bt(), 		wpsr_sharethis_rss_bt(), 			wpsr_sharethis_rss_bt(), 
		wpsr_sharethis_rss_bt(), 		wpsr_plusone_rss_bt(), 				wpsr_plusone_rss_bt(), 
		wpsr_plusone_rss_bt(), 			wpsr_plusone_rss_bt(),				wpsr_retweet_rss_bt(), 
		wpsr_digg_rss_bt(), 			wpsr_facebook_rss_bt(), 			wpsr_facebook_rss_bt(), 
		wpsr_reddit_rss_bt(), 			wpsr_reddit_rss_bt(), 				wpsr_reddit_rss_bt(), 
		wpsr_stumbleupon_rss_bt(),		wpsr_stumbleupon_rss_bt(), 			wpsr_stumbleupon_rss_bt(), 
		wpsr_stumbleupon_rss_bt(), 		wpsr_linkedin_rss_bt(), 			wpsr_linkedin_rss_bt(),
		wpsr_linkedin_rss_bt(), 		wpsr_custom_bt('custom1'), 			wpsr_custom_bt('custom2')
	); 
	
	// Get the template data
	$wpsr_template[$no] = get_option('wpsr_template' . $no . '_data');
	
	if(!$rss)
		$wpsr_template_processed = str_replace($wpsr_button_code_list, $wpsr_button_processed_list, do_shortcode($wpsr_template[$no]['content']));
	else
		$wpsr_template_processed = str_replace($wpsr_button_code_list, $wpsr_button_processed_list_rss, $wpsr_template[$no]['content']);
		
	return $wpsr_template_processed;
}

// Class to insert the template below the content and the excerpt
class WPSR_Template_Output{
	protected $callType;
	
	function WPSR_Template_Output($type){
		$this->callType = $type;
	}
	
	function output($content = ''){

		// Get the global variables
		global $post;
		$tempContent = $content;
		
		// Check whether the call from "the_excerpt" or the "get_the_excerpt" function
		$excerpt = 0;
		$call = debug_backtrace();
		foreach($call as $val){
			if($val['function'] == 'the_excerpt' || $val['function'] == 'get_the_excerpt'){
				$excerpt = 1;
			}
		}
		
		$templates = get_option('wpsr_templates');
		
		// Loop through all the templates
		foreach($templates as $k => $v){
			$wpsr_template[$k] = get_option('wpsr_template' . $k . '_data');
			
			if(($this->callType == 'content' && $excerpt !== 1) || ($this->callType == 'excerpt' && $wpsr_template[$k]['inexcerpt'] == 1)){
			
				// Check page conditionals
				if (is_home() == 1 && $wpsr_template[$k]['inhome'] == 1){
					$flag = 1;
					
				}elseif (is_single() == 1 && $wpsr_template[$k]['insingle'] == 1){
					$flag = 1;
					
				}elseif (is_page() == 1 && $wpsr_template[$k]['inpage'] == 1){
					$flag = 1;
					
				}elseif (is_category() == 1 && $wpsr_template[$k]['incategory'] == 1){
					$flag = 1;
				
				}elseif (is_tag() == 1 && $wpsr_template[$k]['intag'] == 1){
					$flag = 1;
					
				}elseif (is_date() == 1 && $wpsr_template[$k]['indate'] == 1){
					$flag = 1;
					
				}elseif (is_author() == 1 && $wpsr_template[$k]['inauthor'] == 1){
					$flag = 1;
					
				}elseif(is_search() == 1 && $wpsr_template[$k]['insearch'] == 1){
					$flag = 1;
				
				}elseif(is_feed() == 1 && $wpsr_template[$k]['infeed'] == 1){
					$flag = 2;
				
				}else{
					$flag = 0;
				}
						
				// Check for page conditionals
				if($flag == 1){
					$wpsr_template_processed = wpsr_process_template($k);
				}elseif($flag == 2){
					$wpsr_template_processed = wpsr_process_template($k, 1);
				}elseif($flag == 0){
					$wpsr_template_processed = '';
				}
				
				// Check whether displaying template1 in the post is enabled
				if (get_post_meta($post->ID,'_wpsr-disable-template' . $k, true) != 1){
				
					// Check position conditionals
					if($wpsr_template[$k]['abvcontent'] == 1 && $wpsr_template[$k]['blwcontent'] == 1){
						$tempContent = $wpsr_template_processed . $tempContent . $wpsr_template_processed;
						
					}elseif($wpsr_template[$k]['abvcontent'] == 1){
						$tempContent = $wpsr_template_processed . $tempContent;
					
					}elseif($wpsr_template[$k]['blwcontent'] == 1){
						$tempContent = $tempContent . $wpsr_template_processed;
						
					}
				}
				
			}//if
		
		}//foreach
		
		return $tempContent; 
	}
};

## Add required filters and check whether WP Socializer is disabled
$wpsr_settings = get_option('wpsr_settings_data');

if(!$wpsr_settings['disablewpsr']){

	// Create dummy objects to hold the call type
	$wpsr_content_op = new WPSR_Template_Output('content');
	$wpsr_excerpt_op = new WPSR_Template_Output('excerpt');
	
	// Filters
	add_filter('the_content', array($wpsr_content_op, 'output'));
	add_filter('the_excerpt', array($wpsr_excerpt_op, 'output'));

}

## Checks whether the button is used in any of the templates
function wpsr_button_used($name){
	$temp_data = '';
	$button_codes = array(
		'facebook' => array('{facebook-like}', '{facebook-send}', '[wpsr_facebook'),
		'retweet' => array('{retweet-bt}', '[wpsr_retweet'),
		'digg' => array('{digg-bt}', '[wpsr_digg'),
		'addthis' => array("{addthis-bt}", "{addthis-tb-16px}", "{addthis-tb-32px}", "{addthis-sc}"),
		'sharethis' => array("{sharethis-large}", "{sharethis-hcount}", "{sharethis-vcount}", "{sharethis-regular}", "{sharethis-regular2}", "{sharethis-bt}", "{sharethis-classic}"),
		'plusone' => array('{plusone-small}', '{plusone-medium}', '{plusone-standard}', '{plusone-tall}', '[wpsr_plusone'),
		'linkedin' => array('{linkedin-standard}', '{linkedin-right}', '{linkedin-top}', '[wpsr_linkedin'),
		'stumbleupon' => array('{stumbleupon-1}', '{stumbleupon-2}', '{stumbleupon-3}', '{stumbleupon-5}', '[wpsr_stumbleupon'),
		'pinterest' => array('{pinterest-nocount}', '{pinterest-horizontal}', '{pinterest-vertical}', '[wpsr_pinterest')
	);
	
	$templates = get_option('wpsr_templates');
	foreach($templates as $k => $v){
		$wpsr_template[$k] = get_option('wpsr_template' . $k . '_data');
		$temp_data .= $wpsr_template[$k]['content'];
	}
	
	$temp_data .= wpsr_process_floatingbts();
	
	$is_bt_used = strpos_arr($temp_data, $button_codes[$name]);

	if ($is_bt_used === false) {
		return 0;
	} else {
		return 1;
	}
	
}

## Add the button scripts to the header
function wpsr_scripts_adder(){

	## Social Button options
	$wpsr_socialbt = get_option('wpsr_socialbt_data');
	$wpsr_socialbt_loadcss = $wpsr_socialbt['loadcss'];
	
	if($wpsr_socialbt_loadcss == 1){
		wpsr_socialbts_script();
	}
	
	# Get Retweet Button Option
	$wpsr_retweet = get_option('wpsr_retweet_data');
	$wpsr_retweet_service = $wpsr_retweet['service'];
	
	if(wpsr_button_used('retweet') == 1 && $wpsr_retweet_service == 'topsy'){
		echo wpsr_retweet_topsy_script();
	}
	
	if(wpsr_button_used('retweet') == 1 && $wpsr_retweet_service == 'twitter'){
		echo wpsr_retweet_twitter_script();
	}
	
	if(wpsr_button_used('digg') == 1){
		echo wpsr_digg_script();
	}
	
	if(wpsr_button_used('addthis') == 1){
		echo wpsr_addthis_script();
	}
	
	if(wpsr_button_used('sharethis') == 1){
		echo wpsr_sharethis_script();
	}
	
	if(wpsr_button_used('plusone') == 1){
		echo wpsr_plusone_script();
	}
	
	if(wpsr_button_used('linkedin') == 1){
		echo wpsr_linkedin_script();
	}
	
	if(wpsr_button_used('stumbleupon') == 1){
		echo wpsr_stumbleupon_script();
	}

}

## Add the misc/small scripts to the footer
function wpsr_footer(){
	if(wpsr_addtofavorites_bt_used()){
		wpsr_addtofavorites_script();
	}
	
	if(wpsr_button_used('pinterest') == 1){
		echo wpsr_pinterest_script();
	}
}

if(!$wpsr_settings['disablewpsr']){
	if($wpsr_settings['scriptsplace'] == 'header'){
		add_action('wp_head', 'wpsr_scripts_adder');
	}else{
		add_action('wp_footer', 'wpsr_scripts_adder');
	}
	
	add_action('wp_footer', 'wpsr_footer');
}

## Add notification to the dashboard right now
function wpsr_dashboard_rightnow(){
	$wpsr_settings = get_option('wpsr_settings_data');
	$wpsr_settings_disablewpsr = $wpsr_settings['disablewpsr'];
	
	if($wpsr_settings_disablewpsr == 1){
		echo '<p class="message">' . __('WP Socializer is <span style="color:red;"><b>disabled</b></span>', 'wpsr') . '</p>';
	}
}
add_action('rightnow_end','wpsr_dashboard_rightnow');

## Add the "WP Socializer" menu to the admin bar.
function wpsr_adminbar() {
    global $wp_admin_bar, $wpdb, $post;
    if ( !is_super_admin() || !is_admin_bar_showing()){
		return;
	}
	
	$adminPage = get_option('home') . '/wp-admin/admin.php?page=wp_socializer'; // Broken link fix v2.1
	
	$wp_admin_bar->add_menu( array( 'id' => 'wpsr_adminbar_menu', 'title' => 'WP Socializer', 'href' => $adminPage));
	$wp_admin_bar->add_menu( array( 'parent' => 'wpsr_adminbar_menu', 'title' => __('Edit the templates', 'wpsr'), 'href' => $adminPage . '#tab-3'));
	
	if(is_single() || is_page()){
		$current_object = get_queried_object();
		$postEdit = get_option('home') . '/wp-admin/post.php?action=edit&post=' . $post->ID;
		$wp_admin_bar->add_menu( array( 'parent' => 'wpsr_adminbar_menu', 'title' => __('Disable WP Socializer in this page', 'wpsr'), 'href' => get_edit_post_link($current_object->ID) . '#wp_socializer' ));
	}
	
	$wp_admin_bar->add_menu( array( 'parent' => 'wpsr_adminbar_menu', 'title' => __('Help', 'wpsr'), 'href' => 'http://www.aakashweb.com/wordpress-plugins/wp-socializer/'));
	
}
add_action('admin_bar_menu', 'wpsr_adminbar', 1000);

/*
 * TinyMCE button for post editor
 * Used for adding shortcodes in posts
 * since v2.0
 */
  
function wpsr_add_wpsr_button() {

	if (!current_user_can('edit_posts') && ! current_user_can('edit_pages'))
		return;
	
	if ( get_user_option('rich_editing') == 'true') {
		add_filter("mce_external_plugins", "wpsr_add_wpsrbutton_tinymce");
		add_filter('mce_buttons', 'wpsr_register_wpsrbutton_tinymce');
	}
}
 
function wpsr_register_wpsrbutton_tinymce($buttons) {
   array_push($buttons, "|", "wpsrbutton");
   return $buttons;
}

function wpsr_add_wpsrbutton_tinymce($plugin_array) {
   $plugin_array['wpsrbutton'] = WPSR_ADMIN_URL . 'js/tinymce/editor_plugin.js';
   return $plugin_array;
}

// init process for button control
add_action('init', 'wpsr_add_wpsr_button');
?>