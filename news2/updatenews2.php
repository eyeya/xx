<?php

// ไอดีที่เราทำการดึงเพื่อนำมาแก้ไข

$objDB = mssql_select_db("work1");

$ID = $_GET['ID'];

$header = iconv("utf-8", "tis-620", $_POST['header']);
$news = iconv("utf-8", "tis-620", $_POST['news']);
$day = iconv("utf-8", "tis-620", $_POST['day']);


//เช็คว่ามีรูปมั้ย
if (!empty($_FILES['image']['tmp_name'])) {
    $path = "uploads/";
    $image = iconv("utf-8", "tis-620", $_FILES['image']['name']);
    $tmp_name = $_FILES['image']['tmp_name'];
    $temp = explode(".", $_FILES["image"]["name"]);
    $newfilename = round(microtime(true)) . '.' . end($temp);
    //upload file in folder
    move_uploaded_file($_FILES["image"]["tmp_name"], "../uploads/" . $newfilename);
    $sql = ("UPDATE news SET Image='{$newfilename}'WHERE ID='{$ID}'");
    $objQuery = mssql_query($sql);
}

$sql = ("UPDATE news SET  Header='{$header}', News='{$news}', Day='{$day}' WHERE ID='{$ID}'");
$objQuery = mssql_query($sql);

?>
<script type="text/javascript">
    window.location = "../admin.php?Menu=1&Submenu=indexnews2";
</script>