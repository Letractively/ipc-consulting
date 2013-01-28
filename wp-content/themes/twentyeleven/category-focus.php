<?php get_header(); ?>
</div> <!-- end aevo_page -->
</div> <!-- end aevo_body -->
<div id="aevo_center_all_bg">
<div id="aevo_center_all">
	<div id="aevo_center_all_page">
	<div id="banda_sx">
		<?php 
			the_post();
			$key = 'sub_menu';
			$sub_menu = get_post_meta($post->ID, $key, TRUE);
			if($sub_menu != '') { 
				echo '<script type="text/javascript">';
				echo '$(".'.$sub_menu.' a").attr("style","color:white; background-repeat: no-repeat; background-image:url(\'wp-content/themes/twentyeleven/images/aevo_sfondo_menu.png\');");';
				echo '</script>';												
				echo '<div id="aevo_menu2_hp">';
					wp_nav_menu('menu='.$sub_menu.'_menu');
				echo '</div>';
				}
			rewind_posts();
		?>
		<!--	News Slider-->			
		<div class="aevo_news_hp" >
			<div id="aevo_news_titolo_hp">				FOCUS				</div>
			<div id="navi_2">
				<ul>
					<li> <a id="aevo_news_hp_button1" class="active" href="#" ></a> </li>
					<li> <a id="aevo_news_hp_button2" href="#" ></a> </li>
					<li> <a id="aevo_news_hp_button3" href="#" ></a> </li>
					</ul>
			</div>				
			<?php display_focus_slider(); ?>
			<div class="cleared"></div>
		</div>
	</div>
	<?php  /* while ( have_posts() ) : the_post(); */?>
	<div id="aevo_contenuti">
		<?php get_template_part( 'content', 'single' ); ?>					
	</div>							
	<?php  /* endwhile; */ // end of the loop. ?>				
	<!--	Banner-->			
	<div id="aevo_banner2_hp">
		<div id="aevo_download_vedianche">
			<?php $categoria=get_post_meta($post->ID,"download", TRUE);		
			$vieni=TRUE;
			if ( $categoria != '') {
				$vieni=FALSE;
				echo '<div id="aevo_download_titolo"> </div>';
				echo '<div id="aevo_download_content">';
					echo '<div id="aevo_download_formato">';
						$shortcode= '[downloads query="category='.$categoria.'"]';
						echo do_shortcode($shortcode);
					echo '</div>';
				echo '</div>';
				echo '<div id="aevo_lineabianca"> </div>';
			}
			$categoria=get_post_meta($post->ID,"links", TRUE);
			if ($categoria != '') {
				$vieni=FALSE;
				echo '<div id="aevo_vedi_anche_titolo"> </div>';
				echo '<div id="aevo_vedi_anche_content">';
					echo '<div id="aevo_vedi_anche_formato">';
						wp_list_bookmarks('categorize=1&category='.$categoria.'');
					echo '</div>';
				echo '</div>';
			}
			?>
		</div>								
		<?php $gallery=get_post_meta($post->ID,"gallery", TRUE);
			if ($gallery != '') {
				$vieni=FALSE;
				echo '<div id="aevo_photogallery">';
					echo '<div class="gallery_page">';
						echo '<div class="gallery_title"> </div>';
						echo '<div class="gallery_page_fix">';
							echo '<div id="gallery_scrolling_page">';
								$shortcode= '[nggallery id='.$gallery.']';
								echo do_shortcode($shortcode);
							echo '</div>';
						echo '</div>';		
						echo '<div id=buttons>';
							echo '<a class="prev2" href="#"><img src="wp-content/themes/twentyeleven/images/frecce sx.png"/></a>';
							echo '<a class="next2" href="#"><img src="wp-content/themes/twentyeleven/images/frecce dx.png"/></a>';
							echo '<br class="clear"/>';
						echo '</div>';	
					echo '</div> ';							
				echo '</div>';
					}
		?>
		<?php
			if ($vieni) { ?>
				<div id="aevo_banner" style="background-image: url(<?php $str=get_post_meta(418,'vieni-a-trovarci', TRUE);   echo bloginfo('url').'/'.substr( $str, strpos( $str, '/wp-content/') );?>)"> </div>
				<?php }   ?>
		<!--	Contatti-->			
		<div id="aevo_contatti">
			<?php 
					$page_id_contatti_banda_sx = 247;  
					$page_id_contatti = 63 ;
					box_contatti($page_id_contatti_banda_sx,$page_id_contatti); 
			?>
		</div>									
	</div>	
</div>
</div>
</div> <!-- end aevo_center_all_bg
<!--	Footer-->		

<div id="aevo_footer_bg">
	
	<div id="aevo_footer_page">
		<div id="aevo_footer"> </div>
		<?php get_footer(); ?>
	</div>
</div>
</body>
</html>