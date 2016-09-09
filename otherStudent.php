<?php
/*
This file is for showing the details of students
*/
?>
<html>
  <head>
    <link rel="stylesheet" type="text/css" href="tableStyle.css">
  </head>
  <body>
    <?php
      $students =' [
      {
        "firstName":"John",
        "lastName":"Doe",
	    "PhoneNo":9830133272,
	    "EmailId":"johndoe@gmail.com"
      }, 
      {
        "firstName":"Anna",
        "lastName":"Smith",
	    "PhoneNo":7830133272,
	    "EmailId":"annad@gmail.com"
      },
      {
        "firstName":"Peter",
        "lastName":"Jones",
	    "PhoneNo":5630133272,
	    "EmailId":"peter@gmail.com"
      }
      ]';
	  //var_dump(json_decode($students, true));
	  $arr = json_decode($students, true);
	  //To show the data in a HTML table format
	  echo "<table>
	  <caption><h3>Students List</h3></caption>
	  <tr>
        <th><strong>FirstName</strong></th>&nbsp
        <th><strong>LastName</strong></th>&nbsp
        <th><strong>PhoneNo</strong></th>&nbsp
        <th><strong>EmailId</strong></th>&nbsp
      </tr>";
       foreach($arr as $k=>$v)
	   {
	      echo "<tr>";
		  foreach($v as $innerKey=>$innerValue)
          {
           	echo "<td><strong>$innerValue</strong></td>";
           }
		   echo "</tr>";
		}
      echo "</table>";
	?>
    </body>
</html>