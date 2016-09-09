/*
This java script file consists of functions to validate a student registration form.
It validates the mandatory fields and the proper format of the fields.
Created by Sriya Banerjee on 5/09/2016
*/
/*
This function validates the student first name.
1)This is mandatory field.
2)Name contains only alphabet
*/
function validateFirstName(){
	document.getElementById("firstnameerror").innerHTML ="";
	if(student.firstname.value.length==0)  
      { 
		document.getElementById("firstnameerror").innerHTML = "You must enter first name";
		return false;
	  } 
    else if(/[^a-zA-Z]/.test(student.firstname.value)) 
      { 
		document.getElementById("firstnameerror").innerHTML = "You must enter only alphabet";
		return false;
	  }
	  return true;
}
/*
This function validates the student last name.
1)This is mandatory field.
2)Name contains only alphabet
*/
function validateLastName(){
	document.getElementById("lastnameerror").innerHTML ="";
	if(student.lastname.value.length==0)  
      { 
		document.getElementById("lastnameerror").innerHTML = "You must enter last name";
		return false;
	  } 
    else if(/[^a-zA-Z]/.test(student.lastname.value)) 
      { 
		document.getElementById("lastnameerror").innerHTML = "You must enter only alphabet";
		return false;
	  }
	  return true;
}
/*
This function validates the student emailid.
1)This is mandatory field.
2)@ must be present in emailid
*/
function validate() {
	document.getElementById("emailerror").innerHTML = "";
  if(student.emailid.value.length==0 )
  {
   document.getElementById("emailerror").innerHTML = "You must enter a emailid";
   return false;
  }
  else if(!((student.emailid.value).indexOf("@") > -1 )) 
      { 
		document.getElementById("emailerror").innerHTML = "@ is needed";
		return false;
	  }
	  return true;
 }
 /*
This function validates the student phone number.
1)This is mandatory field.
2)Name contains only number
3)It must contains 10 digits
*/
 function validatephn(){
	 document.getElementById("phnerror").innerHTML = "";
	 if(student.phnno.value.length==0)
	 {
		document.getElementById("phnerror").innerHTML = "You must enter a phone no";
		return false;
	 } 
	  else if(/[^0-9]/.test(student.phnno.value))  
      { 
		document.getElementById("phnerror").innerHTML = "You must enter only digits";
		return false;
	  }
	  else if(student.phnno.value.length!=10)  
      { 
		document.getElementById("phnerror").innerHTML = "phn no must contains 10 digit";
		return false;
	  }
	 return true;
  }
/*
This function validates the Gurdian first name.
1)This is mandatory field.
2)Name contains only alphabet
*/
function validateGurdianFirstName(){
	document.getElementById("gurfirstnameerror").innerHTML ="";
	if(student.gurfirstname.value.length==0)  
      { 
         document.getElementById("gurfirstnameerror").innerHTML = "You must enter Gurdian first name";
	   } 
    else if(/[^a-zA-Z]/.test(student.gurfirstname.value)) 
      { 
		document.getElementById("gurfirstnameerror").innerHTML = "You must enter only alphabet";
		return false;
	  }
	  return true;
}
/*
This function validates the Gurdian last name.
1)This is mandatory field.
2)Name contains only alphabet
*/
function validateGurdianLastName(){
	document.getElementById("gurlastnameerror").innerHTML ="";
	if(student.gurlastname.value.length==0)  
      { 
		document.getElementById("gurlastnameerror").innerHTML = "You must enter Gurdian last name";
		return false;
	  } 
    else if(/[^a-zA-Z]/.test(student.gurlastname.value)) 
      { 
		document.getElementById("gurlastnameerror").innerHTML = "You must enter only alphabet";
		return false;
	  }
	  return true;
}
/*
This function validates the Gurdian phonenumber.
1)This is mandatory field.
2)Name contains only number
3)It must contains 10 digit
*/
function validateGurdianphn(){
	 document.getElementById("gurphnerror").innerHTML = "";
	 if(student.gurphoneno.value.length==0)
	 {
		document.getElementById("gurphnerror").innerHTML = "You must enter Gurdian phone no";
		return false;
	 } 
	 else if(/[^0-9]/.test(student.gurphoneno.value))  
      { 
		document.getElementById("gurphnerror").innerHTML = "You must enter only digits";
		return false;
	  }
	 
	  else if(student.gurphoneno.value.length!=10)  
      { 
		document.getElementById("gurphnerror").innerHTML = "phn no must contains 10 digit";
		return false;
	  } 
	 return true;
    }
	/*
This function validates the form before submission.
1)It checks if all mandatory field is filled up
2)all fields are properly filled up
*/
function validateForm()
{
	var error="";
	if(student.firstname.value.length==0)
	{
		error=error+"Personal First name is mandatory";
		document.getElementById('firstname').style.borderColor = "red";
	}
	else if(! validateFirstName())
	{
		error=error+"Personal First name is not proper";
		document.getElementById('firstname').style.borderColor = "red";
	}
	if(student.lastname.value.length==0)
	{
		error=error+"\n"+"personal Last name is mandatory";
		document.getElementById('lastname').style.borderColor = "red";
	}
	else if(! validateLastName())
	{
		error=error+"Personal Last name is not proper";
		document.getElementById('lastname').style.borderColor = "red";
	}
	if(student.emailid.value.length==0)
	{
		error=error+"\n"+"personal Email id is mandatory";
		document.getElementById('emailid').style.borderColor = "red";
	}
	else if(! validate())
	{
		error=error+"Personal Email is not proper";
		document.getElementById('emailid').style.borderColor = "red";
	}
	if(student.phnno.value.length==0)
	{
		error=error+"\n"+"personal Phone No is mandatory";
		document.getElementById('phnno').style.borderColor = "red";
	}
	else if(! validatephn())
	{
		error=error+"Personal Phone no is not proper";
		document.getElementById('phnno').style.borderColor = "red";
	}
	if(student.gurfirstname.value.length==0)
	{
		error=error+"\n"+"Gurdian First name is mandatory";
		document.getElementById('gurfirstname').style.borderColor = "red";
	}
	else if(! validateGurdianFirstName())
	{
		error=error+"Gurdian First Name is not proper";
		document.getElementById('gurfirstname').style.borderColor = "red";
	}
	if(student.gurlastname.value.length==0)
	{
		error=error+"\n"+"Gurdian Last name is mandatory";
		document.getElementById('gurlastname').style.borderColor = "red";
	}
	else if(! validateGurdianLastName())
	{
		error=error+"Gurdian Last name is not proper";
		document.getElementById('gurlastname').style.borderColor = "red";
	}
	if(student.gurphoneno.value.length==0)
	{
		error=error+"\n"+"Gurdian Phone No is mandatory";
		document.getElementById('gurphoneno').style.borderColor = "red";
	}
	else if(! validateGurdianphn())
	{
		error=error+"Gurdian Phone no is not proper";
		document.getElementById('gurphoneno').style.borderColor = "red";
	}
	if(error=="")
		return true;
	else
	{
		alert(error);
		return false;
	}
		
}
