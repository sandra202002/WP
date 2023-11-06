<!DOCTYPE html>
<html>
<head>
	<title>
		Form validation using HTML and JavaScript
	</title>
	<h1 align="center" style="border:orange;border-width:5px;border-style:solid;">REGISTRATION FORM</h1>
<h3>PERSONAL INFORMATION</h3>

<script>
	function show()
	{
		let x =document.forms["RegForm"]["fname"].value;
		let y =document.forms["RegForm"]["address"].value;
		let z =document.forms["RegForm"]["gender"].value;
		let t =document.forms["RegForm"]["crse"].value;
		let a =document.forms["RegForm"]["dob"].value;
		let w =document.forms["RegForm"]["hobbies"].value;
		let pno =document.forms["RegForm"]["pno"].value;
		let g =document.forms["RegForm"]["guardian"].value;
					

		if (x == "") {
			alert("Please enter your name.");
			return false;
		}

		if (y == "") {
			alert("Please enter your address.");
			return false;
		}
	
		if (z == "" ) {
			alert("gender should be selected");
			return false;
		}
	
		if (t == "") {
			alert("course needed");
			return false;
		}

		if(a == ""){
			alert("enter your date of birth");
			return false;

		}
		if (w == "") {
			alert("hobbies need to be filled out");
			return false;
		}
		if (pno == "") {
			alert("Please enter valid phone number.");
			return false;
		}


		if(g == ""){
			alert("guardians nam necessary");
			return false;
		} 
		if(!(document.forms["RegForm"]["d1"].cheched || document.forms["RegForm"]["d2"].checked || document.forms["RegForm"]["d3"].checked || document.forms["RegForm"]["d4"].checked || document.forms["RegForm"]["d5"].checked))
		{
			alert("any one of the activities should be selected");
			return false;
		}

		}
</script>
</head>
<body backgroundg-color:"black"><br>
	
	<form id="RegForm" action="prgm2.html" method="post" onsubmit="return show()">
			<label>Name:</label>
			<input type="text" name="fname" id="fname"><br><br>
	
			<label> COURSE:</label><br>
			<select name="crse" id="crse" width="20%">
				<option value="">course</option>
				<option value="BA">BA</option>
				<option value="Bsc">BSC</option>
				<option value="BCA">BCA</option>
			</select><br><br>

			<label>Gender:</label>
			<select name="gender" id="gender" width="20%">
				<option value="">SELECT</option>
				<option value="male">MALE</option>
				<option value="female">FEMALE</option>
				<option value="others">OTHERS</option>
			</select><br><br>
			
			<label>DOB:</label>
			<input type="date" name="dob" id="dob" size="10"><br><br>

			<label>Address:</label><br><br>
			<textarea cols="50" rows="5" name="address" id="address">
			</textarea><br><br>

			<label>phone:</label>
			<input type="number" name="pno" id="pno" size="15"><br><br>

			<label>Guardian:</label>
			<input type="text" name="guardian" id="guardian"size="10"><br><br>
>
			<label> Hobbies:</label><br>
			<textarea cols="50"rows="1" name="hobbies" id="hobbies"></textarea><br><br>

			<label>Extra caricullers:</label><br>
			<input type="checkbox" name="d1">DRAWING<br>
			<input type="checkbox" name="d2">PAINTING<br>
			<input type="checkbox" name="d3">DANCING<br>
			<input type="checkbox" name="d4">SINGING<br>
			<input type="checkbox" name="d5">CALLIGRAPHY<br><br>
	

			<button onclick="">SUBMIT</button>
			<button type="reset">RESET</button>
	</form>
</body>
</html>
