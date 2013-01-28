<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the id=main div and all content after
 *
 * @package WordPress
 * @subpackage Twenty_Eleven
 * @since Twenty Eleven 1.0
 */
?>

	<!-- #main -->

	<footer id="colophon" role="contentinfo">

			<?php
				/* A sidebar in the footer? Yep. You can can customize
				 * your footer with three columns of widgets.
				 */
				if ( ! is_404() )
					get_sidebar( 'footer' );
			?>
			<?php
				wp_reset_query();
			?>
	<div class="ipc_footer">
		<div id="RSS"> </div>
		<div class="footer_separatore"> </div>
		<div id="RSS_text">
			<a style="color: #666666" href=”feeds.feedburner.com” target=”_blank”>iscriviti al servizio RSS feed</a>
		</div>
		<div class="footer_separatore"> </div>	
		<div id="footer_social">
			<?php 
				$wpsr_socialsites_list = array(
					'facebook' => array(
										'titleText' => __('condividi questo articolo con ', 'wpsr') . 'Facebook',
										)
				);
				echo wp_socializer(socialbts, 'type=32px&target=0&services=facebook,googleplus,twitter');
			?>
		</div>
		<div class="footer_separatore"> </div>	
		<div id="codice_etico">
		<?php 
				$my_query = new WP_Query( 'name=codice-etico' );
					if ( $my_query->have_posts()) {
						$my_query->the_post();
						echo '<div class="footer_contatti">';
							echo '<a style="color: #666666" href="'.get_permalink().'">'; 
								echo 'codice etico';
							echo '</a>';
						echo '</div>';
					} else {
						echo "codice etico footer non definito !!";
					}
				wp_reset_query();
			?>
		</div>
		<div class="footer_separatore"> </div>	
		<div id="footer_contatti_credits_privacy">
			<?php 
				$my_query = new WP_Query( 'name=contatti' );
					if ( $my_query->have_posts()) {
						$my_query->the_post();
						echo '<span class="footer_contatti">';
							echo '<a style="color: #666666" href="'.get_permalink().'">'; 
								echo 'contatti /';
							echo '</a>';
						echo '</span>';
					} else {
						echo "contatti footer non definito !!";
					}
				wp_reset_query();
			?>
		
			<?php 
				$my_query = new WP_Query( 'name=footer_credits' );
					if ( $my_query->have_posts()) {
						$my_query->the_post();
						echo '<span class="footer_credits">';
							echo '<a style="color: #666666" href="'.get_permalink().'">'; 
								echo ' credits / ';
							echo '</a>';
						echo '</span>';
					} else {
						echo "credits footer non definito !!";
					}
				wp_reset_query();
			?>
			<?php 
				$my_query = new WP_Query( 'name=footer_privacy' );
					if ( $my_query->have_posts()) {
						$my_query->the_post();
						echo '<span class="footer_privacy">';
							echo '<a style="color: #666666" href="'.get_permalink().'">'; 
								echo ' privacy';
							echo '</a>';
						echo '</span>';
					} else {
						echo "privacy footer non definito !!";
					}
				wp_reset_query(); 
			?>
		</div>
	</div>
	</footer><!-- #colophon -->
	</div> <!--- close ipc_page -->
	<div id="banner_fascia">
		<div id="banner_fascia_link">
			<div id="servizi_footer">
				<?php 
					$my_query = new WP_Query( 'name=servizi_footer' );
						if ( $my_query->have_posts()) {
							$my_query->the_post();
							echo '<div class="banner_fascia_link_titolo">';
								$title=the_title('','',false);
								echo $title;
							echo '</div>';
							echo '<div class="banner_fascia_link_lista">';
								echo get_the_content();
							echo '</div>';
						} else {
							echo "SERVIZI footer non definito !!";
						}
					wp_reset_query();
				?>
			</div>
			<div class="banner_fascia_link_separatore"> </div>
			<div id="applicativi_footer">
			<?php 
					$my_query = new WP_Query( 'name=applicativi_footer' );
						if ( $my_query->have_posts()) {
							$my_query->the_post();
							echo '<div class="banner_fascia_link_titolo">';
								$title=the_title('','',false);
								echo $title;
							echo '</div>';
							echo '<div class="banner_fascia_link_lista">';
								echo get_the_content();
							echo '</div>';
						} else {
							echo "APPLICATIVI footer non definito !!";
						}
					wp_reset_query();
				?>
			</div>
			<div class="banner_fascia_link_separatore"> </div>
			<div id="IPC_indirizzo_footer">
			<?php 
					$my_query = new WP_Query( 'name=indirizzo_footer' );
						if ( $my_query->have_posts()) {
							$my_query->the_post();
							echo '<div class="banner_fascia_link_titolo">';
								$title=the_title('','',false);
								echo $title;
							echo '</div>';
							echo '<div class="banner_fascia_link_indirizzo">';
								echo get_the_content();
							echo '</div>';
						} else {
							echo "INDIRIZZO footer non definito !!";
						}
					wp_reset_query();
				?>
			</div>
		</div>
	</div>	
</div> <!--- close ipc_body -->	
<?php wp_footer(); ?>