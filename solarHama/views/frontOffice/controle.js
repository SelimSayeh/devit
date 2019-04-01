function verif()
{
	var nom=document.getElementById("nom").value;
	var prenom=document.getElementById("prenom").value;
	var ville=document.getElementById("ville").value;
	var mail=document.getElementById("ville").value;
	var tel=document.getElementById("ville").value;
;
	if(nom.length==0)
	{
		alert("nom incorrect");
		return false;
	}

	if(prenom.length==0)
	{
		alert("prenom incorrect");
		return false;
	}

	if(ville.length==0)
	{
		alert("ville incorrect");
		return false;
	}

	if(mail.indexOf("@")==-1)
	{
		alert("email incorrect");
		return false;
	}
	if( (isNaN(tel)||(tel.length)!=8 ) )
	{
		alert("tel incorrect");
		return false;
	}
}