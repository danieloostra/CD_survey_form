<!DOCTYPE html>
<html lang="en">
<head>
	<title>Survey Form</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<form action="result.php" id="survey_form" method="post">
    <fieldset>
		<label for="your_name">Your Name:</label>
		<input id="your_name" type="text" name="your_name"></input>
		<br>
		<label for="location">Dojo Location:</label>
		<select id="location" form="survey_form" name="location">
		  <option value="Mountain View">Mountain View</option>
		  <option value="Chicago">Chicago</option>
		  <option value="Dallas">Dallas</option>
		  <option value="Burbank">Burbank</option>
		  <option value="DC">District of Columbia</option>
		  <option value="Seattle">Seattle</option>
		</select>
		<br>
		<label for="language">Favorite Language:</label>
		<select id="language" form="survey_form" name="language">
		  <option value="Java">JAVA</option>
		  <option value="Javascript">JavaScript</option>
		  <option value="VTL">Velocity Template Language</option>
		  <option value="PHP">PHP</option>
		  <option value="BASIC">BASIC</option>
		  <option value="FORTRAN">FORTRAN</option>
		</select>
		<br>
	<label for="comment">Comment (optional):</label><br>
	<input id="comment" type="textarea" name="comment" class="boxarea"></input>
	<br>
	<input class="submit_button" type="submit"></input>
	</fieldset>
	</form>
</body>
</html>
