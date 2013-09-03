function OnSubmitForm()
{
  if(document.pressed == 'entra')
  {
    switch(document.myform.seleziona.value)
			{
			case '0':
				document.myform.action ="";
				break;
			case '1':
				document.myform.action ="https://raccoltadati.ipcconsulting.it/";
				break;
			case '2':
				document.myform.action ="https://raccoltadati.ipcconsulting.it/";
				break;
			case '3':
				document.myform.action ="https://raccoltadati.ipcconsulting.it/";
				break;
			case '4':
				document.myform.action ="http://www.ipcconsulting.it/piattaforma_crediti/";
				document.myform.username.value = document.myform.login_userid.value;
				document.myform.password.value = document.myform.login_password.value;
				break;
			}
  
   document.myform.id='login';
   document.myform.method='POST';
  }
  else
  if(document.pressed == 'recupera dati')
  {
   document.myform.action ="https://raccoltadati.ipcconsulting.it/index.php";
   document.myform.id="recovery";
   document.myform.method="POST";
   document.getElementById('recovery_req').value = 'yes'
   document.getElementById('login_userid').value = ''
   document.getElementById('login_password').value = ''
   
  }
  return true;
};
$(window).load(function(){
	$("#seleziona").change(function () {
		if($(this).val() == '0') $(this).addClass("empty");
		else $(this).removeClass("empty").children('.placeholder').remove();
	});
	$("#seleziona").change();
});	
$(window).unload(function() {
  $('select option').remove();
});

