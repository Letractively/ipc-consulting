function OnSubmitForm()
{
  if(document.pressed == 'entra')
  {
   document.myform.action ='https://raccoltadati.ipcconsulting.it/index.php';
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
