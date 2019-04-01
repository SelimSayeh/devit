function verifa()
{
	var nom=document.forms["myForm"]["nom"].value;
	var email=document.forms["myForm"]["email"].value;
	var tel=document.forms["myForm"]["telephone"].value;
	var prenom=document.forms["myForm"]["prenom"];
	var date=document.forms["myForm"]["date"].value;
	var sexe=document.forms["myForm"]["sexe"];
	var rue=document.forms["myForm"]["rue"].value;
	var ville=document.forms["myForm"]["ville"].value;
	var codep=document.forms["myForm"]["codep"].value;
	var password=document.forms["myForm"]["password"].value;

	if(nom.length==0)
	{
		alert("Nom doit être non vide")
	}
	if(prenom.length==0)
	{
		alert("prenom doit être non vide")
	}
	if(ville.length==0)
	{
		alert("ville doit être non vide")
	}
	if(rue.length==0)
	{
		alert("rue doit être non vide")
	}

	if(password.length==0)
	{
		alert("password doit être non vide")
	}




	if (email.indexOf("@")==-1) 
	{
		alert("Veuillez inclure @ dans l'adresse e-mail");
	}
	if( (isNaN(tel) || (tel.length)!=8 ) )
	{
		alert("Numero telephone incorrect");
	}

	if( (isNaN(codep) || (codep.length)!=4 ) )
	{
		alert("code postal  incorrect");
	}

	if(sexe.options.selectedIndex<=0)
	{
		alert("Veuillez choisir un élement")
	}
	if (date.length==0)
	{
		alert("Date incorrect")
	}


	}