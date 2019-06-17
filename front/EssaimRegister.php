
<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>無標題文件</title>
</head>

<body>
<?php
try{
require_once('connectbooks_pdo.php');
$sql="insert into member(memName,memId,memPsw,email,sex,birthday,tel) values(?,?,?,?,?,?,?)";
$newmember=$pdo->prepare($sql);
$newmember->bindValue(1,$_REQUEST['memName']);
$newmember->bindValue(2,$_REQUEST['newmemId']);
$newmember->bindValue(3,$_REQUEST['cpass']);
$newmember->bindValue(4,$_REQUEST['email']);
$newmember->bindValue(5,$_REQUEST['sex']);
$newmember->bindValue(6,$_REQUEST['birthday']);
$newmember->bindValue(7,$_REQUEST['phone']);
$newmember->execute();
if($member=$newmember->fetch()){
echo "<script>alert('您已成功加入會員'); location.href='Register.php'</script>";//第1個字不能大寫  
}catch(PDOException $e){
 echo "錯誤行:",$e->getline();//檢查錯誤訊息
 echo "錯誤訊息:",$e->getMessage();
 }
?>
</body>
</html>