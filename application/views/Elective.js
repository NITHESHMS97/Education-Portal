 function SubmitForm()
{					

	var dept= $('#dept').val();
	var sem= $('#sem').val();
	var gorl= $('#gorl').val();

	var parameters="dept="+dept+"&sem="+sem+"&gorl="+gorl
	var xhttp = new XMLHttpRequest();
	xhttp.onreadystatechange = function() 
	{
		if (xhttp.readyState == 4 && xhttp.status == 200) 
		{
			  document.getElementById("nd").innerHTML = xhttp.responseText;
		}
	}

		xhttp.open("POST", "http://localhost/portal/index.php/Elective/getElective", true);
		xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
		xhttp.send(parameters);
}
