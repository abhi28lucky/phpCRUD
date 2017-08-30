<?php

   $name = 'someName';
   $value = 100;
   $expiration = time() + (60*60*24*7);
   setcookie($name,$value,$expiration);

?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

<?php
    if(isset($_COOKIE["someName"]))
    {
    	$someOne = $_COOKIE["someName"];
    	echo $someOne;

    }
    else
    {
    	$someOne = "";
    }
?>

</body>
</html>