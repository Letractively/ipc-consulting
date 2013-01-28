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
		<div id="contenutocertificazione">
			<div id="centerform">
				<h2>Se ti interessa questa opportunità, contattaci e ti daremo tutte le informazioni necessarie</h2>
			</div>
			<div id="contentform"><form id="form_cert" method="POST"><input type="hidden" name="sended" value="sended" />
				<div id="colsx">
					<fieldset><label for="rag_soc">RAGIONE SOCIALE AZIENDA</label> <input id="rag_soc" type="text" name="ragione_soc" value="" /></fieldset>
					<fieldset><label for="cf">CODICE FISCALE</label> <input id="cf" type="text" name="cf" value="" /></fieldset>
					<fieldset><label for="nome_cognome">NOME E COGNOME CONTATTO</label> <input id="nome_cognome" type="text" name="nome_cognome" value="" /></fieldset>
					<fieldset><label for="tel">TELEFONO</label> <input id="tel" type="text" name="telefono" value="" /></fieldset>
					<fieldset><label for="email">EMAIL</label> <input id="email" type="text" name="email" value="" /></fieldset>
				</div>
				<div id="coldx">
					<fieldset><label for="richiesta">OGGETTO DELLA RICHIESTA</label><textarea id="richiesta" name="richiesta" rows="2" style="width: 250px; height: 50px;resize: none;" ></textarea></fieldset>
					<fieldset id="areafildset"><label id="labelarea" for="richiesta">AREA DI INTERESSE</label>
						<table id="areatable">
							<tbody>
								<tr>
									<td><input class="checkbox" type="checkbox" name="areainteresse[]" value="Certificazione crediti P.A." /></td>
									<td><span>Certificazione crediti P.A.</span></td>
								</tr>
								<tr>
									<td><input class="checkbox" type="checkbox" name="areainteresse[]" value="Cessioni crediti P.A." /></td>
									<td><span>Cessioni crediti P.A.</span></td>
								</tr>
								<tr>
									<td><input class="checkbox" type="checkbox" name="areainteresse[]" value="Gestione e recupero crediti P.A. e privati" /></td>
									<td><span>Gestione e recupero crediti P.A. e privati</span></td>
								</tr>
							</tbody>
						</table>
					</fieldset>
					<fieldset><input class="buttoncontattaci" type="submit" name="submit" value="" /></fieldset>
					<fieldset><input class="checkbox" type="checkbox" name="privacy" /><span>Ho preso visione dell'informativa sulla privacy ed acconsento al trattamento dei dati personali</span></fieldset>
				</div>
			</form>
			</div>
		</div>	
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
		<!-- banner  -->
		<?php ipc_box_dx_banner() ?>
		<!-- servizi  -->
		<?php ipc_box_dx_servizi() ?>						
	</div>	
</div>  <!--- close ipc_centro -->
<!--	Footer      -->		
		<?php get_footer(); ?>
 <script type="text/javascript">
jQuery('#form_cert').validate({
	rules:
        {
            ragione_soc: "required",
            cf: "required",
            nome_cognome: "required",
            richiesta : "required",
            telefono:
            {
                required: true,
                digits: true
            },
           	"areainteresse[]": "required",
            email:
            {
                required: true,
                email: true
            },
            privacy: "required"
        },
        messages:
        {
            ragione_soc: "Campo richiesto",
            cf: "Campo richiesto",
            "areainteresse[]": "Scegli almeno un'opzione",
            nome_cognome: "Campo richiesto",
            richiesta : "Campo richiesto",
            telefono: "Inserire un numero di telefono valido",
            conferma: " La conferma non corrisponde alla scelta della password!",
            email: "Inserisci un indirizzo email valido",
            privacy: "Non hai accettato i termini del servizio!"
        }
});
</script>
		
</body>
</html>