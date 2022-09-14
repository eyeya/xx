<?php

// ไอดีที่เราทำการดึงเพื่อนำมาแก้ไข

$objDB = mssql_select_db("work1");

$ID = $_GET['ID'];

$header = iconv("utf-8", "tis-620", $_POST['header']);
$news = iconv("utf-8", "tis-620", $_POST['news']);
$day = iconv("utf-8", "tis-620", $_POST['day']);
$tmp_name = $_FILES['image']['tmp_name'];
$temp = explode(".", $_FILES["image"]["name"]);
$newfilename = round(microtime(true)) . '.' . end($temp);
$sql = ("UPDATE news SET Image='{$newfilename}', Header='{$header}', News='{$news}', Day='{$day}' WHERE ID='{$ID}'");

$objQuery = mssql_query($sql);

//เช็คว่ามีรูปมั้ย
if (!empty($_FILES['image']['tmp_name'])) {
    move_uploaded_file($_FILES["image"]["tmp_name"], "../uploads/" . $newfilename);
}

?>
<script type="text/javascript">
    window.location = "../admin.php?Menu=1&Submenu=indexnews2";
</script>