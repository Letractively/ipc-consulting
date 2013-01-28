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
	<div id="ipx_box_dx" style="margin-top:0">
		<h1 class="entry-title">Form Contatti</h1>
		<?php echo do_shortcode( '[contact-form-7 id="969" title="form_piattaforme"]'); ?>
	</div>	
</div>  <!--- close ipc_centro -->
<!--	Footer      -->		
		<?php get_footer(); ?>
</body>
</html>