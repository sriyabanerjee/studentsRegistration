<!--This file is for Student registration -->
<html>
  <head>
    <title>
      Student Registration Form
    </title>
    <link rel="stylesheet" type="text/css" href="styles.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>

  </head>
  <body>
    <script type="text/javascript" src="validationStudentForm.js"></script>
	
    <h1><marquee>Student Registration Form</marquee></h1>
    <form name="student"  action="http://localhost/test/studentInformation.php" method="post">
      <fieldset class="informations">
        <legend>Personal Information:</legend>
        <label for="firstname">First Name:</label>
		<input type="text" name="firstname" id="firstname" ><br>&nbsp
		<span id="firstnameerror" class="error"></span><br>
		<label for="lastname">Last Name:</label>
        <input type="text" name="lastname" id="lastname" ><br>&nbsp
		<span id="lastnameerror" class="error"></span><br>
		<label for="address">Address:</label>
        <textarea name="address" id="address" class="addr"></textarea><br><br>
		<label for="country">Country:</label>
        <input type="text" name="country" id="country"><br><br>
		<label for="state">State:</label>
        <input type="text" name="state" id="state"><br><br>
		<label for="Nationality">Nationality:</label>
        <input type="text" name="Nationality" id="Nationality"><br><br>
		<label for="phnno">Phone No:</label>
        <input type="text" name="phnno" id="phnno" ><br>&nbsp
		<span id="phnnoerror" class="error"></span><br>
		<label for="gender">Gender:</label>
        <select id="gender" name="gender">
          <option value="male">Male</option>
          <option value="female">Female</option>
        </select><br><br>
		<label for="dob">DOB:</label>
        <select id="dob" name="dob">
         <option value="1">1</option>
         <option value="1">2</option>
         <option value="3">3</option>
         <option value="4">4</option>
         <option value="5">5</option>
         <option value="6">6</option>
         <option value="7">7</option>
         <option value="8">8</option>
         <option value="9">9</option>
         <option value="10">10</option>
         <option value="11">11</option>
         <option value="12">12</option>
         <option value="13">13</option>
         <option value="14">14</option>
         <option value="15">15</option>
         <option value="16">16</option>
         <option value="17">17</option>
         <option value="18">18</option>
         <option value="19">19</option>
         <option value="20">20</option>
         <option value="21">21</option>
         <option value="22">22</option>
         <option value="23">23</option>
         <option value="24">24</option>
         <option value="25">25</option>
         <option value="26">26</option>
         <option value="27">27</option>
         <option value="28">28</option>
         <option value="29">29</option>
         <option value="30">30</option>
         <option value="31">31</option>
        </select>
        <select id="dom" name="dom">
          <option value="1">January</option>
          <option value="2">February</option>
          <option value="3">March</option>
          <option value="4">April</option>
          <option value="5">May</option>
          <option value="6">June</option>
          <option value="7">July</option>
          <option value="8">August</option>
          <option value="9">September</option>
          <option value="10">October</option>
          <option value="11">November</option>
          <option value="12">December</option>
        </select>
        <select id="doy" name="doy">
          <option value="2000">2000</option>
          <option value="2001">2001</option>
          <option value="2002">2002</option>
          <option value="2003">2003</option>
          <option value="2004">2004</option>
          <option value="2005">2005</option>
          <option value="2006">2006</option>
          <option value="2007">2007</option>
          <option value="2008">2008</option>
          <option value="2009">2009</option>
          <option value="2010">2010</option>
          <option value="2011">2011</option>
          <option value="2012">2012</option>
        </select><br><br>
		<label for="emailid">Emailid:</label>
        <input type="text" name="emailid" id="emailid" size="40px"  ><br>&nbsp
		<span id="emailiderror" class="error"></span><br>
        <label for="class">Class:</label>
       <select id="class" name="class">
         <option value="1">1</option>
         <option value="2">2</option>
         <option value="3">3</option>
         <option value="4">4</option>
         <option value="5">5</option>
         <option value="6">6</option>
         <option value="7">7</option>
         <option value="8">8</option>
         <option value="9">9</option>
         <option value="10">10</option>
         <option value="11">11</option>
         <option value="12">12</option>
        </select><br><br>
		
      </fieldset><br><br>
      <fieldset>
        <legend>Gurdian's Information</legend>
        <label for="gurfirstname">First Name:</label>
		<input type="text" name="gurfirstname" id="gurfirstname" ><br>&nbsp
		<span id="gurfirstnameerror" class="error"></span><br>
        <label for="gurlastname">Last Name:</label>
		<input type="text" name="gurlastname" id="gurlastname" ><br>&nbsp
		<span id="gurlastnameerror" class="error"></span><br>
        <label for="relationship">Relationship:</label>
        <select id="relationship" name="relationship">
          <option value="Father">Father</option>
          <option value="Mother">Mother</option>
          <option value="Others">Others</option>
        </select><br><br>
        <label for="guraddress">Address:</label>
		<textarea name="guraddress" id="guraddress" class="addr"></textarea><br><br>
        <label for="gurcountry">Country:</label>
		<input type="text" name="gurcountry" id="gurcountry"><br><br>
        <label for="gurstate">State:</label>
		<input type="text" name="gurstate" id="gurstate"><br><br>
        <label for="gurnationality">Nationality:</label>
		<input type="text" name="gurnationality" id="gurnationality"><br><br>
        <label for="gurphoneno">Phone No:</label>
		<input type="text" name="gurphnNo" id="gurphoneno" ><br>&nbsp
		<span id="gurphonenoerror" class="error"></span><br>
        <label for="guroccupation">Occupation:</label>
		<input type="text" name="guroccupation" id="guroccupation"><br><br>
      </fieldset>
	  <div id="locator">
		<img src="kids.jpg" alt="pics"><br>
	  </div>
	  
      <h2><input type="submit"  value="submit" ></h2>
    </form>
	<div id="showInformation">
	    <h2>Personal Information</h2>
	    <label for="firstname">First Name:</label>
		<input type="text" name="firstname" id="showPersonalFirstName" readonly><br><br>
		<label for="lastname">Last Name:</label>
        <input type="text" name="lastname" id="showPersonalLastName" readonly><br><br>
		<label for="address">Address:</label>
        <textarea name="address" id="showPersonalAddress" class="addr" readonly></textarea><br><br>
		<label for="country">Country:</label>
        <input type="text" name="country" id="showPersonalCountry" readonly><br><br>
		<label for="state">State:</label>
        <input type="text" name="state" id="showPersonalState" readonly><br><br>
		<label for="Nationality">Nationality:</label>
        <input type="text" name="Nationality" id="showPersonalNationality" readonly><br><br>
		<label for="phnno">Phone No:</label>
        <input type="text" name="phnno" id="showPersonalPhnno" readonly><br><br>
		<label for="gender">Gender:</label>
		<input type="text" name="gender" id="showPersonalGender" readonly><br><br>
		<label for="dob">DOB:</label>
		<input type="text" name="gender" id="showPersonalDOB" readonly><br><br>
		<label for="emailid">Emailid:</label>
		<input type="text" name="gender" id="showPersonalEmailid" readonly><br><br>
		<label for="class">Class:</label>
		<input type="text" name="gender" id="showPersonalClass" readonly><br><br>
		<h2>Gurdian Information</h2>
	    <label for="firstname">First Name:</label>
		<input type="text" name="firstname" id="showGurdianFirstName"  ><br><br>
		<label for="lastname">Last Name:</label>
        <input type="text" name="lastname" id="showGurdianLastName" readonly><br><br>
		<label for="relationship">Relationship:</label>
		<input type="text" name="lastname" id="showGurdianRelationship" readonly><br><br>
		<label for="address">Address:</label>
        <textarea name="address" id="showGurdianAddress" class="addr" readonly></textarea><br><br>
		<label for="country">Country:</label>
        <input type="text" name="country" id="showGurdianCountry" readonly><br><br>
		<label for="state">State:</label>
        <input type="text" name="state" id="showGurdianState" readonly><br><br>
		<label for="Nationality">Nationality:</label>
        <input type="text" name="Nationality" id="showGurdianNationality" readonly><br><br>
		<label for="phnno">Phone No:</label>
        <input type="text" name="phnno" id="showGurdianPhnno" readonly><br><br>
		<label for="guroccupation">Occupation:</label>
		<input type="text" name="phnno" id="showGurdianOccupation" readonly><br><br>
		
	  </div>
	  <div id="othersInformation">
		  <h2>Do You Want To See Student's List?</h2>
	   </div>
		<center><button id="other" align="center">Click</button></center>
  </body>
</html>