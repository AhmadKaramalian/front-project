
<!doctype html>
<html lang="fa">
    <head>
        <title>ثبت نام کاربر</title>
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
 <form action="register.php" method="post">
    <h1>
      ثبت نام کاربر
    </h1>    
               <label for="fullname">نام کامل</label>
         <br>
            <input type="text" name="fullname" id="fullname">
	<br>
	  <label for="username">نام کاربری</label>
         <br>
            <input type="text" name="username" id="username">
    <br>

	 <label for="pass"> رمز عبور:</label>
    <br>
    <input type="password" id="password" name="password" required >
 <input class="btn" type="submit" name = "submit" value="ثبت نام">
</form>
    </body>

</html>