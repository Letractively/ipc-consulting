	<?php
	echo '	
		<style type="text/css">
	div#det_sheet{
		float: left;
		/*border: 1px solid #f00; 
		margin: 0.5em 1em 1em 1em;*/
		padding: 1em;
		text-align: left;
		width:95%;
		font-family: Verdana, sans-serif;
		}
	div#det_sheet_name{
		font-size: large;
		text-align: center;
		font-style: italic;
		color: #b3220f;
		}
	</style>
	
	<body bgcolor="#FFFFFF">
		';
		echo'
			<div id="det_sheet"  style="margin-top:10px" >
			<div>
				La procedura di "recupera dati" è attiva solo per le piattaforme banche / sanità / leasing .
				<br/>
				Per recuperare i dati di accesso alla piattaforma "imprese costruzione" invia una mail a : <a href="mailto:staff@ipcconsulting.it"> staff@ipcconsulting.it </a>
			</div>	
			<form name="myform" action ="https://raccoltadati.ipcconsulting.it/index.php" method="POST">
				<fieldset>
					<input id="recovery_req" name="recovery_req" type="hidden" value="yes" /> 
					<input id="login_userid" name="login_userid" type="hidden" value="" /> 
					<input id="login_password" name="login_password" type="hidden" value="" /> 
					<label class="invio">
						<input name="Invia" type="submit" value="continua" class="recupera"  />
					</label>
				</fieldset>
			</form>
		</div>'
?>       


	</body>

</html>