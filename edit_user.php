<!doctype html>
<html lang="fa">
    <head>
        <title>ویرایش پروفایل کاربر</title>
        <meta charset="utf-8">

        <style>
            
            :lang(fa){
                direction: rtl;
            }
            label{
                text-align: right;
            }
            .btn {
  background-color:#638d61;
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
			border: 5px solid #d4e88f;
			  color: #d4e88f;
			}
            input, textarea{
			border:none;
			border-radius:15px;
                width: 50%;
                font-family: Impact, Haettenschweiler,
                 'Arial Narrow Bold', sans-serif;
            }
            textarea{
                height: 6em;
            }
            body{
			text-align:center;
                margin: auto;
                font-family: Impact, Haettenschweiler,
                 'Arial Narrow Bold', sans-serif;
                padding: 2% 10% ;
                background-color: #4d5434;
				color:#aaaaaa;
            }
            

        </style>
    </head>

    <body>
<form action="contact.php" method="post">
    <h1>
     ویرایش پروفایل کاربر
    </h1>    
    <label for="name">نام :</label>
    <br>
    <input type="text" id="name" name="name" required>
	<br>
	 <label for="last_name"> نام خانوادگی:</label>
    <br>
    <input type="text" id="last_name" name="last_name">
    <br>
	 <label for="pass"> رمز عبور:</label>
    <br>
    <input type="password" id="pass" name="pass" required >
      <input class="btn" type="submit" value="ویرایش">
</form>
    </body>

</html>