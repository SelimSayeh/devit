alert("khalil");
function verif()
{
	nom=document.getElementById('name').value;
	email=document.getElementById('email').value;
	tel=document.getElementById('subject').value;
	people=document.getElementById('peoplenumber');
	date=document.getElementById('datepicker').value;
	event=document.getElementById('selectevent');
	if(nom.length=="")
	{
		alert("Nom doit être non vide")
	}

	if (email.indexOf("@")==-1) 
	{
		alert("Veuillez inclure @ dans l'adresse e-mail");
	}
	if( (isNaN(tel) || (tel.length)!=8 ) )
	{
		alert("Numero telephone incorrect");
	}

	if(people.options.selectedIndex<=0)
	{
		alert("Nombre Personne Incorrect")
	}
	if (date.length=="")
	{
		alert("Date incorrect")
	}
	if(event.options.selectedIndex<=0)
	{
		alert("Vous devez sélectionner un événement")
	}
}