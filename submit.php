<!-- Narinder Sandhu -->
<?php
$errors=[];
if($_SERVER['REQUEST_METHOD']=='POST'){
    // check the condition
if((empty($_POST['username']))
||(empty($_POST['password']))
||(empty($_POST['city']))||(empty($_POST['country'])))
{
$errors[]= "fill all the details";	
}
else{
if(isset($_POST['username'])){
    // sanitize the user input
				$username = filter_var($_POST['username'], FILTER_SANITIZE_STRING);
                $username_regexp="/[a-zA-Z0-9]{4,}/";
				if(preg_match($username_regexp,$username)){
                    // check the condition and match with the expression 
					echo $username;
				}
				else {
					$errors[]="name must be alphanumeric and at least length 4";
				}			
	
}
if(isset($_POST['password']) && strlen($_POST['password'])>=6)// set rhe password and check the string length
{
				$password = filter_var($_POST['password'], FILTER_SANITIZE_STRING);
	
}
else{
	//enter  more than length of 6
	$errors[]="Password must be 6 length of long";
}
if(isset($_POST['city'])&&isset($_POST['country'])){
    // sanitize the string for input of city and country 
				$city = filter_var($_POST['city'], FILTER_SANITIZE_STRING);
				$country = filter_var($_POST['country'], FILTER_SANITIZE_STRING);
				$city_regexp="/[a-zA-Z]{4,}/";
				if(preg_match($city_regexp,$city)){
				}
				else {
					$errors[]="city name must be letter and at least length 4";
				}
				$country_regexp="/[a-zA-Z0-9]{4,}/";
				if(preg_match($country_regexp,$country)){
				}
				else {
					$errors[]="country name must be letter and at least length 4";
				}
}
else{
	$errors[]="enter city country";
}
if(isset($_POST['age'])&&filter_var($_POST['age'],FILTER_VALIDATE_INT, array("options"=>array("min_range"=>18,"max_range"=>120)))
	== true)
	{
		$age=$_POST['age'];
		
	}
else{// put age between in 18 and 120
$errors[]="please put age between in 18 and 120";
}
}
if(empty($errors)){
	echo "success";
	echo "<p>USERNAME - $username</p> <p>PASSWORD - $password</p> <p>AGE - $age</p> <p>CITY - $city</p> <p>COUNTRY - $country</p>";
}
else{
	foreach($errors as $error){
		echo "$error";
}}
}
?>
<html>
    <head>
        
    </head>
    
    <body>
      
        <form action="submit.php" method="post">
            <label>Username:</label>
            <input name="username" type="text"><br><br>
             <label>Age:</label>
            <input name="age" type="text"><br><br>
             <label>Password:</label>
            <input name="password" type="text"><br><br>
            <label>City:</label>
            <input name="city" type="text"><br><br>
            <label>Country:</label>
            <input name="country" type="text"><br><br>
            <input name="register" type="submit" value="Register">
        </form>
        
    </body>
</html>
