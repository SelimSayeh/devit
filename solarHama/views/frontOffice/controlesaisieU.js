
function verifa()
{
	var nom=document.forms["myForm"]["nom"].value;
	var prenom=document.forms["myForm"]["prenom"].value;
	var ville=document.forms["myForm"]["ville"].value;
	var mail=document.forms["myForm"]["mail"].value;
	var tel=document.forms["myForm"]["tel"].value;
	var avis=document.forms["myForm"]["avis"];.value;
	
	if(nom.length=="")
	{
		alert("Nom doit être non vide");
		return false;
	}
	if(prenom.length==0)
	{
		alert("prenom doit être non vide");
		return false;
	}
	if(ville.length==0)
	{
		alert("ville doit être non vide");
		return false;
	}

	if (mail.indexOf("@")==-1) 
	{
		alert("Veuillez inclure @ dans l'adresse e-mail");
		return false;
	}

	if( (isNaN(tel) || (tel.length)!=8 ) )
	{
		alert("Numero telephone incorrect");
		return false;
	}

	if (avis.length==0)
	{
		alert("Date incorrect")
	}


	}