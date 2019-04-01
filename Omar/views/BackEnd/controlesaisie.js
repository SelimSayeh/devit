function verifR()
{
	var id_commande=document.forms["myForm"]["id_commande"].value;
	var prix=document.forms["myForm"]["prix"].value;
	var email=document.forms["myForm"]["email"].value;
	var etat_com=document.forms["myForm"]["etat_com"];

	if( isNaN(id_commande) )
	{
		alert("Id commande incorrect");
		return false;
	}

	if( isNaN(prix) )
	{
		alert("prix incorrect");
		return false;
	}

	if (email.indexOf("@")==-1) 
	{
		alert("Veuillez inclure @ dans l'adresse e-mail");
	}

	if(etat_com.options.selectedIndex<=0)
	{
		alert("Veuillez choisir un etat");
		return false;
	}

	}
