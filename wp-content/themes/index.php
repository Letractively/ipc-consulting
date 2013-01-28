<?php 
get_header(); 
?> 

		<div id="aevo_center">
		<div id="banda_sx">
<!--
	EVENTI Slider
-->
			<div class="aevo_news_hp">
				<div id="aevo_news_titolo_hp">
				EVENTI
				</div>
				<div id="navi_2">
						<ul>
							<li> <a id="aevo_news_hp_button1" class="active" href="#" ></a> </li>
							<li> <a id="aevo_news_hp_button2" href="#" ></a> </li>
							<li> <a id="aevo_news_hp_button3" href="#" ></a> </li>
						</ul>
				</div>
				<?php display_news_slider_link_hp(); ?>
				<div class="cleared"></div>
			</div>
			<!--
	Newsletter
-->
			<div id="aevo_newsletter_hp">
					<?php $page_id_newsletter = 98; ?>
					<?php box_newsletter($page_id_newsletter); ?>
				<div class="cleared"></div>
			</div>
		</div>
		
			
			
		
			
<!--
	Contenuti
-->
			<div id="aevo_contenuti_hp">
				<div id="aevo_contenuti_titolo_hp">
					<div id="aevo_contenuti_titolo_formato_hp">
					Benvenuti in Accademia!
					</div>
					<div id="aevo_contenuti_titolo_oradata_hp">
						<div id="aevo_contenuti_oradata_formato_hp">
							<?php
							date_default_timezone_set("Europe/Paris");
							?>
						<?php 
						echo date_i18n("d F Y - G:i" ,time()); ?>
						</div>
					</div>
				</div>
				<div id="aevo_hp_evidenza_sx">
					<?php 
						$myposts = get_posts('category='.get_cat_ID( "hp_evidenza_sx" ));
						if ($myposts==NULL) {
							echo 'categoria hp_evidenza_sx vuota !!';
								}else{
							box_manager($myposts[0]->ID);} 
					?>
				</div>	
				<div class="cleared"></div>
				<div id="aevo_hp_evidenza_centro">
					<?php 
						$myposts = get_posts('category='.get_cat_ID( "hp_evidenza_centro" ));
						if ($myposts==NULL) {
							echo 'categoria hp_evidenza_centro vuota !!';
								}else{
							box_manager($myposts[0]->ID);} 
					?>
				</div>	
				<div class="cleared"></div>
				<div id="aevo_hp_evidenza_dx">
					<?php 
						$myposts = get_posts('category='.get_cat_ID( "hp_evidenza_dx" ));
						if ($myposts==NULL) {
							echo 'categoria hp_evidenza_dx vuota !!';
								}else{
							box_manager($myposts[0]->ID);} 
					?>
				</div>	
				<div class="cleared"></div>
			</div>
			
<!--
	Banner
-->
			<div id="aevo_banner_hp">
			</div>
<!--
	Contatti
-->
			<div id="aevo_contatti_hp">
					<?php $page_id_contatti = 63; ?>
					<?php box_contatti_hp($page_id_contatti); ?>
				</div>	
				<div class="cleared"></div>

<!--
	Footer
-->
		<div id="aevo_footer_hp">
			<?php get_footer(); ?>
		</div>
	</div>
</div>
</body>
</html>