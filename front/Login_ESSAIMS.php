<?php
  $dsn="mysql:host=localhost;dbname=zd720g1;charset=utf8;";
  $user="zd702g1";
  $password="coco01";
  $options=array( PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION);
  $pdo=new PDO( $dsn, $user, $password, $options);  
?>