function verifa()
{
	var ID=document.getElementById('id').value;
	var nomv=document.getElementById('nom').value;
	var DATE=document.getElementById('date').value;
	var PRIX=document.getElementById('prix').value;
	
	if(ID.length!==8)
	{
		alert("id doit être non vide");
		return false;
	}
	if(nomv.length==0)
	{
		alert("nom doit être non vide");
		return false;
	}


	if ( isNaN(PRIX))
	{
		alert("prix incorrect");
		return false;
	}


	if ( PRIX==0)
	{
		alert("prix incorrect");
		return false;
	}


	}