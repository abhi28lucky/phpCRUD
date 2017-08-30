<?php

   $connection = mysqli_connect('localhost' , 'root' , '' , 'abhi');

   if($connection)
   {
   	  echo "Database connection successful"."<br/>";

   }
   else
   {
   	  die("not connected to database");
   	  echo "<br/>";
   }
   

   $query = "select * from phpproject";

   $result = mysqli_query($connection,$query);

?>
		<pre>       
		   <?php
			   while($row = mysqli_fetch_assoc($result))   // while($row = mysqli_fetch_row($result))
			   {
			      print_r($row);
			   }
		   ?>
		</pre>