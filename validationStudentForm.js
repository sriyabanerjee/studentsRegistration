
$(document).ready(function(){
	$("#showInformation").hide();
	
	$(":text,textarea,select").mouseover(function(){
		$(this).css("background-color","pink");
	});
	$(":text,textarea,select").mouseout(function(){
		$(this).css("background-color","white");
	});
  $("#firstname,#lastname,#gurfirstname,#gurlastname,#phnno,#gurphoneno,#emailid").on("click keyup blur",function(){
	 var errorId=$(this).attr("id")+"error";
	 var fieldName=$(this).attr("id");
	 $("#"+errorId).html("");
    if(!$(this).val())
	  $("#"+errorId).html(fieldName+" is mandatory");
	else if( (fieldName=="firstname"||fieldName=="lastname"||fieldName=="gurfirstname"||fieldName=="gurlastname")&&/[^a-zA-Z]/.test($(this).val()))
	 $("#"+errorId).html(fieldName+" must contains only alphabet");
	else if((fieldName=="phnno" || fieldName=="gurphoneno")&& /[^0-9]/.test($(this).val()))
		$("#"+errorId).html(fieldName+" contains only digits");
	else if((fieldName=="phnno" || fieldName=="gurphoneno")&& $(this).val().length!=10)
		$("#"+errorId).html(fieldName+" must contains 10 digits");
	else if(fieldName=="emailid" && !($(this).val().indexOf("@") > -1))
		$("#"+errorId).html(fieldName+" must contains @");
  });
  $("form[name='student']").submit(function(e){
	  var errorMsg="";
	  if(!$("#firstname").val())
	  {
		  errorMsg=errorMsg + "firstname is mandatory \n";
		  $("#firstname").css('border-color', 'red');
	  }
	  else if(/[^a-zA-Z]/.test($("#firstname").val()))
	  {
		  errorMsg=errorMsg +"Personal firstname must contains only alphabet \n";
		  $("#firstname").css('border-color', 'red');
	  }
	  if(!$("#lastname").val())
	  {
		  errorMsg=errorMsg + "lastname is mandatory\n";
		  $("#lastname").css('border-color', 'red');
	  }
	  else if(/[^a-zA-Z]/.test($("#lastname").val()))
	  {
		  errorMsg=errorMsg + "Personal lastname must contains only alphabet \n";
		  $("#lastname").css('border-color', 'red');
	  }
	  if(!$("#gurfirstname").val())
	  {
		  errorMsg=errorMsg + "gurfirstname is mandatory \n" ;
		  $("#gurfirstname").css('border-color', 'red');
	  }
	  else if(/[^a-zA-Z]/.test($("#gurfirstname").val()))
	  {
		  errorMsg=errorMsg + "Gurdian firstname must contains only alphabet \n";
		  $("#gurfirstname").css('border-color', 'red');
	  }
	  if(!$("#gurlastname").val())
	  {
		  errorMsg=errorMsg + "gurlastname is mandatory \n";
		  $("#gurlastname").css('border-color', 'red');
	  }
	  else if(/[^a-zA-Z]/.test($("#gurlastname").val()))
	  {
		  errorMsg=errorMsg + "Gurdian lastname must contains only alphabet \n";
		  $("#gurlastname").css('border-color', 'red');
	  }
	  if(!$("#phnno").val())
	  {
		  errorMsg=errorMsg + "Peronal phnno is mandatory";
		  $("#phnno").css('border-color', 'red');
	  }
	  else if(/[^0-9]/.test($("#phnno").val()))
	  {
		  errorMsg=errorMsg + "Peronal phone no must contains only digits \n";
		  $("#phnno").css('border-color', 'red');
	  }
	  else if($("#phnno").val().length!=10)
	  {
		  errorMsg=errorMsg + "Peronal phone no must contains 10 digits \n";
		  $("#phnno").css('border-color', 'red');
	  }
	  if(!$("#gurphoneno").val())
	  {
		  errorMsg=errorMsg + "Gurdian phoneno is mandatory\n";
		  $("#gurphoneno").css('border-color', 'red');
	  }
	  else if(/[^0-9]/.test($("#gurphoneno").val()))
	  {
		  errorMsg=errorMsg + "Gurdian phone no must contains only digits \n";
		  $("#gurphoneno").css('border-color', 'red');
	  }
	  else if($("#gurphoneno").val().length!=10)
	  {
		  errorMsg=errorMsg + "Gurdian phone no must contains 10 digits \n";
		  $("#gurphoneno").css('border-color', 'red');
	  }
	  if(!$("#emailid").val())
	  {
		  errorMsg=errorMsg + "emailid is mandatory";
		  $("#emailid").css('border-color', 'red');
	  }
	  else if(!($("#emailid").val().indexOf("@") > -1))
	  {
		  errorMsg=errorMsg + "Personal Email Id must contains @ \n";
		  $("#emailid").css('border-color', 'red');
	  }
	  if(errorMsg=="")
	  {
		/*e.preventDefault();
		$(this).hide();
		$("#showPersonalFirstName").val($("#firstname").val());
		$("#showPersonalLastName").val($("#lastname").val());
		$("#showPersonalAddress").val($("#address").val());
		$("#showPersonalCountry").val($("#country").val());
		$("#showPersonalState").val($("#state").val());
		$("#showPersonalNationality").val($("#Nationality").val());
		$("#showPersonalPhnno").val($("#phnno").val());
		$("#showPersonalGender").val($("#gender").val());
		$("#showPersonalDOB").val($("#dob").val()+"/"+$("#dom").val()+"/"+$("#doy").val());
		$("#showPersonalEmailid").val($("#emailid").val());
		$("#showPersonalClass").val($("#class").val());
		$("#showGurdianFirstName").val($("#gurfirstname").val());
		$("#showGurdianLastName").val($("#gurlastname").val());
		$("#showGurdianRelationship").val($("#relationship").val());
		$("#showGurdianAddress").val($("#guraddress").val());
		$("#showGurdianCountry").val($("#gurcountry").val());
		$("#showGurdianState").val($("#gurstate").val());
		$("#showGurdianNationality").val($("#gurnationality").val());
		$("#showGurdianPhnno").val($("#gurphoneno").val());
		$("#showGurdianOccupation").val($("#guroccupation").val());
		$("#showInformation").show();
		//$form_state['redirect'] = false;
		this.submit(); 	*/
		return true;
	  }
		  
	  else
	  {
		  alert(errorMsg);
		  return false;
	  }
  });
  $("#other").click(function(){
	$.ajax({
    type: "POST",
    url: "http://localhost/test/otherStudent.php",
   })
   .done(function( msg ) {
     $("form[name='student']").hide();
     $("#other").hide();
     $("#othersInformation").html(msg);
   })
  });

});
