<html>
  <head>
    <meta charset="UTF-8">
  </head>
  <body>
    <?php
	  if(!empty($_POST))
	  {
		 /* $postArray=array(
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
		  );*/
		 /* $json=json_encode($postArray);
		  echo json_last_error();
		  $file="entries.json";
		  file_put_contents($file,$json,FILE_APPEND);
		  echo "<h3>You have sucessfully registered</h3>";*/
		 /* $file="entries.json";
		  $arr_data = array();  
          $jsondata = file_get_contents($file);
          $arr_data = json_decode($jsondata, true);
          $arr_data[] = $postArray;
          $jsondata = json_encode($arr_data, JSON_PRETTY_PRINT);
          file_put_contents($file, $jsondata);
          echo "<h3>You have sucessfully registered</h3>";*/
          //$form_state['redirect'] = false;
		  $target_dir = "E:\xampp\htdocs\test";
          $target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
          $uploadOk = 1;
          $imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
          // Check if image file is a actual image or fake image
          if(isset($_POST["submit"])) {
           $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
           if($check !== false) {
             echo "File is an image - " . $check["mime"] . ".";
             $uploadOk = 1;
            } else {
             echo "File is not an image.";
              $uploadOk = 0;
            }
          }
          // Check if file already exists
          if (file_exists($target_file)) {
           echo "Sorry, file already exists.";
           $uploadOk = 0;
          }
          // Check file size
         if ($_FILES["fileToUpload"]["size"] > 500000) {
           echo "Sorry, your file is too large.";
           $uploadOk = 0;
         }
         // Allow certain file formats
         if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
          && $imageFileType != "gif" ) {
            echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
            $uploadOk = 0;
}
           // Check if $uploadOk is set to 0 by an error
           if ($uploadOk == 0) {
             echo "Sorry, your file was not uploaded.";
             // if everything is ok, try to upload file
            } else {
             if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
               echo "The file ". basename( $_FILES["fileToUpload"]["name"]). " has been uploaded.";
            } else {
              echo "Sorry, there was an error uploading your file.";
           }
       }
	  }
	  
	?>
  </body>
</html>