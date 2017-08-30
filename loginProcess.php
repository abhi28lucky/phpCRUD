
<?php
   include "formValidation.php";
   if(isset($_POST['submit']))
   {
   	  $username = $_POST['name'];
   	  $password = $_POST['password'];

      /*if($username && $password)
      {
   	    echo "username is : " . $username . "<br/>";
   	    echo "password is : " . $password . "<br/>";
      }*/
      
      /*$username = mysqli_real_escape_string($connection, $username );  //to prevent sql injection so dat
      $password = mysqli_real_escape_string($connection, $password );*/  //username could read the escape characters 
      //db connection
      
      $connection = mysqli_connect('localhost','root','','abhi');

      if($connection)
      {
      	echo "we are connected";
      }
      else
      {
      	die("database connection failed");
      }
       
      //runing Queries

      $query = "INSERT INTO phpproject(username,password)";
      $query .= " VALUES('$username','$password')";

      $result = mysqli_query($connection,$query);

      if(!$result)
      {
      	die("Query Failed" . mysqli_error());
      }

   }

?>