<?php
/** * close all open xhtml tags at the end of the string 

 * * @param string $html

 * @return string

 * @author Milian <mail@mili.de>

 */function closetags($html) {

  #put all opened tags into an array

  preg_match_all('#<([a-z]+)(?: .*)?(?<![/|/ ])>#iU', $html, $result);

  $openedtags = $result[1];   #put all closed tags into an array

  preg_match_all('#</([a-z]+)>#iU', $html, $result);

  $closedtags = $result[1];

  $len_opened = count($openedtags);

  # all tags are closed

  if (count($closedtags) == $len_opened) {

    return $html;

  }

  $openedtags = array_reverse($openedtags);

  # close tags

  for ($i=0; $i < $len_opened; $i++) {

    if (!in_array($openedtags[$i], $closedtags)){

      $html .= '</'.$openedtags[$i].'>';

    } else {

      unset($closedtags[array_search($openedtags[$i], $closedtags)]);    }

  }  return $html;}  

// Original PHP code by Chirp Internet: www.chirp.com.au
// Please acknowledge use of this code by including this header.
// function that will truncate text to the $break character before $limit:
function myTruncate2($string, $limit, $break=" ", $pad="...")
{
  //strip all tags but : <strong>, <underline>, <em>, <span>, <del>
  $string= strip_tags($string,'<strong><underline><em><span><del>');
  // return with no change if string is shorter than $limit
  if(strlen($string) <= $limit) return $string;

  $string = substr($string, 0, $limit);
  if(false !== ($breakpoint = strrpos($string, $break))) {
    $string = substr($string, 0, $breakpoint);
  }
  // close <spam> tags if any open
  return closetags($string) . $pad;
}

/*
		display slider in hp
		2012 05 15 rel 0.1
		2013 01 24 rel 0.2 ora visualizza 4 immagini 
*/
function display_slider_link_hp(){  
echo '<div class="aevo_slider2_hp">';
	if (have_posts()) : 
		$my_query = new WP_Query('cat=3');
		echo '<div id="aevo_slider2_scrolling_hp">';
			echo '<ul>';
			$j=0;
			while ($my_query->have_posts() && ($j<4)) : $my_query->the_post(); 
				$post_ide=$my_query->post->ID;
				echo '<li>';
					echo '<div class="aevo_slider2_content_hp" style="background-image:url('.get_post_meta($post_ide,"slider_image", $single=true).');">';;
					echo '<div class="aevo_slider2_content_testo_hp" >';
					echo '<a href="'.get_permalink($post_ide).'">';
							echo '<span class="aevo_slider2_content_text_hp" style="padding-right: 5px;">';
									echo get_the_excerpt($post_ide);
							echo '</span>';
							echo '<span class="aevo_slider2_content_link_hp" style="display: none;">';
										echo ' more';
							echo '</span>';
							echo '<img alt="" src="'.get_bloginfo('template_directory').'/images/ipc_freccia.png"/>';
					echo '</a>';
					echo '</div>';
				echo '</div>';
				echo '</li>';
				$j=$j+1;					
			endwhile;
		echo '</ul>';		
		echo '</div>';
		echo '<div class="cleared">';
		echo '</div>';
	endif;
echo '</div>';
}
/*
		display news_slider in hp
		2012 05 15 rel 0.1
*/
define("BEG_MAX_LEN_BOX_NEWS1", "140");
function display_news_slider_link_hp(){  
echo '<div class="aevo_news_slider2_hp">';
	if (have_posts()) : 
		/* $my_query = new WP_Query('cat=14'); */
		$my_query = new WP_Query( array( 'post_type' => 'event',  'event-categories' => 'eventi' ) );
		echo '<div id="aevo_news_slider2_scrolling_hp">';
			echo '<ul>';
			$j=0;
			while ($my_query->have_posts() && ($j<3)) : $my_query->the_post(); 
				$post_ide=$my_query->post->ID;
				echo '<li>';
					echo '<div class="aevo_news_slider2_content_hp">';
						echo '<a  href="'.get_permalink( $post_ide ).'">';
							echo '<div class="aevo_news_slider2_content_testo_hp" >';
								echo '<span class="aevo_news_slider2_content_data_hp">';
									/* the_time('F Y'); */
									echo do_shortcode('[event post_id="'.get_the_ID().'"]#_EVENTDATES[/event]');
									echo '<br/>';
									echo '<span class="aevo_news_slider2_content_title_hp">';
										$title=the_title('','',false);
										echo $title.'<br/>';
										echo '<span class="aevo_news_slider2_content_text_hp">';
											$content_len = BEG_MAX_LEN_BOX_NEWS1-strlen($title);
											$content=myTruncate2(get_the_content(),$content_len);
											echo $content;
											echo '<span class="aevo_news_slider2_content_link_hp">';
												echo '<br/>+more';
											echo '</span>';
										echo '</span>';
									echo '</span>';
								echo '</span>';
							echo '</div>';
						echo '</a>';
					echo '</div>';
				echo '</li>';
				$j=$j+1;					
			 endwhile; 
		echo '</ul>';		
		echo '</div>';
		echo '<div class="cleared">';echo '</div>';
	endif; 
wp_reset_query();
echo '</div>';
}
/*
		display focus_slider 
		2012 07 23 rel 0.1
*/
define("BEG_MAX_LEN_BOX_FOCUS", "290");
function display_focus_slider(){  
echo '<div class="aevo_news_slider2_hp">';
	if (have_posts()) : 
		/* $my_query = new WP_Query('cat=14'); */
		$my_query = new WP_Query( 'category_name=focus' );
		echo '<div id="aevo_news_slider2_scrolling_hp">';
			echo '<ul>';
			$j=0;
			while ($my_query->have_posts() && ($j<3)) : $my_query->the_post(); 
				$post_ide=$my_query->post->ID;
				echo '<li>';
					echo '<div class="aevo_news_slider2_content_hp">';
						echo '<a  href="'.get_permalink( $post_ide ).'">';
							echo '<div class="aevo_news_slider2_content_testo_hp" >';
								echo '<span class="aevo_news_slider2_content_data_hp">';
									the_time('F Y');
									echo '<br/>';
									echo '<span class="aevo_news_slider2_content_title_hp">';
										$title=the_title('','',false);
										echo $title.'<br/>';
										echo '<span class="aevo_news_slider2_content_text_hp">';
											$content_len = BEG_MAX_LEN_BOX_FOCUS-strlen($title);
											$content=myTruncate2(get_the_content(),$content_len);
											echo $content;
											echo '<span class="aevo_news_slider2_content_link_hp">';
												echo '<br/>+more';
											echo '</span>';
										echo '</span>';
									echo '</span>';
								echo '</span>';
							echo '</div>';
						echo '</a>';
					echo '</div>';
				echo '</li>';
				$j=$j+1;					
			 endwhile; 
		echo '</ul>';		
		echo '</div>';
		echo '<div class="cleared">';echo '</div>';
	endif; 
wp_reset_query();
echo '</div>';
}

/*
		display SERVIZI box for HP 
		2013 01 23 rel. 0.3 i post vengono visualizzati secondo l'ordine ascendente del capo peersonalizzato 'posizione'
		2012 10 01 rel. 0.2 modifiche a css + gestione hp_img
		2012 09 17 rel 0.1 
*/
define("MAX_LEN_BOX_SERVIZI", "130");
function ipc_servizi_hp_box(){  
$template_diretory = get_bloginfo('template_directory');
echo '<div id="ipc_servizi_page">';
	echo '<div id="ipc_servizi_header">';
		echo '<div id="ipc_servizi_title_page">';
			echo 'I NOSTRI SERVIZI';
		echo '</div>';	
		echo '<div id="buttons1">';
			echo '<a id="servizi_freccia_sx" class="prev" href="#"></a>';
			echo '<a id="servizi_freccia_dx" class="next active" href="#"></a>';
			echo '<br class="clear"/>';
		echo '</div>';
	echo '</div>';
	if (have_posts()) : 
		$my_query = new WP_Query( array ( 'category_name' => 'servizi', 'posts_per_page' => -1,'orderby'=> 'meta_value','meta_key' => 'posizione','order'=>'asc' ) );;
		echo '<div id="ipc_servizi_scrolling_page">';
			echo '<ul>'; 
				while ($my_query->have_posts()) : $my_query->the_post();
					$post_ide=$my_query->post->ID;
					echo '<li>'; 
						echo '<div class="ipc_servizi_content_page">';
							echo '<div class="ipc_servizi_content_page_hp_img" style="background-image:url('.get_post_meta($post_ide,"hp_img", $single=true).');"></div>';
							echo '<div class="ipc_servizi_content_page_title">';
								echo '<a  href="'.get_permalink().'">'; 
									$title=the_title('','',false);
								echo $title.'</a>';
							echo '</div>';
							echo '<div class="ipc_servizi_content_page_text">';
									$content=myTruncate2(get_the_content(),MAX_LEN_BOX_SERVIZI);
									echo '<a href="'.get_permalink().'">'; 
										echo $content.'<br/>';
									echo '</a>';	
							echo '</div>';
						echo '</div>';
						echo '<div class="servizi_pulsante_continua">';	
							echo '<a href="'.get_permalink($page_id). '">';
								echo '<img alt="" src="'.get_bloginfo("template_directory").'/images/pulsante_continua.png"/> '; 
							echo '</a>';
						echo '</div>';	
					echo '</li>';
				endwhile;
			echo '</ul>';
		echo '</div>';
		echo '<div class="cleared">';echo '</div>';
	endif;
echo '</div>';
wp_reset_query();
}

/*
		display BANNER box for HP 
		2012 09 18 rel 0.1 
*/
define("MAX_LEN_BOX_BANNER", "70");
function ipc_banner_hp_box(){  
	echo '<div class="ipc_banner_hp">';
		$my_query = new WP_Query( 'name=ipc_banner_hp' );
			if ( $my_query->have_posts()) {
					$my_query->the_post();
					echo '<div class="ipc_banner_content_page">'; 
							echo '<a style="color: #666666" href="'.get_permalink().'">'; 
								$content_len = MAX_LEN_BOX_BANNER;
								$content=myTruncate2(get_the_content(),$content_len);
								/*echo $content;*/
							echo '</a>';
					echo '</div>';
					echo '<div class="banner_pulsante_continua">';	
							echo '<a href="'.get_permalink(). '">';
								echo '<img alt="" src="'.get_bloginfo("template_directory").'/images/pulsante_continua_blu.png"/> '; 
							echo '</a>';
					echo '</div>';	
				} else {
						echo "banner hp non definito !!";
					}
				wp_reset_query();
	echo '</div>';
}	
/*
		display BANNER box for all pages 
		2012 09 25 rel 0.1 
*/
function ipc_box_dx_banner(){  
	echo '<div class="ipc_box_dx_banner">';
		$my_query = new WP_Query( 'name=ipc_banner_hp' );
			if ( $my_query->have_posts()) {
					$my_query->the_post();
					echo '<div class="ipc_banner_content_page">';
							echo '<a style="color: #666666" href="'.get_permalink().'">'; 
								$content_len = MAX_LEN_BOX_BANNER;
								$content=myTruncate2(get_the_content(),$content_len);
								/*echo $content;*/
							echo '</a>';
					echo '</div>';
					echo '<div class="banner_pulsante_continua">';	
							echo '<a href="'.get_permalink(). '">';
								echo '<img alt="" src="'.get_bloginfo("template_directory").'/images/pulsante_continua_blu.png"/> '; 
							echo '</a>';
					echo '</div>';	
				} else {
						echo "banner hp non definito !!";
					}
				wp_reset_query();
	echo '</div>';
}	
/*
		display SERVIZI box for all pages 
		2012 09 25 rel 0.1 
		2013 01 23 rel 0.2 punta all'articolo 'cosa-facciamo' e visualizza excerpt
*/
function ipc_box_dx_servizi(){  
	echo '<div class="ipc_box_dx_servizi">';
		$my_query = new WP_Query( 'name=cosa-facciamo' );
			if ( $my_query->have_posts()) {
					$my_query->the_post();
					echo '<div id="ipc_box_dx_servizi_content">';
						echo '<div id ="ipc_box_dx_servizi_content_title">';
							echo '<a  href="'.get_permalink().'">';
								echo the_title('','',false);
							echo '</a>';
						echo '</div>';
						echo '<div id="ipc_box_dx_servizi_content_page">';
							the_excerpt();
						echo '</div>';
						echo '<div id="ipc_box_dx_servizi_pulsante_continua">';	
							echo '<a href="'.get_permalink(). '">';
								echo '<img alt="" src="'.get_bloginfo("template_directory").'/images/pulsante_continua.png"/> '; 
							echo '</a>';
						echo '</div>';
					echo '</div>';
				} else {
						echo "ipc_box_dx_servizi non definito !!";
					}
				wp_reset_query();
	echo '</div>';
}	

/*
		display news & link box for news & link page
		2011 05 20 rel 0.1 -> display news of a specific category
*/
define("BEG_MAX_LEN_BOX_NEWS", "140");
function display_news_link_page_2($category){  
$template_diretory = get_bloginfo('template_directory');
$page_id_news = 91;
echo '<div id="box_news_page">';
	echo '<div id="box_news_header">';
		echo '<div id="box_news_title_page">';
			echo get_the_title(91);
		echo '</div>';	
		echo '<div id="buttons1">';
			echo '<a class="prev" href="#"><img alt="" src="'.$template_diretory.'/images/beg/frecce sx.png"/></a>';
			echo '<a class="next" href="#"><img alt="" src="'.$template_diretory.'/images/beg/frecce dx.png"/></a>';
			echo '<br class="clear"/>';
		echo '</div>';
	echo '</div>';
	$aaa = 'cat='.$category.'&posts_per_page=-1';
	if (have_posts()) : 
		$my_query = new WP_Query($aaa);
		$tot_post=$my_query->post_count;;
		echo '<div id="box_news_scrolling_page">';
			echo '<ul>';
				$i=0;
				$n=$tot_post+1;
				while ($my_query->have_posts()) : $my_query->the_post();
					if ($i==0) {
						echo '<li>';
					}
					$n--;
					echo '<div class="box_news_content_page">';
					echo $n.'/'.$tot_post.' ';
						echo '<a style="color: #2F2603" href="'.site_url().'/?page_id='.$page_id_news.'&amp;begid='.get_the_ID().'">'; 
							echo '<span class="box_news_content_page_title">';
								the_time(get_option('date_format'));
								echo '<br/>';
								$title=the_title('','',false);
								echo $title.'<br/>';
							echo '</span>';
							echo '<span class="box_news_content_page_text">';
								$content_len = BEG_MAX_LEN_BOX_NEWS-strlen($title);
								$content=myTruncate2(get_the_content(),$content_len);
								echo $content.'<br/>';
							echo '</span>';	
							echo '<span class="box_news_content_page_link">';
								echo '+more';
							echo '</span>';
						echo '</a>';
					echo '</div>';
					$i=$i+1;
					if ($i==1){
						echo '<div class="box_news_content_page_div"> </div>';
					}	
					if ($i==2){
						echo '</li>';
						$i=0;
					}
				endwhile;
				if ($i!=0){
					echo '</li>'; 
				}
				echo '<li>'.'</li>'; /* padding news !!!*/
			echo '</ul>';
		echo '</div>';
		echo '<div class="cleared">';
		echo '</div>';
	endif;
echo '</div>';
}


/*
		display header
		2011 04 27 rel 0.3 image location is from page_image (custom field)
		2011 04 15 rel 0.2
*/

function display_header($page_id,$page_name){
$template_diretory = get_bloginfo('template_directory');
/*
		display header images
*/
echo '<div class="art-Sheet">';		
		echo '<div class="art-Header-jpeg">'; 
			echo '<img alt="" src="'.home_url().'/wp-content/files/';
			echo get_post_meta($page_id,'page_image', $single=true);
			echo '" width="1024" height="250" alt="'.$page_name.' page"';
			echo '/>';
		echo '</div>';
		echo '<div class="art-Header">';
			echo '<div class="art-Sheet-tl">';
				echo '<a href="'.home_url().'"> <img src="wp-content/themes/begtheme/images/boysandgirls.png" width="143" height="106" alt="boys and girls" />  </a>';
			echo '</div>';
			echo '<div class="box_title_img">'; 
				echo '<img alt="" src="'.$template_diretory.'/images/beg/box_title_img_410_89.png" width="410" height="89"/>';
			echo '</div>';
			echo '<div class="box_title_text">'.$page_name.'</div>';
		echo '</div>';
echo '</div>';	
/*
		display menu
		
*/
do_action('wp_menubar','main');
/*
		display breadcrumb
*/
echo '<div class="breadcrumb">';
if ( function_exists( 'breadcrumb_trail' ) ) { 
	breadcrumb_trail(array( 'before' => '','show_home' => __('home', 'breadcrumb_trail'),'singular_{$post_type}_taxonomy' => true) ); 
	} 
echo '</div>';

}
/*
		display download box
		2011 05 06 rel 0.2 -> use attachment from library
		2011 04 18 rel 0.1

		handled custom field :
			file_to_attach_name
			file_to_attach_type
			file_to_attach_description
			file_to_attach_location
*/
function display_download_box($post_id){ 
$template_diretory = get_bloginfo('template_directory'); 
$url = site_url();
$gallery_id = 'gallery_id';
$post = get_post($post_id);
echo '<div class="box_dx">';
$args = array( 'post_type' => 'attachment', 'numberposts' => -1, 'post_status' => null, 'post_parent' => $post->ID ); 
$attachments = get_posts($args);
if ($attachments) {
		echo '<div class="box_download">';
			echo '<div class="box_download_title">'; 
				echo 'download';
		echo '</div>';	
	foreach ( $attachments as $attachment ) {
	
		echo '<div class="box_download_content" >';
			echo apply_filters( 'the_title' , $attachment->post_title );
			echo apply_filters ('the_content',$attachment->post_content);
		echo '</div>';
		echo '<div class="box_download_link_to_post">';
			echo '<a href="'.wp_get_attachment_url( $attachment->ID).'" style="color: #000000" target="_blank">';
			echo basename(get_post_meta( $attachment->ID,'_wp_attached_file', true));
			echo '<br/>';	
			echo ' ['.getSize(get_attached_file( $attachment->ID )).']';
			echo '</a>';
		echo '</div>';
	}	
	echo '</div>';
}
echo '<div class="cleared"></div>';		



if(get_post_meta($post_id,'gallery_id', TRUE)!='') {  
		echo '<div class="gallery_page">';
			echo '<div class="box_download_title">'; 
				echo 'photogallery';
			echo '</div>';	
			echo '<div class="gallery_page_fix">';
				echo '<div id="gallery_scrolling_page">';
					$gallery_2 = get_post_meta($post_id,'gallery_id', TRUE);
					$shortcode= '[nggallery id='.$gallery_2.']';
					echo do_shortcode($shortcode);
				echo '</div>';
			echo '</div>';	
			echo '<div id=buttons>';
				echo '<a class="prev2" href="#"><img alt="" src="'.$template_diretory.'/images/beg/frecce sx.png"/></a>';
				echo '<a class="next2" href="#"><img alt="" src="'.$template_diretory.'/images/beg/frecce dx.png"/></a>';
				echo '<br class="clear"/>';
			echo '</div>';
		echo '</div>'; 
		}

echo '</div>';	
}
/*
		display post for all pages
		2011 05 07 rel 0.4 -> display only page content and its download (defined as attachments) or gallery if any
		2011 04 27 rel 0.3 -> display page content instead category description, add $page_id parameter
		2011 04 25 rel 0.2 -> bug fix, title not formated 
		2011 04 20 rel 0.1

*/

function display_post($page_id){ 
/*
		fetch post id		
*/	
$post = get_post($page_id);
/*
		check if any download or gallery		
*/	
$args = array( 'post_type' => 'attachment', 'numberposts' => -1, 'post_status' => null, 'post_parent' => $post->ID ); 
$attachments = get_posts($args);
if (($attachments) || (get_post_meta($post->ID,'gallery_id', TRUE)!='')) { 
	echo '<div class="box_text_min">';
	}else{ 
	echo '<div class="box_text_max">';
	}

/*
		display page content		
*/

		echo '<div class="box_text_content">'; 
			echo '<div class="box_text_title">';
				echo get_post_meta($post->ID,'page_description', TRUE);
			echo '</div>';
			$aaa=$post->post_content;
			echo apply_filters('the_content',$aaa);  
		echo '</div>';
		echo '<div class="cleared"></div>';
	echo '</div>'; /* end box_text_min/max*/
/*
	display box download / gallery if any
*/
if (($attachments) || (get_post_meta($post->ID,'gallery_id', TRUE)!='')) { 
		display_download_box($post->ID);
	} 

}
/*
		display post for news & link page
		2011 04 25 rel 0.1 -> title is displayed 

*/

function display_post_2($category){
/*
		check if any post (posts from child category, if any, are skipped	
*/	
$pp='cat='.$category;
$my_query = new WP_Query($pp); 
$a=true;
while ($my_query->have_posts() && $a) {
	$my_query->the_post();
	$post_id = get_the_ID();
	if (in_category( $category, $post_id )){
	$a=false;
	}
}
if ($a){
	return;
}
/*
		fetch post id		
*/	
$post_id = get_the_ID();
/*
		check if any downloaad or gallery		
*/	
$args = array( 'post_type' => 'attachment', 'numberposts' => -1, 'post_status' => null, 'post_parent' => $post->ID ); 
$attachments = get_posts($args);
if (($attachments) || (get_post_meta($post_id,'gallery_id', TRUE)!='')) { 
	echo '<div class="box_text_min">';
	}else{ 
	echo '<div class="box_text_max">';
	}
/*
		display category description
		
*/
		echo '<div class="box_text_title">'; 
			echo  category_description( $category); 
		echo '</div>';	
/*
		display post
		
*/
		echo '<div class="box_text_content" >';
			echo '<div class="box_text_content_title">';
				echo the_time(get_option('date_format'));
				echo '<br/>';
				the_title();
			echo '</div>';
			the_content(); 
		echo '</div>';
		echo '<div class="cleared"></div>';
	echo '</div>'; /* end box_text_min/max*/
/*
	display box download / gallery if any
*/
if (($attachments) || (get_post_meta($post_id,'gallery_id', TRUE)!='')) {  
		display_download_box($post_id);
	} 

}
/*
	display focus box in hp
	2012 10 10 rel 0.1
*/
function box_manager ($page_id){
define('MAX_LEN_BOX_MANAGER', '48.0');
$post = get_post($page_id);
	echo '<div class="focus_data">';
		the_time('d.m.Y');
	echo '</div>';
	echo '<div class="Titolobig">';
		echo '<a style="color: #666666" href="'.get_permalink($page_id).'">'.get_the_title($page_id).'</a>';
	echo '</div>';
	echo '<div class="corpo2" >';
		echo '<a style="color: #666666" href="';echo get_permalink($page_id);echo '">';
				$content_len = MAX_LEN_BOX_MANAGER-strlen($title);
				$content=myTruncate2($post->post_content,$content_len,$break=" ", $pad="...");
				echo $content;
		echo '</a>'; 
	echo '</div>';
	echo '<div class="pulsante_continua">';	
		echo '<a href="'.get_permalink($page_id). '">';
				echo '<img alt="" src="'.get_bloginfo("template_directory").'/images/pulsante_continua.png"/> '; 
		echo '</a>';
	echo '</div>';		
}
/*
	display Contact_box in all pages
	2012 06 22 rel 0.2
	2012 06 06 rel 0.1
*/
function box_contatti ($page_id_banda_sx,$page_id_contatti){
define("BEG_MAX_LEN_BOX", "120");
$post = get_post($page_id_banda_sx);
	echo '<div id="aevo_contatti_titolo">';
		echo '<a style="color: #1e1e1e" href="';
		echo get_permalink($page_id_contatti);
		echo '">';
		echo 'CONTATTI';
		echo '</a>';
	echo '</div>';
	echo '<div class="content_link" >';
		/* echo '<a href="';echo get_permalink($page_id);echo '">'; */
	
			echo '<div id="aevo_contatti_corpo" >'; 
				echo $post->post_content;
			echo '</div>';
		/* echo '</a>' */; 	
	echo '</div>';		
}
/*
	display Newsletter_box in hp
	2012 05 22 rel 0.1
*/
function box_newsletter ($page_id){
define("BEG_MAX_LEN_BOX", "120");
$post = get_post($page_id);
	echo '<div id="aevo_newsletter_titolo_hp">';
	echo get_the_title($page_id);
	echo '</div>';
		echo '<div id="aevo_newsletter_corpo_hp">'; 
			echo $post->post_content;
			$shortcode= '[contact-form-7 id="93" title="Modulo di contatto 1"]';
			echo do_shortcode($shortcode); 
		echo '</div>';			
}
/*
	get file size
*/
function getSize($file){
$bytes = filesize($file);
$s = array('b', 'Kb', 'Mb', 'Gb');
$e = floor(log($bytes)/log(1024));
return sprintf('%.2f '.$s[$e], ($bytes/pow(1024, floor($e))));
}
/*
	get category post count
*/
function wt_get_category_count($input = '') {
global $wpdb;
if($input == '')
{
$category = get_the_category();
return $category[0]->category_count;
}
elseif(is_numeric($input))
{
$SQL = "SELECT $wpdb->term_taxonomy.count FROM $wpdb->terms, $wpdb->term_taxonomy WHERE $wpdb->terms.term_id=$wpdb->term_taxonomy.term_id AND $wpdb->term_taxonomy.term_id=$input";
return $wpdb->get_var($SQL);
}
else
{
$SQL = "SELECT $wpdb->term_taxonomy.count FROM $wpdb->terms, $wpdb->term_taxonomy WHERE $wpdb->terms.term_id=$wpdb->term_taxonomy.term_id AND $wpdb->terms.slug='$input'";
return $wpdb->get_var($SQL);
}
}
/*
	breadcrumb
	2012 09 24 rel 0.1
*/
function the_breadcrumb() {
	echo '<div id="crumbs">';
		echo '<ul>';
		if (!is_home()) {
			echo '<li style="font-weight: bold">';
					echo 'sei qui: ';
			echo "</li>";
			if (is_single()) {
				echo '<li>';
				$sub_menu = get_post_meta(get_the_ID(),'sub_menu', TRUE);
				if ($sub_menu!=''){
					echo $sub_menu.' </li><li> / ';
				}
				echo '<a style="font-weight: bold;color: #6c8498" href="';echo get_permalink(get_the_ID()).'">';
				the_title();
				echo '</a></li>'; 
				}
			}	
		echo '</ul>';
	echo '</div>';	
}	
?>