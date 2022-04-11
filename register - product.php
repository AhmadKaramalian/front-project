<?php
 
include"lib/db.php";
include"lib/settings.php";


if( isset( $_POST['submit'] ) ){ // اگر از فرم آمده
    // a. validate data
    // b. عملیات درج
    // 1. connect db
   if( $dbc = new db( $dbHost, $dbUser, $dbPass, $dbName,$dbcharset)){
  //  $dbc -> set_charset('utf8_mb4');
    // 2. create query
    $sql = "INSERT INTO product(name, code, gender,color,material) VALUES (?,?,?,?,?)"; //('{$_POST['fullname']}', '{$_POST['username']}', '{$_POST['password']}')";
       
    // 3. execute query
    $result = $dbc -> query( $sql,$_POST['name'],$_POST['code'],$_POST['gender'],$_POST['color'],$_POST['material']);
    // 4. close connection
    $dbc -> close();

    // include a view
    echo 'با موفقیت درج شد';
    ?>

<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge">

  <style>
  .btn {
  background-color: #965781;
  border: none;
  color: white;
  padding: 16px 32px;
  text-align: center;
  font-size: 16px;
  margin: 4px 2px;
  opacity: 0.6;
  transition: 0.3s;
  display: inline-block;
  text-decoration: none;
  cursor: pointer;
  
            }

	

			.btn:hover {
			border: 5px solid #13ffc4;
			  color: #13ffc4;
			}
           .btn{
			border:none;
			border-radius:15px;
                width: 50%;
                font-family: Impact, Haettenschweiler,
                 'Arial Narrow Bold', sans-serif;
            }
            textarea{
                height: 8em;
            }
            body{
			text-align:center;
                margin: auto;
                font-family: Impact, Haettenschweiler,
                 'Arial Narrow Bold', sans-serif;
                padding: 2% 10% ;
                background-color: #119985;
            }
  </style>
</head>
<body>
<br>
<a href="add_product.php">
<button class="btn"  name ="btn" "submit" >افزودن كالاي جديد</button>
</a>

</body>
</html>
<?php
}
}
//  else{
    // نمایش فرم
  //  include 'add_user.php';
//}

?>