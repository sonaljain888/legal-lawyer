
function validate()
{
	if(document.getElementById("txtname").value.length==0)
	{ 
            document.getElementById("spnname").innerHTML="username must be requird";
//		alert('username must be 15 digit');
		return false;
	}
	if(document.getElementById("txtpwd").value.length==0)
	{
             document.getElementById("spnpwd").innerHTML="Password is required";
//		alert('Password is required');
		return false;
	}
	
	
}
