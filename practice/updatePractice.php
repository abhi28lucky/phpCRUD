<?php
   if(isset($_POST['update']))
   {
   	 $username = $_POST['username'];
   	 $password = $_POST['password'];

   	 $connection = mysqli_connect('localhost','root','','abhi');
   	 $query = "UPDATE phpproject SET";
   	 $query .= "username = '$username' , ";
   	 $query .= "password = '$password'";
   	 $query .= "id = '$id'";

   	 $result = mysqli_query($connection,$query);
   }


?>
<!DOCTYPE html>
<html lang = "en">
<head>
    <meta charset = "utf-8">
	<title>Update Table</title>
</head>
<body>
    <form action = "updatePractice" method = "POST">
    <input type = "text" name = "username" placeholder = "username">
    <input type = "password" name = "password" placeholder = "password">
    <select name = "id" id = "">
    	 <?php
    	     $query = select * from phpproject;
    	     $result = mysqli_query($connection,$query);
    	     while($row = mysqli_fetch_row($result))
    	     {
    	     	id = ['$id'];
    	     	echo <option value = '$id'>$id</select>
    	     } 
    	 ?>
    </select>
    <input type = "submit" name = "submit" value = "update">

</body>
</html>