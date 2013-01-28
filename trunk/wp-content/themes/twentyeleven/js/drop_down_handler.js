		$(function() {
		
			$("#topics").change(function() {
				var $dropdown = $(this);
				var key = $dropdown.val();
				var vals = [];
				
				switch(key) {
						case 'generic':
							vals = ['select language','Danish','Dutch','English','French','German','Italian','Polish','Spanish'];
							break;
						case 'media inquires':
							vals = ['select language','English'];
							break;
					}
					var $texttwo = $("#languages");
					$texttwo.empty();
					$.each(vals, function(index, value) {
						$texttwo.append("<option value='"+value+"'>" + value + "</option>");
					});
			});
			
			$("#languages").change(function() {
				var $dropdown = $(this);
				var key2 = $dropdown.val();
				document.getElementById("lang").value = key2;
				switch(document.getElementById("topics").value) {
						case 'generic':
							switch(key2) {
								case 'Danish':
									document.getElementById("receipt").value  = 'nc@sexogsundhed.dk,tc@sexogsundhed.dk';
									break;
								case 'Dutch':
									document.getElementById("receipt").value = 'sal.mattera@gmail.com';
									break;	
								case 'English':
									document.getElementById("receipt").value = 'giuseppe@bs-europa.eu,raffaella@bs-europa.eu,sbon@nigz.nl';
									break;
								case 'French':
									document.getElementById("receipt").value = 'raffaella@bs-europa.eu';
									break;	
								case 'German':
									document.getElementById("receipt").value = 'w.farke@katho-nrw.de,schmied@euro.centre.org';
									break;
								case 'Italian':
									document.getElementById("receipt").value = 'giuseppe@bs-europa.eu,raffaella@bs-europa.eu';
									break;	
								case 'Polish':
									document.getElementById("receipt").value = 'azachurzok@sum.edu.pl,boysandgirls@sum.edu.pl,eflorek@ump.edu.pl,msenczuk@ump.edu.pl';
									break;
								case 'Spanish':
									document.getElementById("receipt").value = 'osasunkume@edex.es';
									break;		
								}
							break;	
						case 'media inquires':	
							switch(key2) {
								case 'English':
									document.getElementById("receipt").value = 'luigi@bs-europa.eu';
									break;
								}	
							break;	
			}

		});
		
});