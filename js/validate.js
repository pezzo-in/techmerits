//* Form elements Validation..

function ValidateForm()
{
    
	var fullname = document.Form.fullname;
    var emailaddress = document.Form.emailaddress;
    var phone = document.Form.phone;
	var message = document.Form.message;
	
	var fup1 = document.getElementById('file');
    var file = fup1.value;
    var ext1 = file.substring(file.lastIndexOf('.') + 1);
	
	
		
	
							
//fullname Validation:
	
	if (fullname.value == "")
    {
        window.alert("Please enter Your fullname.");
        fullname.focus();
        return false;
    }
	
//emailaddress Validation:
    
	if (emailaddress.value == "")
    {
        window.alert("Please enter Your E-Mail Address.");
        emailaddress.focus();
        return false;
    }
	
//emailaddress Validation: Check for proper format

    if ((emailaddress.value.indexOf("@") < 0) || (emailaddress.value.indexOf(".") < 0) || (emailaddress.value.indexOf("@") == 0) || (emailaddress.value.indexOf("."			             ) == 0))
    {
        window.alert("Please enter a valid E-Mail Address.");
        emailaddress.focus();
        return false;
    }
	
//phone number Validation:
	
    if (phone.value == "")
    {	
		window.alert("Please enter Your Telephone Number.");
        phone.focus();
        return false;
	}
     if (subject.value == "")
    {   
        window.alert("Please enter subject.");
        subject.focus();
        return false;
    }

	
//phone number Validation for numeric.
	if(isNaN(phone.value))
		{
		window.alert("The Telephone Number should be numeric.");
		phone.focus();
		return false;
	}

 if(ext1 == "EXE" || ext1 == "exe" )
    
    {
        alert("EXE form attachments not accepted.!");
        return false;
    }


//Description Validation:

    if (message.value == "")
    {
        window.alert("Please provide the Description.");
        message.focus();
        return false;
    }
	

}




