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
		<div style="margin-top: 90px;margin-bottom: 30px;">
			<img src="<?php bloginfo('template_url');?>/images/img_palazzo_ipc.png" style="width:255px;height: 320px;">
		</div>
		<h1 class="entry-title">Form Contatti</h1>
		<?php echo do_shortcode( '[contact-form-7 id="102" title="Form_Contatti"]'); ?>
	</div>	
</div>  <!--- close ipc_centro -->
<!--	Footer      -->		
		<?php get_footer(); ?>
</body>
</html>