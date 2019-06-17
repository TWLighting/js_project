<!DOCTYPE html>
<?php
	session_start();
	ob_start();
?>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>ESSAIMS</title>
</head>
<body>
<?php

try{
  	if(isset($_SESSION['memName']){
  		unset($_SESSION['memno']);
  		unset($_SESSION['memId']);
  		unset($_SESSION['memName']);
  		unset($_SESSION['email']);
  		header("Location:Register.php");
  }

}catch(PDOException $e){
  echo $e->getMessage();
}
?>
</body>
</html>