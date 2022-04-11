

<!doctype html>
<html lang="fa">
    <head>
        <title>ويرايش محصول</title>
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
      ویرایش محصول
    </h1>    
               <label for="name">نام محصول</label>
         <br>
            <input type="text" name="name" id="name" value="<?php if(isset($row['name']) ) echo $row['name']; ?>">
	<br>
	  <label for="code">كد محصول</label>
         <br>
            <input type="text" name="code" id="code" value="<?php if(isset($row['code']) ) echo $row['code']; ?>">
    <br>


	 <label for="color"> رنگ:</label>
    <br>
    <input type="color" id="color" name="color" value="<?php if(isset($row['color']) ) echo $row['color']; ?>" required >
    <br>

	 <label for="material"> جنس :</label>
    <br>
    <input type="text" id="material" name="material"  value="<?php if(isset($row['material']) ) echo $row['material']; ?>" >
    <br>
    <label for="gender"> نوع محصول:</label>
    <br><br>
    <div style="display:inline-block;float:center">
    <label for="man"> مردانه </label>
    <input type="radio" id="man" name="gender" value="man" <?php if(isset($row['gender'])&& ($row['gender'])=="man" ) echo 'checked'; ?> >  
    <br>
    <label for="woman"> زنانه </label> 
    <input type="radio" id="woman" name="gender" value="woman" <?php if(isset($row['gender'])&&($row['gender'])=="woman") echo 'checked'; ?>  ></div>   
    <br>
 <input class="btn" type="submit" name = "submit" value="ويرايش">
</form>
    </body>

</html>