<?php

// ไอดีที่เราทำการดึงเพื่อนำมาแก้ไข

$objDB = mssql_select_db("work1");

$ID = $_GET['ID'];

//เช็คว่ามีรูปมั้ย 
$name = iconv("utf-8", "tis-620", $_POST['name']);
    $path = "uploads/";
    $image = iconv("utf-8", "tis-620", $_FILES['image']['name']);
    $tmp_name = $_FILES['image']['tmp_name'];
    $temp = explode(".", $_FILES["image"]["name"]);
    $newfilename = round(microtime(true)) . '.' . end($temp);
    //upload file in folder
    move_uploaded_file($_FILES["image"]["tmp_name"], "../uploads/" . $newfilename);
    $sql = ("UPDATE cover SET Image='{$newfilename}', Name='{$name}' WHERE ID='{$ID}'");

    $objQuery = mssql_query($sql);


?>
<script type="text/javascript">
    window.location = "../admin.php?Menu=6&Submenu=indexcover";
</script>