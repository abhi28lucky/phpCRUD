 <?php include "db.php";?>
 <?php
    function showAllData()
    {
    	global $connection;
	    $query = "SELECT * FROM phpproject";

	    $result = mysqli_query($connection,$query);

	    if(!$result)
	    {
	    	die("query fail ".mysqli_error());
	    }

	    while($row = mysqli_fetch_assoc($result))
	    {
	    	$id = $row['id'];
	    	echo "<option value = '$id'>$id</option>";
	    }
	}
	?>

<?php

   function updateTable()
   {
   	 global $connection;
   	 $username = $_POST['name'];
     $password = $_POST['password'];
     $id = $_POST['id'];
     
      $query  = "UPDATE phpproject SET ";
      $query .= "username = '$username', ";
      $query .= "password = '$password' ";
      $query .= "WHERE id = $id ";

      $result = mysqli_query($connection,$query);

    if(!$result)
    {
      die("query failed".mysqli_error($connection));
    }
   }
   function deleteTable()
   {
   	  global $connection;
   	  $username = $_POST['name'];
      $password = $_POST['password'];
      $id = $_POST['id'];
     
      $query  = "DELETE FROM phpproject ";
      $query .= "WHERE id = $id ";

      $result = mysqli_query($connection,$query);

    if(!$result)
    {
      die("query failed".mysqli_error($connection));
    }
   }

?>