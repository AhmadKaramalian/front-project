<?php
foreach($_POST as $k => $v)
    $$k=$v;

//اتصال به دیتا بیس
$dbc = new mysqli('localhost','root','');
$dbc -> select_db('test');
//کویری
$sql= "INSERT INTO user(name,last_name,number,email,pass)
VALUES('{$name}','{$last_name}','{$number}','{$email}','{$pass}') ";
//اجرای کویری
$result = $dbc -> query($sql);
//بستن کویری
$dbc-> close();

?>