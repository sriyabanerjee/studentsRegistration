<!-- This file receives data from studentRegistrationFormUsingJquery.php and saves the data to entries.json file -->
<html>
  <head>
    <meta charset="UTF-8">
  </head>
  <body>
    <?php
	  if(!empty($_POST))
	  {
		  $postArray=array(
		    "Firstname"=>$_POST["firstname"], 
			"Lastname"=>$_POST["lastname"], 
			"Address"=>$_POST["address"], 
			"Country"=>$_POST["country"], 
			"State"=>$_POST["state"], 
			"Nationality"=>$_POST["Nationality"], 
			"Phnno"=>$_POST["phnno"], 
			"Gender"=>$_POST["gender"], 
			"Dob"=>$_POST["dob"].".".$_POST["dom"].".".$_POST["doy"], 
			"emailid"=>$_POST["emailid"], 
			"classs"=>$_POST["class"],
			"Gurdian's Firstname"=>$_POST["gurfirstname"],
			"Gurdian's Lastname"=>$_POST["gurlastname"],
			"Relationship"=>$_POST["relationship"],
			"Gurdian's Address"=>$_POST["guraddress"],
			"Gurdian's Country"=>$_POST["gurcountry"],
			"Gurdian's state"=>$_POST["gurstate"],
			"Gurdian's Nationality"=>$_POST["gurnationality"],
			"Gurdian's PhnNo"=>$_POST["gurphnNo"],
			"Gurdian's Occupation"=>$_POST["guroccupation"]
		    );
			/*This code just encodes currently submitted data and appends it to the file, but by this the created json file can not be decoded*/
		   /* $json=json_encode($postArray);
		   echo json_last_error();
		   $file="entries.json";
		   file_put_contents($file,$json,FILE_APPEND);
		   echo "<h3>You have sucessfully registered</h3>";*/
		   $file="entries.json";//json file name
		   $arr_data = array(); //take an array 
           $jsondata = file_get_contents($file);//to get the previous contents of a file
           $arr_data = json_decode($jsondata, true);//now decode it and stores in the array
           $arr_data[] = $postArray;// now add current submitted information to the previous
           $jsondata = json_encode($arr_data, JSON_PRETTY_PRINT);//now encode it
           file_put_contents($file, $jsondata);//now write it to the json file
           echo "<h3>You have sucessfully registered</h3>";
          
	   }
	  
	?>
  </body>
</html>