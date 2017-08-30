<?php include "db.php";?>
<?php include "myFunction.php";?>
<?php
  if(isset($_POST['submit']))
  {
     updateTable();
  }
  if(isset($_POST['delete']))
  {
    deleteTable();
  }
?>
<!DOCTYPE html>
<html lang = "en">
<head>
  <meta charset = "UTF-8">
  <title>Update User</title>
	<style>
	input:focus {
	    background-color: cyan;
	}
	div{
		padding : 30px;
		border : 1px solid black;
		margin-top : 20px;
		margin-left: 500px;
		margin-right: 500px;
		background-color: #fff;
	}
    </style>
</head>
<body>
<form action = "updateUser.php" method = "POST">
<h1 align = "center">UPDATE FORM</h1>
<div align = "center">
    <input type = "text" name = "name" placeholder="Username"><br/><br/>
    <input type = "password" name = "password" placeholder="Password"><br/><br/>
        <select name = "id" id = "">
<!--            <option value = '$id'>1</option>  -->
        	   <?php
                     showAllData();
        	   ?>
        </select> 
       <br/><br/>
    <input type = "submit" name = "submit" value = "Update"><br/><br/>
    <input type = "submit" name = "delete" value = "Delete"><br/><br/>
</div>
</form>
</body>
</html>