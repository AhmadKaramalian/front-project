<?php
include"lib/db.php";
include"lib/settings.php";

if( isset( $_POST['submit']) ){ // اگر از فرم آمده
    // a. validate data
    $id = $_GET['id'];
    // b. عملیات درج
    // 1. connect db
    $dbc = new db( $dbHost, $dbUser, $dbPass, $dbName,$dbcharset);;
  
        // 2. create query
        $sql = "UPDATE product SET
                name = ?,
                code = ?,
                gender = ?,
                color   = ?,
                material=?
                WHERE id = ?";
        // 3. execute query
        $result = $dbc -> query( $sql, $_POST['name'], $_POST['code'],$_POST['gender'],$_POST['color'],$_POST['material'], $_GET['id'] );

    // 4. close connection
    $dbc -> close();

    // include a view
    echo 'با موفقیت ویرایش شد';
}


else{
    // دریافت اطلاعات فرم
    
    // 1. connect db
   $dbc = new db( $dbHost, $dbUser, $dbPass, $dbName,$dbcharset);
    // 2. create query
    $sql = "SELECT * FROM product
            WHERE id = ?";
    // 3. execute query
    $result = $dbc -> query( $sql, $_GET['id'] );
    $row = $result -> fetchArray();
    // 4. close connection
    $dbc -> close();

    // نمایش فرم
    //var_dump( $row );
    include 'view/edit_product.php';
}
?>