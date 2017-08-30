<?php

print_r($_GET);

?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

<!-- <a href = "getSuperVariable.php?id=10&source=reports">click here</a> -->
<?php

  $id = 10;
  $button = "click";
?>
<a href = "getSuperVariable.php?id=<?php  echo $id; ?>"><?php echo $button;?></a>
</body>
</html>