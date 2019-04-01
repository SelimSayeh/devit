function verifa2()
{
	var date=document.forms["myForm"]["date"].value;
	var cause=document.forms["myForm"]["Cause"];
	var commentaire=document.forms["myForm"]["commentaire"].value;
	var ptsF=document.forms["myForm"]["ptsF"].value;

	
if (date.length==0)
	{
		alert("Date incorrect")
	}
if(cause.options.selectedIndex<=0)
	{
		alert("Veuillez choisir une cause d'ajout ")	
	}

	if(commentaire.length==0)
	{
		alert("commentaire doit être non vide")
	}

	if( (isNaN(ptsF) ) || (ptsF.length==0) )  
	{
		alert("points fidélités  invalide")
	}
	

	

	}