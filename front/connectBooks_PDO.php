<?php
  $dsn="mysql:host=localhost;dbname=books;charset=utf8;";
  $user="root";
  $password="15253545";
  $options=array( PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION);
  $pdo=new PDO( $dsn, $user, $password, $options);  
?>