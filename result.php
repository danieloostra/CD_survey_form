<!DOCTYPE <!DOCTYPE html>
<html>
<head>
	<title>Survey Form</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
<fieldset>
<p class="sub_format">Submitted Information</p>
<div class="results">
<?php
echo 'Name: '.$_POST['your_name'].'<br>';
echo 'Dojo Location: '.$_POST['location'].'<br>';
echo 'Favorite Language: '.$_POST['language'].'<br>';
echo 'Comment: '.$_POST['comment'];
?>
</div>
<form>
<button class="submit_button" type="submit" formaction="survey.php" >Go Back</button>
</form>
</fieldset>
</body>
</html>