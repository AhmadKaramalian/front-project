<?php
foreach($_POST as $k => $v)
    $$k=$v;
for($i=0,$i<=$_POST[color[]].lengh,i++){
    $color=$color+''+$_POST[color[$i]];
    
}
//اتصال به دیتا بیس
$dbc = new mysqli('localhost','root','','project');
$dbc -> select_db('test');
//کویری
$sql= "INSERT INTO product(name,gender,number,email,pass)
VALUES('{$name}','{$gender}','{$textarea}','{$email}','{$pass}') ";
//اجرای کویری
$result = $dbc -> query($sql);
//بستن کویری
$dbc-> close();

?>