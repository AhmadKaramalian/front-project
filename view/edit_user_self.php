

<!doctype html>
<html lang="fa">
    <head>
        <title>ویرایشe کاربر</title>
        <meta charset="utf-8">

        <style>
            
            :lang(fa){
                direction: rtl;
            }
            label{
                text-align: right;
            }
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
  cursor: pointer
            }
		 input[type=text],[type=tel],[type=email],[type=password]{
 height:30px;
 
 }
	

			.btn:hover {
			border: 5px solid #13ffc4;
			  color: #13ffc4;
			}
            input, textarea{
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
 <form action="" method="post">
    <h1>
      ویرایش کاربر
    </h1>    
               <label for="fullname">نام کامل</label>
         <br>
            <input type="text" name="fullname" id="fullname" value="<?php if(isset($row['fullname']) ) echo $row['fullname']; ?>">
	<br>
	  <label for="username">نام کاربری</label>
         <br>
            <input type="text" name="username" id="username" value="<?php if(isset($row['username']) ) echo $row['username']; ?>">
    <br>

	 <label for="pass"> رمز عبور:</label>
    <br>
    <input type="password" id="password" name="password" value="<?php if(isset($row['password']) ) echo $row['password']; ?>" required >
    <br>

	 <label for="number"> شماره:</label>
    <br>
    <input type="number" id="number" name="number" value="<?php if(isset($row['number']) ) echo $row['number']; ?>" required >
    <br>

	 <label for="email"> ایمیل:</label>
    <br>
    <input type="email" id="email" name="email"  value="<?php if(isset($row['email']) ) echo $row['email']; ?>" >
    <br>
  
    <br>
 <input class="btn" type="submit" name = "submit" value="ویرایش">
</form>
    </body>

</html>