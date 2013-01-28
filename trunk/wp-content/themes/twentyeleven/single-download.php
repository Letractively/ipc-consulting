<?php 
	get_header(); 
	
?>
<div class="ipc_centro"> 
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
		<!-- banner  -->
		<?php ipc_box_dx_banner() ?>
		<!-- servizi  -->
		<?php ipc_box_dx_servizi() ?>						
	</div>	
</div>  <!--- close ipc_centro -->
<!--	Footer      -->		
		<?php get_footer(); ?>
</body>
</html>