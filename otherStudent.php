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
     if(file_get_contents ('./entries.json'))
	  {
	     $data=file_get_contents ('./entries.json');
		 $arr = json_decode($data, TRUE);
	     $count=0;
	     //To show the data in a HTML table format
	     echo "<table> <caption><h3>Students List</h3></caption> ";
		 //To show table header.It should only traverse all columns for 1 st row,So the count variable is taken
	     foreach($arr as $k=>$v)
	     {
	       echo "<tr>";
		   if($count==1)
			  break;
		    $count++;
		   foreach($v as $innerKey=>$innerValue)
           {
			 echo "<th><strong>$innerKey</strong></th>"; 
		   }
		   echo "</tr>";
		 }
		 //To show all records.It should traverse all rows and columns.
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
	   }
	?>
  </body>
</html>