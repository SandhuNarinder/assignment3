<!-- Narinder Sandhu -->
<?php
// Extract function for form data 
extract($_POST);
if(isset ($save)){
	// Validation logic 
	$pattern = '/^(([0-9A-Za-z]+)[-]?([0-9A-Za-z]*)(?<!-)(\.))+([a-zA-Z]{2,})$/';
    // check the condition and match with the pattern
	if(preg_match($pattern, $input)) {
		echo "<p>RegExp Value: <br> $input</p>";
        echo "<p>SUCCESSful Entry<p>";
	} else {
		echo "<p>Invalid Entry<p>";
	}
}
?>

<html>
    <head>
        
    </head>
	<body>
		<form action="regex_exp.php" method="post">
           <input type="text" name="text" placeholder="Enter your value"><br>
			<input type="submit" name="save" value="submit" >
		</form>
	</body>


</html>