<?php 
get_header(); 
?> 
<?php
//include_once 'aevo_library.php';
?>
	<!-- slider hp -->
		<div class="aevo_slider_hp">						
			<div id="navi">
				<ul>
					<li> <a id="aevo_slider_hp_button1" class="active" href="#" ></a> </li>
					<li> <a id="aevo_slider_hp_button2" href="#" ></a> </li>
					<li> <a id="aevo_slider_hp_button3" href="#" ></a> </li>
					<li> <a id="aevo_slider_hp_button4" href="#" ></a> </li>
				</ul>	
			</div>	
				<?php display_slider_link_hp(); ?>
			<div class="cleared"></div>
		</div>
	<!-- news hp -->	
		<div class="ipc_news_hp">
			<div class="ipc_news_hp_title">
				NEWS: 
			</div>
			<div class="ipc_news_hp_rss">
				<?php if(function_exists('RssNewsDisplay')) : RssNewsDisplay(1); endif; ?>
			</div>
		</div>	
		<div class="ipc_hp_centro">
	<!-- descrizione IPC hp -->	
			<div class="ipc_desc_hp">
				<?php 
					$my_query = new WP_Query( 'name=chi-siamo' );
						if ( $my_query->have_posts()) {
							$my_query->the_post();
							$post_ide=$my_query->post->ID;
							//echo '<a href="'.get_permalink($post_ide).'">';
							//	echo '<span class="ipc_desc_hp_link">';
									echo $post->post_content;
							//	echo '</span>';	
							//echo '</a>';	
						} else {
							echo "ipc descrizione hp non definito !!";
						}
				wp_reset_query();
				?>
				<div id="ipc_desc_hp_img" style="display:none"> </div>
			</div>
	<!-- servizi hp -->	
			<?php ipc_servizi_hp_box() ?>
	<!-- banner hp -->
			<?php ipc_banner_hp_box() ?>
	<!-- focus IPC hp -->	
			<div class="ipc_focus_hp">
				<?php 
					query_posts( array ( 'name' => 'ipc_focus_hp_sx'));
					echo '<div id="ipc_focus_hp_sx">';
						if ( have_posts()) {
							the_post();
							box_manager($post->ID);
							} else {
								echo "ipc_focus_hp_sx non definito !!";
							}
					echo '</div>';	
					wp_reset_query();
				?>
				<?php 
					query_posts( array ( 'name' => 'ipc_focus_hp_centro'));
					echo '<div id="ipc_focus_hp_centro">';
						if ( have_posts()) {
							the_post();
							box_manager($post->ID);
							} else {
								echo "ipc_focus_hp_centro non definito !!";
							}
					echo '</div>';	
					wp_reset_query();
				?>
				<?php 
					query_posts( array ( 'name' => 'ipc_focus_hp_dx'));
					echo '<div id="ipc_focus_hp_dx">';
						if ( have_posts()) {
							the_post();
							box_manager($post->ID);
							} else {
								echo "ipc_focus_hp_dx non definito !!";
							}
					echo '</div>';
					wp_reset_query();
				?>
			</div>
		

		</div>  <!--- close ipc_hp_centro -->
<!--	Footer      -->		
		<?php get_footer(); ?>
</body>
</html>