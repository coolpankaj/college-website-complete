	
		function validation()
		{
			var letters = /^[A-Za-z]+$/;
            var mailformat = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/; 

if(document.f.user.value == "")
	{
		alert("please enter email id");
		document.f.user.focus();
		return false;
	}
else if(!(document.f.user.value.match(mailformat)))  
	{  
		alert("You have entered an invalid email address!");  
		document.f.user.focus();  
		return false; 
	} 
	else if(document.f.pass.value == "")
	{
		alert("please enter password");
		document.f.pass.focus();
		return false;
	}
	}
	