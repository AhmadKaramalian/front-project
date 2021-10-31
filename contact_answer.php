<?php
$link=mysqli_connect("localhost","root","","cofee");
if(!$link)
    echo "error";
    exit();

$title=$_GET['title'];
$email=$_GET['email'];
$textbody=$_GET['textbody'];

$query="INSERT INTO contact(title,email,textbody)VALUES
('$title','$email','$textbody')";

if($result=mysqli_query($link,$query)){
        echo "<div class='type'><p>ok</p></div>";
}
?>