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
require_once("connectbooks_pdo.php");
$sql="select * from member where memId=:memid and memPsw=:memPsw";
$member=$pdo->prepare($sql);
$member->bindParam(":memid",$_REQUEST['memId']);
$member->bindParam(":memPsw",$_REQUEST['memPsw']);
$member->execute();
while($memrow=$member->fetch()){
?>

<form method="post" action="27memUpdateToDb.php">
<input type="hidden" name="no" value="<?php echo $memrow['no']?>">
<table>
<tr><td>會員名稱</td><td><input type="text" name="ename" value="<?php echo $memrow['memName']?>"></td></tr>
<tr><td>帳號</td><td><input type="text" name="memid" value="<?php echo $memrow['memId']?>"></td></tr>
<tr><td>密碼</td><td><input type="password" name="mempsw" value="<?php echo $memrow['memPsw']?>"></td></tr>
<tr><td>重設密碼</td><td><input type="password" name="newmempsw" ></td></tr>
<tr><td>確認密碼</td><td><input type="password" name="twonewmempsw" ></td></tr>
<tr><td>e-mail</td><td><input type="text" name="email" value="<?php echo $memrow['email']?>"></td></tr>
<tr><td>性別</td><td><input type="radio" name="sex" value="0" <?php echo ($memrow['sex']==0)? "checked":"" ?>>女
<input type="radio" name="sex" value="1" id="male" <?php echo ($memrow['sex']==1)? "checked":"" ?>>男</td></tr>
<tr><td>生日</td><td><input type="text" name="brith" value="<?php echo $memrow['birthday']?>"> 
<select name>
<?php 
$yy=date("Y");//日期要用大寫
$yybirthday=substr($memrow['birthday'],0,4);
for($i=1950;$i<=$yy;$i++){
echo "<option value='$i'",($yybirthday==$i)? "selected":" ",">$i</option>";
}
?>
</select>
年
</td></tr>
<tr><td>電話號碼</td><td><input type="text" name="tel" value="<?php echo $memrow['tel']?>"></td></tr>
</table>
<input type="submit" value="修改">
</form>

<?php
}
}catch(PDOException $e){
  echo $e->getLine();
  echo $e->getMessage();
}

?>


</body>
</html>