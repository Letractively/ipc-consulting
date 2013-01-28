<?php 
	get_header(); 
	
?>
<div class="ipc_centro" style=" min-height: 390px; "> 
<?php
/*
		display breadcrumb
*/
?>
	<div class="breadcrumbs">
		<?php 
			the_breadcrumb();
		?>
	</div>
	<div id="aevo_contenuti">
		<?php the_post();
			get_template_part( 'content', 'single' );	
		?>					
	</div>							
	<!--	Banner-->			
	<div id="ipx_box_dx">
		<div id="aevo_download_vedianche">
			<?php $categoria=get_post_meta($post->ID,"download", TRUE);	
			$download=0;
			$links=0;
			if ( $categoria != '') {
				echo '<div id="ipc_box_dx_testata"> </div>';
				echo '<div id="ipc_download_titolo"> </div>';
				echo '<div id="ipc_box_dx_download_content">';
					echo '<div id="ipc_box_dx_download_formato">';
						$shortcode= '[downloads query="category='.$categoria.'" format="3"]';
						echo do_shortcode($shortcode);
					echo '</div>';
				echo '</div>';
				$download=1;
			}
			$categoria=get_post_meta($post->ID,"links", TRUE); 
			if ($categoria != '') {
				$links = 1;
				if (!$download) {
					echo '<div id="ipc_box_dx_testata"> </div>';
				} else {
					echo '<div id="ipc_box_dx_separatore"> </div>';
				}	
				echo '<div id="ipc_box_dx_vedi_anche_titolo"> </div>';
				echo '<div id="ipc_box_dx_vedi_anche_content">';
					echo '<div id="ipc_box_dx_vedi_anche_formato">';
						wp_list_bookmarks('categorize=1&category='.$categoria.'');
					echo '</div>';
				echo '</div>';
			} 
			if ($download || $links ) {
				echo '<div id="ipc_box_dx_fondo"> </div>';
			}
			?>
		</div>								
		<?php $gallery=get_post_meta($post->ID,"gallery", TRUE);
			if ($gallery != '') {
				echo '<div id="ipc_box_dx_photogallery">';
					echo '<div class="gallery_page">';
						echo '<div class="gallery_title"> </div>';
						echo '<div class="gallery_page_fix">';
							echo '<div id="gallery_scrolling_page">';
								$shortcode= '[nggallery id='.$gallery.']';
								echo do_shortcode($shortcode);
							echo '</div>';
						echo '</div>';		
						echo '<div id=buttons>';
							echo '<a class="prev2" href="#"><img src="'.get_bloginfo('template_directory').'/images/frecce sx.png"/></a>';
							echo '<a class="next2" href="#"><img src="'.get_bloginfo('template_directory').'/images/frecce dx.png"/></a>';
							echo '<br class="clear"/>';
						echo '</div>';	
					echo '</div> ';							
				echo '</div>';
					}
		?>
		<!-- img cosa facciamo  -->
		<div style="margin-bottom: 30px;">
			<img src="<?php bloginfo('template_url');?>/images/cosa_facciamo_ipc.jpg" style="width:255px;height: 320px;">
		</div>
		<!-- banner  -->
		<?php ipc_box_dx_banner() ?>					

	</div>	
</div>  <!--- close ipc_centro -->
<!--	Footer      -->		
		<?php get_footer(); ?>
</body>
</html>