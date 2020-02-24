<!-- Narinder Sandhu -->
<?php 
// check the post method
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $error=0;
    $pattern = '/^[0-9A-Fa-f]{4}_*/';
	$subject=$_POST['subject'];
	if(preg_match($pattern,$sub)){
        //print  the success message 
		echo "SUCCESS";
	}
	else{
       // Print the error message 
		echo "INVALID INPUT";
	}
	
}
?>
<html>
<head>
    </head>
<body>

<form action="hexnumber.php" method="post">
    <label>Check for HEXADECIMAL Number:</label>
    <input name="subject"  maxlength="4"><br>
	<input type="submit" name="submit" value="submit">
</form>
</body>
</html>