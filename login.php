<!doctype html>
<html lang="fa">
    <head>
        <title>ورود کاربر</title>
        <meta charset="utf-8">

        <style>
            
            :lang(fa){
                direction: rtl;
            }
            label{
                text-align: right;
            }
            .btn {
  background-color:#325469		;
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
			border: 5px solid #ff5232;
			  color: #ff5232;
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
                background-color: #3f1912;
				color:#aaaaaa;
            }
            

        </style>
    </head>

    <body>
<form action="contact.php" method="post">
    <h1>
ورود کاربر    </h1>    
    <label for="name">نام :</label>
    <br>
    <input type="text" id="name" name="name" required>
	<br>

	 <label for="pass"> رمز عبور:</label>
    <br>
    <input type="password" id="pass" name="pass" required >
      <input class="btn" type="submit" value="ورود">
</form>
    </body>

</html>