
function verifR()
{
	var nom=document.forms["myForm"]["nom"].value;
	var email=document.forms["myForm"]["email"].value;
	var tel=document.forms["myForm"]["tel"].value;
	var nbPeople=document.forms["myForm"]["nbPeople"];
	var date=document.forms["myForm"]["date"].value;
	var sexe=document.forms["myForm"]["event"];

	if(nom.length==0)
	{
		alert("Nom doit être non vide");
		return false;
	}

	if (email.indexOf("@")==-1) 
	{
		alert("Veuillez inclure @ dans l'adresse e-mail");
		return false;
	}

	if( (isNaN(tel) || (tel.length)!=8 ) )
	{
		alert("Numero telephone incorrect");
		return false;
	}

	if(nbPeople.options.selectedIndex<=0)
	{
		alert("Veuillez choisir le nombre de personne");
		return false;
	}

	if(date.length==0)
	{
		alert("Veuillez choisir une date");
		return false;
	}

	if(event.options.selectedIndex<=0)
	{
		alert("Veuillez choisir un évenement");
		return false;
	}

	}

	function verifT()
{
	var cin=document.forms["myForm"]["cin"].value;
	var nom=document.forms["myForm"]["nom"].value;
	var email=document.forms["myForm"]["email"].value;
	var tel=document.forms["myForm"]["tel"].value;
	var nbPeople=document.forms["myForm"]["nbPeople"];
	var date=document.forms["myForm"]["date"].value;
	var sexe=document.forms["myForm"]["event"];

	if( (isNaN(cin) || (cin.length)!=8 ) )
	{
		alert("Cin incorrect");
		return false;
	}

	if(nom.length==0)
	{
		alert("Nom doit être non vide");
		return false;
	}

	if (email.indexOf("@")==-1) 
	{
		alert("Veuillez inclure @ dans l'adresse e-mail");
		return false;
	}

	if( (isNaN(tel) || (tel.length)!=8 ) )
	{
		alert("Numero telephone incorrect");
		return false;
	}

	if(nbPeople.options.selectedIndex<=0)
	{
		alert("Veuillez choisir le nombre de personne");
		return false;
	}

	if(date.length==0)
	{
		alert("Veuillez choisir une date");
		return false;
	}

	if(event.options.selectedIndex<=0)
	{
		alert("Veuillez choisir un évenement");
		return false;
	}

	}
