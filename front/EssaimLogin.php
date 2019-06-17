<?php
session_start();
ob_start();
?>
<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>無標題文件</title>
</head>

<body>
<?php
try{
  	
  require_once("connectBooks_PDO.php");
  $sql = "select * from member where memId=:memId and memPsw=:memPsw";	
  $member = $pdo->prepare($sql);
  $member->bindValue(":memId",$_REQUEST["memId"]);
  $member->bindValue(":memPsw",$_REQUEST["memPsw"]);
  $member->execute();
  
  if( $member->rowCount()==0){
  echo "<script>alert('帳號錯誤，請重新登入'); location.href='Register.php'</script>";//第1個字不能大寫	  
	
  }else{
    $memRow = $member->fetch(PDO::FETCH_ASSOC);
	$_SESSION['memno']= $memRow['no'];
	$_SESSION['memId']= $memRow['memId'];
	$_SESSION['memName']= $memRow['memName'];
	$_SESSION['email']= $memRow['email'];
  	header("Location:Register.php");

  }
}catch(PDOException $e){
  echo $e->getMessage();
}
?>
</body>
</html>