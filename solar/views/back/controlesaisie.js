function verif2a()
{
	var date1=document.forms["myF"]["date"].value;
	var cause1=document.forms["myF"]["Cause"];
	var commentaire1=document.forms["myF"]["Commentaire"].value;
	var ptsF1=document.forms["myF"]["ptsF"].value;

	
if (date1.length==0)
	{
		alert("Date incorrect");
		return false;
	}
if(cause1.options.selectedIndex<=0)
	{
		alert("Veuillez choisir une cause d'ajout ")	;
		return false;
	}

	if(commentaire1.length==0)
	{
		alert("commentaire doit être non vide");
		return false;
	}

	if( (isNaN(ptsF1) ) || (ptsF1.length==0) )  
	{
		alert("points fidélités  invalide");
		return false;
	}
	

	

	}