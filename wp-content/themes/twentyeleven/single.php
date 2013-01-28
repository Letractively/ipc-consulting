<?php
if(in_category('contatti')){include('single-contatti.php');}
	elseif (in_category('download')){include('single-download.php');}
		elseif (in_category('gestione-crediti-p-a')){include('single-gestione-crediti-p-a.php');}
			elseif (in_category('piattaforme')){include('single-piattaforme.php');}
				elseif (in_category('cosa-facciamo')){include('single-cosa-facciamo.php');}
				else {include('single-default.php');}
